<?php

namespace Mf2;

use DOMDocument;
use DOMElement;
use DOMXPath;
use DOMNode;
use DOMNodeList;
use Exception;
use SplObjectStorage;
use stdClass;

/**
 * Parse Microformats2
 *
 * Functional shortcut for the commonest cases of parsing microformats2 from HTML.
 *
 * Example usage:
 *
 *     use Mf2;
 *     $output = Mf2\parse('<span class="h-card">Barnaby Walters</span>');
 *     echo json_encode($output, JSON_PRETTY_PRINT);
 *
 * Produces:
 *
 *     {
 *      "items": [
 *       {
 *        "type": ["h-card"],
 *        "properties": {
 *         "name": ["Barnaby Walters"]
 *        }
 *       }
 *      ],
 *      "rels": {}
 *     }
 *
 * @param string|DOMDocument $input The HTML string or DOMDocument object to parse
 * @param string $url The URL the input document was found at, for relative URL resolution
 * @param bool $convertClassic whether or not to convert classic microformats
 * @return array Canonical MF2 array structure
 */
function parse($input, $url = null, $convertClassic = true) {
	$parser = new Parser($input, $url);
	return $parser->parse($convertClassic);
}

/**
 * Fetch microformats2
 *
 * Given a URL, fetches it (following up to 5 redirects) and, if the content-type appears to be HTML, returns the parsed
 * microformats2 array structure.
 *
 * Not that even if the response code was a 4XX or 5XX error, if the content-type is HTML-like then it will be parsed
 * all the same, as there are legitimate cases where error pages might contain useful microformats (for example a deleted
 * h-entry resulting in a 410 Gone page with a stub h-entry explaining the reason for deletion). Look in $curlInfo['http_code']
 * for the actual value.
 *
 * @param string $url The URL to fetch
 * @param bool $convertClassic (optional, default true) whether or not to convert classic microformats
 * @param &array $curlInfo (optional) the results of curl_getinfo will be placed in this variable for debugging
 * @return array|null canonical microformats2 array structure on success, null on failure
 */
function fetch($url, $convertClassic = true, &$curlInfo=null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Accept: text/html'
	));
	$html = curl_exec($ch);
	$info = $curlInfo = curl_getinfo($ch);
	curl_close($ch);

	if (strpos(strtolower($info['content_type']), 'html') === false) {
		// The content was not delivered as HTML, do not attempt to parse it.
		return null;
	}

	# ensure the final URL is used to resolve relative URLs
	$url = $info['url'];

	return parse($html, $url, $convertClassic);
}

/**
 * Unicode to HTML Entities
 * @param string $input String containing characters to convert into HTML entities
 * @return string
 */
function unicodeToHtmlEntities($input) {
	return mb_convert_encoding($input, 'HTML-ENTITIES', mb_detect_encoding($input));
}

/**
 * Collapse Whitespace
 *
 * Collapses any sequences of whitespace within a string into a single space
 * character.
 *
 * @deprecated since v0.2.3
 * @param string $str
 * @return string
 */
function collapseWhitespace($str) {
	return preg_replace('/[\s|\n]+/', ' ', $str);
}

function unicodeTrim($str) {
	// this is cheating. TODO: find a better way if this causes any problems
	$str = str_replace(mb_convert_encoding('&nbsp;', 'UTF-8', 'HTML-ENTITIES'), ' ', $str);
	$str = preg_replace('/^\s+/', '', $str);
	return preg_replace('/\s+$/', '', $str);
}

/**
 * Microformat Name From Class string
 *
 * Given the value of @class, get the relevant mf classnames (e.g. h-card,
 * p-name).
 *
 * @param string $class A space delimited list of classnames
 * @param string $prefix The prefix to look for
 * @return string|array The prefixed name of the first microfomats class found or false
 */
function mfNamesFromClass($class, $prefix='h-') {
	$class = str_replace(array(' ', '	', "\n"), ' ', $class);
	$classes = explode(' ', $class);
	$classes = preg_grep('#^(h|p|u|dt|e)-([a-z0-9]+-)?[a-z]+(-[a-z]+)*$#', $classes);
	$matches = array();

	foreach ($classes as $classname) {
		$compare_classname = ' ' . $classname;
		$compare_prefix = ' ' . $prefix;
		if (strstr($compare_classname, $compare_prefix) !== false && ($compare_classname != $compare_prefix)) {
			$matches[] = ($prefix === 'h-') ? $classname : substr($classname, strlen($prefix));
		}
	}

	return $matches;
}

/**
 * Get Nested µf Property Name From Class
 *
 * Returns all the p-, u-, dt- or e- prefixed classnames it finds in a
 * space-separated string.
 *
 * @param string $class
 * @return array
 */
function nestedMfPropertyNamesFromClass($class) {
	$prefixes = array('p-', 'u-', 'dt-', 'e-');
	$propertyNames = array();

	$class = str_replace(array(' ', '	', "\n"), ' ', $class);
	foreach (explode(' ', $class) as $classname) {
		foreach ($prefixes as $prefix) {
			// Check if $classname is a valid property classname for $prefix.
			if (mb_substr($classname, 0, mb_strlen($prefix)) == $prefix && $classname != $prefix) {
				$propertyName = mb_substr($classname, mb_strlen($prefix));
				$propertyNames[$propertyName][] = $prefix;
			}
		}
	}

	foreach ($propertyNames as $property => $prefixes) {
		$propertyNames[$property] = array_unique($prefixes);
	}

	return $propertyNames;
}

/**
 * Wraps mfNamesFromClass to handle an element as input (common)
 *
 * @param DOMElement $e The element to get the classname for
 * @param string $prefix The prefix to look for
 * @return mixed See return value of mf2\Parser::mfNameFromClass()
 */
function mfNamesFromElement(\DOMElement $e, $prefix = 'h-') {
	$class = $e->getAttribute('class');
	return mfNamesFromClass($class, $prefix);
}

/**
 * Wraps nestedMfPropertyNamesFromClass to handle an element as input
 */
function nestedMfPropertyNamesFromElement(\DOMElement $e) {
	$class = $e->getAttribute('class');
	return nestedMfPropertyNamesFromClass($class);
}

/**
 * Converts various time formats to HH:MM
 * @param string $time The time to convert
 * @return string
 */
function convertTimeFormat($time) {
	$hh = $mm = $ss = '';
	preg_match('/(\d{1,2}):?(\d{2})?:?(\d{2})?(a\.?m\.?|p\.?m\.?)?/i', $time, $matches);

	// If no am/pm is specified:
	if (empty($matches[4])) {
		return $time;
	} else {
		// Otherwise, am/pm is specified.
		$meridiem = strtolower(str_replace('.', '', $matches[4]));

		// Hours.
		$hh = $matches[1];

		// Add 12 to hours if pm applies.
		if ($meridiem == 'pm' && ($hh < 12)) {
			$hh += 12;
		}

		$hh = str_pad($hh, 2, '0', STR_PAD_LEFT);

		// Minutes.
		$mm = (empty($matches[2]) ) ? '00' : $matches[2];

		// Seconds, only if supplied.
		if (!empty($matches[3])) {
			$ss = $matches[3];
		}

		if (empty($ss)) {
			return sprintf('%s:%s', $hh, $mm);
		}
		else {
			return sprintf('%s:%s:%s', $hh, $mm, $ss);
		}
	}
}

/**
 * Normalize an ordinal date to YYYY-MM-DD
 * This function should only be called after validating the $dtValue
 * matches regex \d{4}-\d{2}
 * @param string $dtValue
 * @return string
 */
function normalizeOrdinalDate($dtValue) {
	list($year, $day) = explode('-', $dtValue, 2);
	$day = intval($day);
	if ($day < 367 && $day > 0) {
		$date = \DateTime::createFromFormat('Y-z', $dtValue);
		$date->modify('-1 day'); # 'z' format is zero-based so need to adjust
		if ($date->format('Y') === $year) {
			return $date->format('Y-m-d');
		}
	}
	return '';
}

/**
 * If a date value has a timezone offset, normalize it.
 * @param string $dtValue
 * @return string isolated, normalized TZ offset for implied TZ for other dt- properties
 */
function normalizeTimezoneOffset(&$dtValue) {
	preg_match('/Z|[+-]\d{1,2}:?(\d{2})?$/i', $dtValue, $matches);

	if (empty($matches)) {
		return null;
	}

	$timezoneOffset = null;

	if ( $matches[0] != 'Z' ) {
		$timezoneString = str_replace(':', '', $matches[0]);
		$plus_minus = substr($timezoneString, 0, 1);
		$timezoneOffset = substr($timezoneString, 1);
		if ( strlen($timezoneOffset) <= 2 ) {
			$timezoneOffset .= '00';
		}
		$timezoneOffset = str_pad($timezoneOffset, 4, 0, STR_PAD_LEFT);
		$timezoneOffset = $plus_minus . $timezoneOffset;
		$dtValue = preg_replace('/Z?[+-]\d{1,2}:?(\d{2})?$/i', $timezoneOffset, $dtValue);
	}

	return $timezoneOffset;
}

function applySrcsetUrlTransformation($srcset, $transformation) {
	return implode(', ', array_filter(array_map(function ($srcsetPart) use ($transformation) {
		$parts = explode(" \t\n\r\0\x0B", trim($srcsetPart), 2);
		$parts[0] = rtrim($parts[0]);

		if (empty($parts[0])) { return false; }

		$parts[0] = call_user_func($transformation, $parts[0]);

		return $parts[0] . (empty($parts[1]) ? '' : ' ' . $parts[1]);
	}, explode(',', trim($srcset)))));
}

/**
 * Microformats2 Parser
 *
 * A class which holds state for parsing microformats2 from HTML.
 *
 * Example usage:
 *
 *     use Mf2;
 *     $parser = new Mf2\Parser('<p class="h-card">Barnaby Walters</p>');
 *     $output = $parser->parse();
 */
class Parser {
	/** @var string The baseurl (if any) to use for this parse */
	public $baseurl;

	/** @var DOMXPath object which can be used to query over any fragment*/
	public $xpath;

	/** @var DOMDocument */
	public $doc;

	/** @var SplObjectStorage */
	protected $parsed;

	/**
	 * @var bool
	 */
	public $jsonMode;

	/** @var boolean Whether to include experimental language parsing in the result */
	public $lang = false;

	/** @var bool Whether to include alternates object (dropped from spec in favor of rel-urls) */
	public $enableAlternates = false;

	/**
	 * Elements upgraded to mf2 during backcompat
	 * @var SplObjectStorage
	 */
	protected $upgraded;

	/**
	 * Whether to convert classic microformats
	 * @var bool
	 */
	public $convertClassic;

	/**
	 * Constructor
	 *
	 * @param DOMDocument|string $input The data to parse. A string of HTML or a DOMDocument
	 * @param string $url The URL of the parsed document, for relative URL resolution
	 * @param boolean $jsonMode Whether or not to use a stdClass instance for an empty `rels` dictionary. This breaks PHP looping over rels, but allows the output to be correctly serialized as JSON.
	 */
	public function __construct($input, $url = null, $jsonMode = false) {
		libxml_use_internal_errors(true);
		if (is_string($input)) {
			if (class_exists('Masterminds\\HTML5')) {
					$doc = new \Masterminds\HTML5(array('disable_html_ns' => true));
					$doc = $doc->loadHTML($input);
			} else {
				$doc = new DOMDocument();
				@$doc->loadHTML(unicodeToHtmlEntities($input), \LIBXML_NOWARNING);
			}
		} elseif (is_a($input, 'DOMDocument')) {
			$doc = clone $input;
		} else {
			$doc = new DOMDocument();
			@$doc->loadHTML('');
		}

		$this->xpath = new DOMXPath($doc);

		$baseurl = $url;
		foreach ($this->xpath->query('//base[@href]') as $base) {
			$baseElementUrl = $base->getAttribute('href');

			if (parse_url($baseElementUrl, PHP_URL_SCHEME) === null) {
				/* The base element URL is relative to the document URL.
				 *
				 * :/
				 *
				 * Perhaps the author was high? */

				$baseurl = resolveUrl($url, $baseElementUrl);
			} else {
				$baseurl = $baseElementUrl;
			}
			break;
		}

		// Ignore <template> elements as per the HTML5 spec
		foreach ($this->xpath->query('//template') as $templateEl) {
			$templateEl->parentNode->removeChild($templateEl);
		}

		$this->baseurl = $baseurl;
		$this->doc = $doc;
		$this->parsed = new SplObjectStorage();
		$this->upgraded = new SplObjectStorage();
		$this->jsonMode = $jsonMode;
	}

	private function elementPrefixParsed(\DOMElement $e, $prefix) {
		if (!$this->parsed->contains($e))
			$this->parsed->attach($e, array());

		$prefixes = $this->parsed[$e];
		$prefixes[] = $prefix;
		$this->parsed[$e] = $prefixes;
	}

	/**
	 * Determine if the element has already been parsed
	 * @param DOMElement $e
	 * @param string $prefix
	 * @return bool
	 */
	private function isElementParsed(\DOMElement $e, $prefix) {
		if (!$this->parsed->contains($e)) {
			return false;
		}

		$prefixes = $this->parsed[$e];

		if (!in_array($prefix, $prefixes)) {
			return false;
		}

		return true;
	}

	/**
	 * Determine if the element's specified property has already been upgraded during backcompat
	 * @param DOMElement $el
	 * @param string $property
	 * @return bool
	 */
	private function isElementUpgraded(\DOMElement $el, $property) {
		if ( $this->upgraded->contains($el) ) {
			if ( in_array($property, $this->upgraded[$el]) ) {
				return true;
			}
		}

		return false;
	}

	private function resolveChildUrls(DOMElement $el) {
		$hyperlinkChildren = $this->xpath->query('.//*[@src or @href or @data]', $el);

		foreach ($hyperlinkChildren as $child) {
			if ($child->hasAttribute('href'))
				$child->setAttribute('href', $this->resolveUrl($child->getAttribute('href')));
			if ($child->hasAttribute('src'))
				$child->setAttribute('src', $this->resolveUrl($child->getAttribute('src')));
			if ($child->hasAttribute('srcset'))
				$child->setAttribute('srcset', applySrcsetUrlTransformation($child->getAttribute('href'), array($this, 'resolveUrl')));
			if ($child->hasAttribute('data'))
				$child->setAttribute('data', $this->resolveUrl($child->getAttribute('data')));
		}
	}

	/**
	 * The following two methods implements plain text parsing.
	 * @param DOMElement $element
	 * @param bool $implied
	 * @see https://wiki.zegnat.net/media/textparsing.html
	 **/
	public function textContent(DOMElement $element, $implied=false)
	{
				return preg_replace(
						'/(^[\t\n\f\r ]+| +(?=\n)|(?<=\n) +| +(?= )|[\t\n\f\r ]+$)/',
						'',
						$this->elementToString($element, $implied)
				);
	}
	private function elementToString(DOMElement $input, $implied=false)
	{
			$output = '';
			foreach ($input->childNodes as $child) {
					if ($child->nodeType === XML_TEXT_NODE) {
							$output .= str_replace(array("\t", "\n", "\r") , ' ', $child->textContent);
					} else if ($child->nodeType === XML_ELEMENT_NODE) {
							$tagName = strtoupper($child->tagName);
							if (in_array($tagName, array('SCRIPT', 'STYLE'))) {
									continue;
							} else if ($tagName === 'IMG') {
									if ($child->hasAttribute('alt')) {
											$output .= ' ' . trim($child->getAttribute('alt'), "\t\n\f\r ") . ' ';
									} else if (!$implied && $child->hasAttribute('src')) {
											$output .= ' ' . $this->resolveUrl(trim($child->getAttribute('src'), "\t\n\f\r ")) . ' ';
									}
							} else if ($tagName === 'BR') {
									$output .= "\n";
							} else if ($tagName === 'P') {
									$output .= "\n" . $this->elementToString($child);
							} else {
									$output .= $this->elementToString($child);
							}
					}
			}
			return $output;
	}

	/**
	 * Given an img property, parse its value and/or alt text
	 * @param DOMElement $el
	 * @access public
	 * @return string|array
	 */
	public function parseImg(DOMElement $el)
	{
		if ($el->hasAttribute('alt')) {
			return [
				'value' => $this->resolveUrl( $el->getAttribute('src') ),
				'alt' => $el->getAttribute('alt')
			];
		}
		return $el->getAttribute('src');
	}
	/**
	 * This method parses the language of an element
	 * @param DOMElement $el
	 * @access public
	 * @return string
	 */
	public function language(DOMElement $el)
	{
		// element has a lang attribute; use it
		if ($el->hasAttribute('lang')) {
			return unicodeTrim($el->getAttribute('lang'));
		}

		if ($el->tagName == 'html') {
			// we're at the <html> element and no lang; check <meta> http-equiv Content-Language
			foreach ( $this->xpath->query('.//meta[@http-equiv]') as $node )
			{
				if ($node->hasAttribute('http-equiv') && $node->hasAttribute('content') && strtolower($node->getAttribute('http-equiv')) == 'content-language') {
					return unicodeTrim($node->getAttribute('content'));
				}
			}
		} elseif ($el->parentNode instanceof DOMElement) {
			// check the parent node
			return $this->language($el->parentNode);
		}

		return '';
	} # end method language()

	// TODO: figure out if this has problems with sms: and geo: URLs
	public function resolveUrl($url) {
		// If not a string then return.
		if (!is_string($url)){
			return $url;
		}
		// If the URL is seriously malformed it’s probably beyond the scope of this
		// parser to try to do anything with it.
		if (parse_url($url) === false) {
			return $url;
		}

		// per issue #40 valid URLs could have a space on either side
		$url = trim($url);

		$scheme = parse_url($url, PHP_URL_SCHEME);

		if (empty($scheme) and !empty($this->baseurl)) {
			return resolveUrl($this->baseurl, $url);
		} else {
			return $url;
		}
	}

	// Parsing Functions

	/**
	 * Parse value-class/value-title on an element, joining with $separator if
	 * there are multiple.
	 *
	 * @param \DOMElement $e
	 * @param string $separator = '' if multiple value-title elements, join with this string
	 * @return string|null the parsed value or null if value-class or -title aren’t in use
	 */
	public function parseValueClassTitle(\DOMElement $e, $separator = '') {
		$valueClassElements = $this->xpath->query('./*[contains(concat(" ", @class, " "), " value ")]', $e);

		if ($valueClassElements->length !== 0) {
			// Process value-class stuff
			$val = '';
			foreach ($valueClassElements as $el) {
				$val .= $this->textContent($el);
			}

			return unicodeTrim($val);
		}

		$valueTitleElements = $this->xpath->query('./*[contains(concat(" ", @class, " "), " value-title ")]', $e);

		if ($valueTitleElements->length !== 0) {
			// Process value-title stuff
			$val = '';
			foreach ($valueTitleElements as $el) {
				$val .= $el->getAttribute('title');
			}

			return unicodeTrim($val);
		}

		// No value-title or -class in this element
		return null;
	}

	/**
	 * Given an element with class="p-*", get its value
	 *
	 * @param DOMElement $p The element to parse
	 * @return string The plaintext value of $p, dependant on type
	 * @todo Make this adhere to value-class
	 */
	public function parseP(\DOMElement $p) {
		$classTitle = $this->parseValueClassTitle($p, ' ');

		if ($classTitle !== null) {
			return $classTitle;
		}

		$this->resolveChildUrls($p);

		if ($p->tagName == 'img' and $p->hasAttribute('alt')) {
			$pValue = $p->getAttribute('alt');
		} elseif ($p->tagName == 'area' and $p->hasAttribute('alt')) {
			$pValue = $p->getAttribute('alt');
		} elseif (($p->tagName == 'abbr' or $p->tagName == 'link') and $p->hasAttribute('title')) {
			$pValue = $p->getAttribute('title');
		} elseif (in_array($p->tagName, array('data', 'input')) and $p->hasAttribute('value')) {
			$pValue = $p->getAttribute('value');
		} else {
			$pValue = $this->textContent($p);
		}

		return $pValue;
	}

	/**
	 * Given an element with class="u-*", get the value of the URL
	 *
	 * @param DOMElement $u The element to parse
	 * @return string The plaintext value of $u, dependant on type
	 * @todo make this adhere to value-class
	 */
	public function parseU(\DOMElement $u) {
		if (($u->tagName == 'a' or $u->tagName == 'area' or $u->tagName == 'link') and $u->hasAttribute('href')) {
			$uValue = $u->getAttribute('href');
		} elseif ( $u->tagName == 'img' and $u->hasAttribute('src') ) {
			$uValue = $this->parseImg($u);
		} elseif (in_array($u->tagName, array('audio', 'video', 'source', 'iframe')) and $u->hasAttribute('src')) {
			$uValue = $u->getAttribute('src');
		} elseif ($u->tagName == 'video' and !$u->hasAttribute('src') and $u->hasAttribute('poster')) {
			$uValue = $u->getAttribute('poster');
		} elseif ($u->tagName == 'object' and $u->hasAttribute('data')) {
			$uValue = $u->getAttribute('data');
		} elseif (($classTitle = $this->parseValueClassTitle($u)) !== null) {
				$uValue = $classTitle;
		} elseif (($u->tagName == 'abbr' or $u->tagName == 'link') and $u->hasAttribute('title')) {
			$uValue = $u->getAttribute('title');
		} elseif (in_array($u->tagName, array('data', 'input')) and $u->hasAttribute('value')) {
			$uValue = $u->getAttribute('value');
		} else {
			$uValue = $this->textContent($u);
		}

		return $this->resolveUrl($uValue);
	}

	/**
	 * Given an element with class="dt-*", get the value of the datetime as a php date object
	 *
	 * @param DOMElement $dt The element to parse
	 * @param array $dates Array of dates processed so far
	 * @param string $impliedTimezone
	 * @return string The datetime string found
	 */
	public function parseDT(\DOMElement $dt, &$dates = array(), &$impliedTimezone = null) {
		// Check for value-class pattern
		$valueClassChildren = $this->xpath->query('./*[contains(concat(" ", @class, " "), " value ") or contains(concat(" ", @class, " "), " value-title ")]', $dt);
		$dtValue = false;

		if ($valueClassChildren->length > 0) {
			// They’re using value-class
			$dateParts = array();

			foreach ($valueClassChildren as $e) {
				if (strstr(' ' . $e->getAttribute('class') . ' ', ' value-title ')) {
					$title = $e->getAttribute('title');
					if (!empty($title)) {
						$dateParts[] = $title;
					}
				}
				elseif ($e->tagName == 'img' or $e->tagName == 'area') {
					// Use @alt
					$alt = $e->getAttribute('alt');
					if (!empty($alt)) {
						$dateParts[] = $alt;
					}
				}
				elseif ($e->tagName == 'data') {
					// Use @value, otherwise innertext
					$value = $e->hasAttribute('value') ? $e->getAttribute('value') : unicodeTrim($e->nodeValue);
					if (!empty($value)) {
						$dateParts[] = $value;
					}
				}
				elseif ($e->tagName == 'abbr') {
					// Use @title, otherwise innertext
					$title = $e->hasAttribute('title') ? $e->getAttribute('title') : unicodeTrim($e->nodeValue);
					if (!empty($title)) {
						$dateParts[] = $title;
					}
				}
				elseif ($e->tagName == 'del' or $e->tagName == 'ins' or $e->tagName == 'time') {
					// Use @datetime if available, otherwise innertext
					$dtAttr = ($e->hasAttribute('datetime')) ? $e->getAttribute('datetime') : unicodeTrim($e->nodeValue);
					if (!empty($dtAttr)) {
						$dateParts[] = $dtAttr;
					}
				}
				else {
					if (!empty($e->nodeValue)) {
						$dateParts[] = unicodeTrim($e->nodeValue);
					}
				}
			}

			// Look through dateParts
			$datePart = '';
			$timePart = '';
			$timezonePart = '';
			foreach ($dateParts as $part) {
				// Is this part a full ISO8601 datetime?
				if (preg_match('/^\d{4}-\d{2}-\d{2}[ T]\d{2}:\d{2}(:\d{2})?(Z|[+-]\d{2}:?\d{2})?$/', $part)) {
					// Break completely, we’ve got our value.
					$dtValue = $part;
					break;
				} else {
					// Is the current part a valid time(+TZ?) AND no other time representation has been found?
					if ((preg_match('/^\d{1,2}:\d{2}(:\d{2})?(Z|[+-]\d{1,2}:?\d{2})?$/', $part) or preg_match('/^\d{1,2}(:\d{2})?(:\d{2})?[ap]\.?m\.?$/i', $part)) and empty($timePart)) {
						$timePart = $part;

						$timezoneOffset = normalizeTimezoneOffset($timePart);
						if (!$impliedTimezone && $timezoneOffset) {
							$impliedTimezone = $timezoneOffset;
						}
					// Is the current part a valid date AND no other date representation has been found?
					} elseif (preg_match('/^\d{4}-\d{2}-\d{2}$/', $part) and empty($datePart)) {
						$datePart = $part;
					// Is the current part a valid ordinal date AND no other date representation has been found?
					} elseif (preg_match('/^\d{4}-\d{3}$/', $part) and empty($datePart)) {
						$datePart = normalizeOrdinalDate($part);
					// Is the current part a valid timezone offset AND no other timezone part has been found?
					} elseif (preg_match('/^(Z|[+-]\d{1,2}:?(\d{2})?)$/', $part) and empty($timezonePart)) {
						$timezonePart = $part;

						$timezoneOffset = normalizeTimezoneOffset($timezonePart);
						if (!$impliedTimezone && $timezoneOffset) {
							$impliedTimezone = $timezoneOffset;
						}
					// Current part already represented by other VCP parts; do nothing with it
					} else {
						continue;
					}

					if ( !empty($datePart) && !in_array($datePart, $dates) ) {
						$dates[] = $datePart;
					}

					if (!empty($timezonePart) && !empty($timePart)) {
						$timePart .= $timezonePart;
					}

					$dtValue = '';

					if ( empty($datePart) && !empty($timePart) ) {
						$timePart = convertTimeFormat($timePart);
						$dtValue = unicodeTrim($timePart);
					}
					else if ( !empty($datePart) && empty($timePart) ) {
						$dtValue = rtrim($datePart, 'T');
					}
					else {
						$timePart = convertTimeFormat($timePart);
						$dtValue = rtrim($datePart, 'T') . ' ' . unicodeTrim($timePart);
					}
				}
			}
		} else {
			// Not using value-class (phew).
			if ($dt->tagName == 'img' or $dt->tagName == 'area') {
				// Use @alt
				// Is it an entire dt?
				$alt = $dt->getAttribute('alt');
				if (!empty($alt)) {
					$dtValue = $alt;
				}
			} elseif (in_array($dt->tagName, array('data'))) {
				// Use @value, otherwise innertext
				// Is it an entire dt?
				$value = $dt->getAttribute('value');
				if (!empty($value)) {
					$dtValue = $value;
				}
				else {
					$dtValue = $this->textContent($dt);
				}
			} elseif ($dt->tagName == 'abbr') {
				// Use @title, otherwise innertext
				// Is it an entire dt?
				$title = $dt->getAttribute('title');
				if (!empty($title)) {
					$dtValue = $title;
				}
				else {
					$dtValue = $this->textContent($dt);
				}
			} elseif ($dt->tagName == 'del' or $dt->tagName == 'ins' or $dt->tagName == 'time') {
				// Use @datetime if available, otherwise innertext
				// Is it an entire dt?
				$dtAttr = $dt->getAttribute('datetime');
				if (!empty($dtAttr)) {
					$dtValue = $dtAttr;
				}
				else {
					$dtValue = $this->textContent($dt);
				}

			} else {
				$dtValue = $this->textContent($dt);
			}

			// if the dtValue is not just YYYY-MM-DD
			if (!preg_match('/^(\d{4}-\d{2}-\d{2})$/', $dtValue)) {
				// no implied timezone set and dtValue has a TZ offset, use un-normalized TZ offset
				preg_match('/Z|[+-]\d{1,2}:?(\d{2})?$/i', $dtValue, $matches);
				if (!$impliedTimezone && !empty($matches[0])) {
					$impliedTimezone = $matches[0];
				}
			}

			$dtValue = unicodeTrim($dtValue);

			// Store the date part so that we can use it when assembling the final timestamp if the next one is missing a date part
			if (preg_match('/(\d{4}-\d{2}-\d{2})/', $dtValue, $matches)) {
				$dates[] = $matches[0];
			}
		}

		/**
		 * if $dtValue is only a time and there are recently parsed dates,
		 * form the full date-time using the most recently parsed dt- value
		 */
		if ((preg_match('/^\d{1,2}:\d{2}(:\d{2})?(Z|[+-]\d{2}:?\d{2}?)?$/', $dtValue) or preg_match('/^\d{1,2}(:\d{2})?(:\d{2})?[ap]\.?m\.?$/i', $dtValue)) && !empty($dates)) {
			$timezoneOffset = normalizeTimezoneOffset($dtValue);
			if (!$impliedTimezone && $timezoneOffset) {
				$impliedTimezone = $timezoneOffset;
			}

			$dtValue = convertTimeFormat($dtValue);
			$dtValue = end($dates) . ' ' . unicodeTrim($dtValue);
		}

		return $dtValue;
	}

	/**
	 * 	Given the root element of some embedded markup, return a string representing that markup
	 *
	 * 	@param DOMElement $e The element to parse
	 * 	@return string $e’s innerHTML
	 *
	 * @todo need to mark this element as e- parsed so it doesn’t get parsed as it’s parent’s e-* too
	 */
	public function parseE(\DOMElement $e) {
		$classTitle = $this->parseValueClassTitle($e);

		if ($classTitle !== null)
			return $classTitle;

		// Expand relative URLs within children of this element
		// TODO: as it is this is not relative to only children, make this .// and rerun tests
		$this->resolveChildUrls($e);

		// Temporarily move all descendants into a separate DocumentFragment.
		// This way we can DOMDocument::saveHTML on the entire collection at once.
		// Running DOMDocument::saveHTML per node may add whitespace that isn't in source.
		// See https://stackoverflow.com/q/38317903
		if ($innerNodes = $e->ownerDocument->createDocumentFragment()) {
			while ($e->hasChildNodes()) {
				$innerNodes->appendChild($e->firstChild);
			}
			$html = $e->ownerDocument->saveHtml($innerNodes);
			// Put the nodes back in place.
			if ($innerNodes->hasChildNodes()) {
				$e->appendChild($innerNodes);
			}
		}

		$return = array(
			'html' => unicodeTrim($html),
			'value' => $this->textContent($e),
		);

		if($this->lang) {
			// Language
			if ( $html_lang = $this->language($e) ) {
				$return['lang'] = $html_lang;
			}
		}

		return $return;
	}

	private function removeTags(\DOMElement &$e, $tagName) {
		while(($r = $e->getElementsByTagName($tagName)) && $r->length) {
			$r->item(0)->parentNode->removeChild($r->item(0));
		}
	}

	/**
	 * Recursively parse microformats
	 *
	 * @param DOMElement $e The element to parse
	 * @param bool $is_backcompat Whether using backcompat parsing or not
	 * @param bool $has_nested_mf Whether this microformat has a nested microformat
	 * @return array A representation of the values contained within microformat $e
	 */
	public function parseH(\DOMElement $e, $is_backcompat = false, $has_nested_mf = false) {
		// If it’s already been parsed (e.g. is a child mf), skip
		if ($this->parsed->contains($e)) {
			return null;
		}

		// Get current µf name
		$mfTypes = mfNamesFromElement($e, 'h-');

		if (!$mfTypes) {
			return null;
		}

		// Initalise var to store the representation in
		$return = array();
		$children = array();
		$dates = array();
		$prefixes = array();
		$impliedTimezone = null;

		if($e->tagName == 'area') {
			$coords = $e->getAttribute('coords');
			$shape = $e->getAttribute('shape');
		}

		// Handle p-*
		foreach ($this->xpath->query('.//*[contains(concat(" ", @class) ," p-")]', $e) as $p) {
			// element is already parsed
			if ($this->isElementParsed($p, 'p')) {
				continue;
			// backcompat parsing and element was not upgraded; skip it
			} else if ( $is_backcompat && empty($this->upgraded[$p]) ) {
				$this->elementPrefixParsed($p, 'p');
				continue;
			}

			$prefixes[] = 'p-';
			$pValue = $this->parseP($p);

			// Add the value to the array for it’s p- properties
			foreach (mfNamesFromElement($p, 'p-') as $propName) {
				if (!empty($propName)) {
					$return[$propName][] = $pValue;
				}
			}

			// Make sure this sub-mf won’t get parsed as a top level mf
			$this->elementPrefixParsed($p, 'p');
		}

		// Handle u-*
		foreach ($this->xpath->query('.//*[contains(concat(" ",  @class)," u-")]', $e) as $u) {
			// element is already parsed
			if ($this->isElementParsed($u, 'u')) {
				continue;
			// backcompat parsing and element was not upgraded; skip it
			} else if ( $is_backcompat && empty($this->upgraded[$u]) ) {
				$this->elementPrefixParsed($u, 'u');
				continue;
			}

			$prefixes[] = 'u-';
			$uValue = $this->parseU($u);

			// Add the value to the array for it’s property types
			foreach (mfNamesFromElement($u, 'u-') as $propName) {
				$return[$propName][] = $uValue;
			}

			// Make sure this sub-mf won’t get parsed as a top level mf
			$this->elementPrefixParsed($u, 'u');
		}

		$temp_dates = array();

		// Handle dt-*
		foreach ($this->xpath->query('.//*[contains(concat(" ", @class), " dt-")]', $e) as $dt) {
			// element is already parsed
			if ($this->isElementParsed($dt, 'dt')) {
				continue;
			// backcompat parsing and element was not upgraded; skip it
			} else if ( $is_backcompat && empty($this->upgraded[$dt]) ) {
				$this->elementPrefixParsed($dt, 'dt');
				continue;
			}

			$prefixes[] = 'dt-';
			$dtValue = $this->parseDT($dt, $dates, $impliedTimezone);

			if ($dtValue) {
				// Add the value to the array for dt- properties
				foreach (mfNamesFromElement($dt, 'dt-') as $propName) {
					$temp_dates[$propName][] = $dtValue;
				}
			}
			// Make sure this sub-mf won’t get parsed as a top level mf
			$this->elementPrefixParsed($dt, 'dt');
		}

		foreach ($temp_dates as $propName => $data) {
			foreach ( $data as $dtValue ) {
				// var_dump(preg_match('/[+-]\d{2}(\d{2})?$/i', $dtValue));
				if ( $impliedTimezone && preg_match('/(Z|[+-]\d{2}:?(\d{2})?)$/i', $dtValue, $matches) == 0 ) {
					$dtValue .= $impliedTimezone;
				}

				$return[$propName][] = $dtValue;
			}
		}

		// Handle e-*
		foreach ($this->xpath->query('.//*[contains(concat(" ", @class)," e-")]', $e) as $em) {
			// element is already parsed
			if ($this->isElementParsed($em, 'e')) {
				continue;
			// backcompat parsing and element was not upgraded; skip it
			} else if ( $is_backcompat && empty($this->upgraded[$em]) ) {
				$this->elementPrefixParsed($em, 'e');
				continue;
			}

			$prefixes[] = 'e-';
			$eValue = $this->parseE($em);

			if ($eValue) {
				// Add the value to the array for e- properties
				foreach (mfNamesFromElement($em, 'e-') as $propName) {
					$return[$propName][] = $eValue;
				}
			}
			// Make sure this sub-mf won’t get parsed as a top level mf
			$this->elementPrefixParsed($em, 'e');
		}

		// Do we need to imply a name property?
		// if no explicit "name" property, and no other p-* or e-* properties, and no nested microformats,
		if (!array_key_exists('name', $return) && !in_array('p-', $prefixes)
			&& !in_array('e-', $prefixes) && !$has_nested_mf
			&& !$is_backcompat && empty($this->upgraded[$e])) {
			$name = false;
			// img.h-x[alt] or area.h-x[alt]
			if (($e->tagName === 'img' || $e->tagName === 'area') && $e->hasAttribute('alt')) {
				$name = $e->getAttribute('alt');
			// abbr.h-x[title]
			} elseif ($e->tagName === 'abbr' && $e->hasAttribute('title')) {
				$name = $e->getAttribute('title');
			} else {
				$xpaths = array(
					// .h-x>img:only-child[alt]:not([alt=""]):not[.h-*]
					'./img[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and @alt and string-length(@alt) != 0]',
					// .h-x>area:only-child[alt]:not([alt=""]):not[.h-*]
					'./area[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and @alt and string-length(@alt) != 0]',
					// .h-x>abbr:only-child[title]:not([title=""]):not[.h-*]
					'./abbr[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and @title and string-length(@title) != 0]',
					// .h-x>:only-child:not[.h-*]>img:only-child[alt]:not([alt=""]):not[.h-*]
					'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(*) = 1]/img[not(contains(concat(" ", @class), " h-")) and @alt and string-length(@alt) != 0]',
					// .h-x>:only-child:not[.h-*]>area:only-child[alt]:not([alt=""]):not[.h-*]
					'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(*) = 1]/area[not(contains(concat(" ", @class), " h-")) and @alt and string-length(@alt) != 0]',
					// .h-x>:only-child:not[.h-*]>abbr:only-child[title]:not([title=""]):not[.h-*]
					'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(*) = 1]/abbr[not(contains(concat(" ", @class), " h-")) and @title and string-length(@title) != 0]'
				);
				foreach ($xpaths as $xpath) {
					$nameElement = $this->xpath->query($xpath, $e);
					if ($nameElement !== false && $nameElement->length === 1) {
						$nameElement = $nameElement->item(0);
						if ($nameElement->tagName === 'img' || $nameElement->tagName === 'area') {
							$name = $nameElement->getAttribute('alt');
						} else {
							$name = $nameElement->getAttribute('title');
						}
						break;
					}
				}
			}
			if ($name === false) {
				$name = $this->textContent($e, true);
			}
			$return['name'][] = unicodeTrim($name);
		}

		// Check for u-photo
		if (!array_key_exists('photo', $return) && !in_array('u-', $prefixes) && !$has_nested_mf && !$is_backcompat) {
			$photo = $this->parseImpliedPhoto($e);
			if ($photo !== false) {
				$return['photo'][] = $photo;
			}
		}

		// Do we need to imply a url property?
		// if no explicit "url" property, and no other explicit u-* properties, and no nested microformats
		if (!array_key_exists('url', $return) && !in_array('u-', $prefixes) && !$has_nested_mf && !$is_backcompat) {
			// a.h-x[href] or area.h-x[href]
			if (($e->tagName === 'a' || $e->tagName === 'area') && $e->hasAttribute('href')) {
				$return['url'][] = $this->resolveUrl($e->getAttribute('href'));
			} else {
				$xpaths = array(
					// .h-x>a[href]:only-of-type:not[.h-*]
					'./a[not(contains(concat(" ", @class), " h-")) and count(../a) = 1 and @href]',
					// .h-x>area[href]:only-of-type:not[.h-*]
					'./area[not(contains(concat(" ", @class), " h-")) and count(../area) = 1 and @href]',
					// .h-x>:only-child:not[.h-*]>a[href]:only-of-type:not[.h-*]
					'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(a) = 1]/a[not(contains(concat(" ", @class), " h-")) and @href]',
					// .h-x>:only-child:not[.h-*]>area[href]:only-of-type:not[.h-*]
					'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(area) = 1]/area[not(contains(concat(" ", @class), " h-")) and @href]'
				);
				foreach ($xpaths as $xpath) {
					$url = $this->xpath->query($xpath, $e);
					if ($url !== false && $url->length === 1) {
						$return['url'][] = $this->resolveUrl($url->item(0)->getAttribute('href'));
						break;
					}
				}
			}
		}

		// Make sure things are unique and in alphabetical order
		$mfTypes = array_unique($mfTypes);
		sort($mfTypes);

		// Properties should be an object when JSON serialised
		if (empty($return) and $this->jsonMode) {
			$return = new stdClass();
		}

		// Phew. Return the final result.
		$parsed = array(
			'type' => $mfTypes,
			'properties' => $return
		);
		
		if(trim($e->getAttribute('id')) !== '') {
			$parsed['id'] = trim($e->getAttribute("id"));
		}

		if($this->lang) {
			// Language
			if ( $html_lang = $this->language($e) ) {
				$parsed['lang'] = $html_lang;
			}
		}

		if (!empty($shape)) {
			$parsed['shape'] = $shape;
		}

		if (!empty($coords)) {
			$parsed['coords'] = $coords;
		}

		if (!empty($children)) {
			$parsed['children'] = array_values(array_filter($children));
		}
		return $parsed;
	}

	/**
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_for_implied_properties
	 */
	public function parseImpliedPhoto(\DOMElement $e) {

		// img.h-x[src]
		if ($e->tagName == 'img') {
			return $this->resolveUrl($this->parseImg($e));
		}

		// object.h-x[data]
		if ($e->tagName == 'object' && $e->hasAttribute('data')) {
			return $this->resolveUrl($e->getAttribute('data'));
		}

		$xpaths = array(
			// .h-x>img[src]:only-of-type:not[.h-*]
			'./img[not(contains(concat(" ", @class), " h-")) and count(../img) = 1 and @src]',
			// .h-x>object[data]:only-of-type:not[.h-*]
			'./object[not(contains(concat(" ", @class), " h-")) and count(../object) = 1 and @data]',
			// .h-x>:only-child:not[.h-*]>img[src]:only-of-type:not[.h-*]
			'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(img) = 1]/img[not(contains(concat(" ", @class), " h-")) and @src]',
			// .h-x>:only-child:not[.h-*]>object[data]:only-of-type:not[.h-*]
			'./*[not(contains(concat(" ", @class), " h-")) and count(../*) = 1 and count(object) = 1]/object[not(contains(concat(" ", @class), " h-")) and @data]',
		);

		foreach ($xpaths as $path) {
			$els = $this->xpath->query($path, $e);

			if ($els !== false && $els->length === 1) {
				$el = $els->item(0);
				if ($el->tagName == 'img') {
					$return = $this->parseImg($el);
					return $this->resolveUrl($return);
				} else if ($el->tagName == 'object') {
					return $this->resolveUrl($el->getAttribute('data'));
				}
			}
		}

		// no implied photo
		return false;
	}

	/**
	 * Parse rels and alternates
	 *
	 * Returns [$rels, $rel_urls, $alternates].
	 * For $rels and $rel_urls, if they are empty and $this->jsonMode = true, they will be returned as stdClass,
	 * optimizing for JSON serialization. Otherwise they will be returned as an empty array.
	 * Note that $alternates is deprecated in the microformats spec in favor of $rel_urls. $alternates only appears
	 * in parsed results if $this->enableAlternates = true.
	 * @return array|stdClass
	 */
	public function parseRelsAndAlternates() {
		$rels = array();
		$rel_urls = array();
		$alternates = array();

		// Iterate through all a, area and link elements with rel attributes
		foreach ($this->xpath->query('//a[@rel and @href] | //link[@rel and @href] | //area[@rel and @href]') as $hyperlink) {
			// Parse the set of rels for the current link
			$linkRels = array_unique(array_filter(preg_split('/[\t\n\f\r ]/', $hyperlink->getAttribute('rel'))));
			if (count($linkRels) === 0) {
				continue;
			}

			// Resolve the href
			$href = $this->resolveUrl($hyperlink->getAttribute('href'));

			$rel_attributes = array();

			if ($hyperlink->hasAttribute('media')) {
				$rel_attributes['media'] = $hyperlink->getAttribute('media');
			}

			if ($hyperlink->hasAttribute('hreflang')) {
				$rel_attributes['hreflang'] = $hyperlink->getAttribute('hreflang');
			}

			if ($hyperlink->hasAttribute('title')) {
				$rel_attributes['title'] = $hyperlink->getAttribute('title');
			}

			if ($hyperlink->hasAttribute('type')) {
				$rel_attributes['type'] = $hyperlink->getAttribute('type');
			}

			if (strlen($hyperlink->textContent) > 0) {
				$rel_attributes['text'] = $hyperlink->textContent;
			}

			if ($this->enableAlternates) {
				// If 'alternate' in rels, create 'alternates' structure, append
				if (in_array('alternate', $linkRels)) {
					$alternates[] = array_merge(
						$rel_attributes,
						array(
							'url' => $href,
							'rel' => implode(' ', array_diff($linkRels, array('alternate')))
						)
					);
				}
			}

			foreach ($linkRels as $rel) {
				if (!array_key_exists($rel, $rels)) {
					$rels[$rel] = array($href);
				} elseif (!in_array($href, $rels[$rel])) {
					$rels[$rel][] = $href;
				}
			}

			if (!array_key_exists($href, $rel_urls)) {
				$rel_urls[$href] = array('rels' => array());
			}

			// Add the attributes collected only if they were not already set
			$rel_urls[$href] = array_merge(
				$rel_attributes,
				$rel_urls[$href]
			);

			// Merge current rels with those already set
			$rel_urls[$href]['rels'] = array_merge(
				$rel_urls[$href]['rels'],
				$linkRels
			);
		}

		// Alphabetically sort the rels arrays after removing duplicates
		foreach ($rel_urls as $href => $object) {
			$rel_urls[$href]['rels'] = array_unique($rel_urls[$href]['rels']);
			sort($rel_urls[$href]['rels']);
		}

		if (empty($rels) and $this->jsonMode) {
			$rels = new stdClass();
		}

		if (empty($rel_urls) and $this->jsonMode) {
			$rel_urls = new stdClass();
		}

		return array($rels, $rel_urls, $alternates);
	}

	/**
	 * Find rel=tag elements that don't have class=category and have an href.
	 * For each element, get the last non-empty URL segment. Append a <data>
	 * element with that value as the category. Uses the mf1 class 'category'
	 * which will then be upgraded to p-category during backcompat.
	 * @param DOMElement $el
	 */
	public function upgradeRelTagToCategory(DOMElement $el) {
		$rel_tag = $this->xpath->query('.//a[contains(concat(" ",normalize-space(@rel)," ")," tag ") and not(contains(concat(" ", normalize-space(@class), " "), " category ")) and @href]', $el);

		if ( $rel_tag->length ) {
			foreach ( $rel_tag as $tempEl ) {
				$path = trim(parse_url($tempEl->getAttribute('href'), PHP_URL_PATH), ' /');
				$segments = explode('/', $path);
				$value = array_pop($segments);

				# build the <data> element
				$dataEl = $tempEl->ownerDocument->createElement('data');
				$dataEl->setAttribute('class', 'category');
				$dataEl->setAttribute('value', $value);

				# append as child of input element. this should ensure added element does get parsed inside e-*
				$el->appendChild($dataEl);
			}
		}
	}

	/**
	 * Kicks off the parsing routine
	 * @param bool $convertClassic whether to do backcompat parsing on microformats1. Defaults to true.
	 * @param DOMElement $context optionally specify an element from which to parse microformats
	 * @return array An array containing all the microformats found in the current document
	 */
	public function parse($convertClassic = true, DOMElement $context = null) {
		$this->convertClassic = $convertClassic;
		$mfs = $this->parse_recursive($context);

		// Parse rels
		list($rels, $rel_urls, $alternates) = $this->parseRelsAndAlternates();

		$top = array(
			'items' => array_values(array_filter($mfs)),
			'rels' => $rels,
			'rel-urls' => $rel_urls,
		);

		if ($this->enableAlternates && count($alternates)) {
			$top['alternates'] = $alternates;
		}

		return $top;
	}


	/**
	 * Parse microformats recursively
	 * Keeps track of whether inside a backcompat root or not
	 * @param DOMElement $context: node to start with
	 * @param int $depth: recursion depth
	 * @return array
	 */
	public function parse_recursive(DOMElement $context = null, $depth = 0) {
		$mfs = array();
		$mfElements = $this->getRootMF($context);

		foreach ($mfElements as $node) {
			$is_backcompat = !$this->hasRootMf2($node);

			if ($this->convertClassic && $is_backcompat) {
				$this->backcompat($node);
			}

			$recurse = $this->parse_recursive($node, $depth + 1);

			// set bool flag for nested mf
			$has_nested_mf = (bool) $recurse;

			// parse for root mf
			$result = $this->parseH($node, $is_backcompat, $has_nested_mf);

			// TODO: Determine if clearing this is required?
			$this->elementPrefixParsed($node, 'h');
			$this->elementPrefixParsed($node, 'p');
			$this->elementPrefixParsed($node, 'u');
			$this->elementPrefixParsed($node, 'dt');
			$this->elementPrefixParsed($node, 'e');

			// parseH returned a parsed result
			if ($result) {

				// merge recursive results into current results
				if ($recurse) {
					$result = array_merge_recursive($result, $recurse);
				}

				// currently a nested mf; check if node is an mf property of parent
				if ($depth > 0) {
					$temp_properties = nestedMfPropertyNamesFromElement($node);

					// properties found; set up parsed result in 'properties'
					if (!empty($temp_properties)) {

						foreach ($temp_properties as $property => $prefixes) {
							// Note: handling microformat nesting under multiple conflicting prefixes is not currently specified by the mf2 parsing spec.
							$prefixSpecificResult = $result;
							if (in_array('p-', $prefixes)) {
								$prefixSpecificResult['value'] = (!is_array($prefixSpecificResult['properties']) || empty($prefixSpecificResult['properties']['name'][0])) ? $this->parseP($node) : $prefixSpecificResult['properties']['name'][0];
							} elseif (in_array('e-', $prefixes)) {
								$eParsedResult = $this->parseE($node);
								$prefixSpecificResult['html'] = $eParsedResult['html'];
								$prefixSpecificResult['value'] = $eParsedResult['value'];
							} elseif (in_array('u-', $prefixes)) {
								$prefixSpecificResult['value'] = (!is_array($result['properties']) || empty($result['properties']['url'])) ? $this->parseU($node) : reset($result['properties']['url']);
							} elseif (in_array('dt-', $prefixes)) {
								$parsed_property = $this->parseDT($node);
								$prefixSpecificResult['value'] = ($parsed_property) ? $parsed_property : '';
							}
							$prefixSpecificResult['value'] = is_array($prefixSpecificResult['value']) ? $prefixSpecificResult['value']['value'] : $prefixSpecificResult['value'];

							$mfs['properties'][$property][] = $prefixSpecificResult;
						}

					// otherwise, set up in 'children'
					} else {
						$mfs['children'][] = $result;
					}
				// otherwise, top-level mf
				} else {
					$mfs[] = $result;
				}
			}
		}

		return $mfs;
	}


	/**
	 * Parse From ID
	 *
	 * Given an ID, parse all microformats which are children of the element with
	 * that ID.
	 *
	 * Note that rel values are still document-wide.
	 *
	 * If an element with the ID is not found, an empty skeleton mf2 array structure
	 * will be returned.
	 *
	 * @param string $id
	 * @param bool $htmlSafe = false whether or not to HTML-encode angle brackets in non e-* properties
	 * @return array
	 */
	public function parseFromId($id, $convertClassic=true) {
		$matches = $this->xpath->query("//*[@id='{$id}']");

		if (empty($matches))
			return array('items' => array(), 'rels' => array(), 'alternates' => array());

		return $this->parse($convertClassic, $matches->item(0));
	}

	/**
	 * Get the root microformat elements
	 * @param DOMElement $context
	 * @return DOMNodeList
	 */
	public function getRootMF(DOMElement $context = null) {
		// start with mf2 root class name xpath
		$xpaths = array(
			'contains(concat(" ",normalize-space(@class)), " h-")'
		);

		// add mf1 root class names
		foreach ( $this->classicRootMap as $old => $new ) {
			$xpaths[] = '( contains(concat(" ",normalize-space(@class), " "), " ' . $old . ' ") )';
		}

		// final xpath with OR
		$xpath = '//*[' . implode(' or ', $xpaths) . ']';

		$mfElements = (null === $context)
			? $this->xpath->query($xpath)
			: $this->xpath->query('.' . $xpath, $context);

		return $mfElements;
	}

	/**
	 * Apply the backcompat algorithm to upgrade mf1 classes to mf2.
	 * This method is called recursively.
	 * @param DOMElement $el
	 * @param string $context
	 * @param bool $isParentMf2
	 * @see http://microformats.org/wiki/microformats2-parsing#algorithm
	 */
	public function backcompat(DOMElement $el, $context = '', $isParentMf2 = false) {

		if ( $context ) {
			$mf1Classes = array($context);
		} else {
			$class = str_replace(array("\t", "\n"), ' ', $el->getAttribute('class'));
			$classes = array_filter(explode(' ', $class));
			$mf1Classes = array_intersect($classes, array_keys($this->classicRootMap));
		}

		$elHasMf2 = $this->hasRootMf2($el);

		foreach ($mf1Classes as $classname) {
			// special handling for specific properties
			switch ( $classname )
			{
				case 'hentry':
					$this->upgradeRelTagToCategory($el);

					$rel_bookmark = $this->xpath->query('.//a[contains(concat(" ",normalize-space(@rel)," ")," bookmark ") and @href]', $el);

					if ( $rel_bookmark->length ) {
						foreach ( $rel_bookmark as $tempEl ) {
							$this->addMfClasses($tempEl, 'u-url');
							$this->addUpgraded($tempEl, array('bookmark'));
						}
					}
				break;

				case 'hreview':
					$item_and_vcard = $this->xpath->query('.//*[contains(concat(" ", normalize-space(@class), " "), " item ") and contains(concat(" ", normalize-space(@class), " "), " vcard ")]', $el);

					if ( $item_and_vcard->length ) {
						foreach ( $item_and_vcard as $tempEl ) {
							if ( !$this->hasRootMf2($tempEl) ) {
								$this->backcompat($tempEl, 'vcard');
								$this->addMfClasses($tempEl, 'p-item h-card');
								$this->addUpgraded($tempEl, array('item', 'vcard'));
							}
						}
					}

					$item_and_vevent = $this->xpath->query('.//*[contains(concat(" ", normalize-space(@class), " "), " item ") and contains(concat(" ", normalize-space(@class), " "), " vevent ")]', $el);

					if ( $item_and_vevent->length ) {
						foreach ( $item_and_vevent as $tempEl ) {
							if ( !$this->hasRootMf2($tempEl) ) {
								$this->addMfClasses($tempEl, 'p-item h-event');
								$this->backcompat($tempEl, 'vevent');
								$this->addUpgraded($tempEl, array('item', 'vevent'));
							}
						}
					}

					$item_and_hproduct = $this->xpath->query('.//*[contains(concat(" ", normalize-space(@class), " "), " item ") and contains(concat(" ", normalize-space(@class), " "), " hproduct ")]', $el);

					if ( $item_and_hproduct->length ) {
						foreach ( $item_and_hproduct as $tempEl ) {
							if ( !$this->hasRootMf2($tempEl) ) {
								$this->addMfClasses($tempEl, 'p-item h-product');
								$this->backcompat($tempEl, 'vevent');
								$this->addUpgraded($tempEl, array('item', 'hproduct'));
							}
						}
					}

					$this->upgradeRelTagToCategory($el);
				break;

				case 'vevent':
					$location = $this->xpath->query('.//*[contains(concat(" ", normalize-space(@class), " "), " location ")]', $el);

					if ( $location->length ) {
						foreach ( $location as $tempEl ) {
							if ( !$this->hasRootMf2($tempEl) ) {
								$this->addMfClasses($tempEl, 'h-card');
								$this->backcompat($tempEl, 'vcard');
							}
						}
					}
				break;
			}

			// root class has mf1 properties to be upgraded
			if ( isset($this->classicPropertyMap[$classname]) ) {
				// loop through each property of the mf1 root
				foreach ( $this->classicPropertyMap[$classname] as $property => $data ) {
					$propertyElements = $this->xpath->query('.//*[contains(concat(" ", normalize-space(@class), " "), " ' . $property . ' ")]', $el);

					// loop through each element with the property
					foreach ( $propertyElements as $propertyEl ) {
						$hasRootMf2 = $this->hasRootMf2($propertyEl);

						// if the element has not been upgraded and we're not inside an mf2 root, recurse
						if ( !$this->isElementUpgraded($propertyEl, $property) && !$isParentMf2 )
						{
							$temp_context = ( isset($data['context']) ) ? $data['context'] : null;
							$this->backcompat($propertyEl, $temp_context, $hasRootMf2);
							$this->addMfClasses($propertyEl, $data['replace']);
						}

						$this->addUpgraded($propertyEl, $property);
					}
				}
			}

			if ( empty($context) && isset($this->classicRootMap[$classname]) && !$elHasMf2 ) {
				$this->addMfClasses($el, $this->classicRootMap[$classname]);
			}
		}

		return;
	}

	/**
	 * Add element + property as upgraded during backcompat
	 * @param DOMElement $el
	 * @param string|array $property
	 */
	public function addUpgraded(DOMElement $el, $property) {
		if ( !is_array($property) ) {
			$property = array($property);
		}

		// add element to list of upgraded elements
		if ( !$this->upgraded->contains($el) ) {
			$this->upgraded->attach($el, $property);
		} else {
			$this->upgraded[$el] = array_merge($this->upgraded[$el], $property);
		}
	}

	/**
	 * Add the provided classes to an element.
	 * Does not add duplicate if class name already exists.
	 * @param DOMElement $el
	 * @param string $classes
	 */
	public function addMfClasses(DOMElement $el, $classes) {
		$existingClasses = str_replace(array("\t", "\n"), ' ', $el->getAttribute('class'));
		$existingClasses = array_filter(explode(' ', $existingClasses));

		$addClasses = array_diff(explode(' ', $classes), $existingClasses);

		if ( $addClasses ) {
			$el->setAttribute('class', $el->getAttribute('class') . ' ' . implode(' ', $addClasses));
		}
	}

	/**
	 * Check an element for mf2 h-* class, typically to determine if backcompat should be used
	 * @param DOMElement $el
	 */
	public function hasRootMf2(\DOMElement $el) {
		$class = str_replace(array("\t", "\n"), ' ', $el->getAttribute('class'));
		$classes = array_filter(explode(' ', $class));

		foreach ( $classes as $classname ) {
			if ( strpos($classname, 'h-') === 0 ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Convert Legacy Classnames
	 *
	 * Adds microformats2 classnames into a document containing only legacy
	 * semantic classnames.
	 *
	 * @return Parser $this
	 */
	public function convertLegacy() {
		$doc = $this->doc;
		$xp = new DOMXPath($doc);

		// replace all roots
		foreach ($this->classicRootMap as $old => $new) {
			foreach ($xp->query('//*[contains(concat(" ", @class, " "), " ' . $old . ' ") and not(contains(concat(" ", @class, " "), " ' . $new . ' "))]') as $el) {
				$el->setAttribute('class', $el->getAttribute('class') . ' ' . $new);
			}
		}

		foreach ($this->classicPropertyMap as $oldRoot => $properties) {
			$newRoot = $this->classicRootMap[$oldRoot];
			foreach ($properties as $old => $data) {
				foreach ($xp->query('//*[contains(concat(" ", @class, " "), " ' . $oldRoot . ' ")]//*[contains(concat(" ", @class, " "), " ' . $old . ' ") and not(contains(concat(" ", @class, " "), " ' . $data['replace'] . ' "))]') as $el) {
					$el->setAttribute('class', $el->getAttribute('class') . ' ' . $data['replace']);
				}
			}
		}

		return $this;
	}

	/**
	 * XPath Query
	 *
	 * Runs an XPath query over the current document. Works in exactly the same
	 * way as DOMXPath::query.
	 *
	 * @param string $expression
	 * @param DOMNode $context
	 * @return DOMNodeList
	 */
	public function query($expression, $context = null) {
		return $this->xpath->query($expression, $context);
	}

	/**
	 * Classic Root Classname map
	 * @var array
	 */
	public $classicRootMap = array(
		'vcard' => 'h-card',
		'hfeed' => 'h-feed',
		'hentry' => 'h-entry',
		'hrecipe' => 'h-recipe',
		'hresume' => 'h-resume',
		'vevent' => 'h-event',
		'hreview' => 'h-review',
		'hproduct' => 'h-product',
		'adr' => 'h-adr',
	);

	/**
	 * Mapping of mf1 properties to mf2 and the context they're parsed with
	 * @var array
	 */
	public $classicPropertyMap = array(
		'vcard' => array(
			'fn' => array(
				'replace' => 'p-name'
			),
			'honorific-prefix' => array(
				'replace' => 'p-honorific-prefix'
			),
			'given-name' => array(
				'replace' => 'p-given-name'
			),
			'additional-name' => array(
				'replace' => 'p-additional-name'
			),
			'family-name' => array(
				'replace' => 'p-family-name'
			),
			'honorific-suffix' => array(
				'replace' => 'p-honorific-suffix'
			),
			'nickname' => array(
				'replace' => 'p-nickname'
			),
			'email' => array(
				'replace' => 'u-email'
			),
			'logo' => array(
				'replace' => 'u-logo'
			),
			'photo' => array(
				'replace' => 'u-photo'
			),
			'url' => array(
				'replace' => 'u-url'
			),
			'uid' => array(
				'replace' => 'u-uid'
			),
			'category' => array(
				'replace' => 'p-category'
			),
			'adr' => array(
				'replace' => 'p-adr',
			),
			'extended-address' => array(
				'replace' => 'p-extended-address'
			),
			'street-address' => array(
				'replace' => 'p-street-address'
			),
			'locality' => array(
				'replace' => 'p-locality'
			),
			'region' => array(
				'replace' => 'p-region'
			),
			'postal-code' => array(
				'replace' => 'p-postal-code'
			),
			'country-name' => array(
				'replace' => 'p-country-name'
			),
			'label' => array(
				'replace' => 'p-label'
			),
			'geo' => array(
				'replace' => 'p-geo h-geo',
				'context' => 'geo'
			),
			'latitude' => array(
				'replace' => 'p-latitude'
			),
			'longitude' => array(
				'replace' => 'p-longitude'
			),
			'tel' => array(
				'replace' => 'p-tel'
			),
			'note' => array(
				'replace' => 'p-note'
			),
			'bday' => array(
				'replace' => 'dt-bday'
			),
			'key' => array(
				'replace' => 'u-key'
			),
			'org' => array(
				'replace' => 'p-org'
			),
			'organization-name' => array(
				'replace' => 'p-organization-name'
			),
			'organization-unit' => array(
				'replace' => 'p-organization-unit'
			),
			'title' => array(
				'replace' => 'p-job-title'
			),
			'role' => array(
				'replace' => 'p-role'
			),
			'tz' => array(
				'replace' => 'p-tz'
			),
			'rev' => array(
				'replace' => 'dt-rev'
			),
		),
		'hfeed' => array(
			# nothing currently
		),
		'hentry' => array(
			'entry-title' => array(
				'replace' => 'p-name'
			),
			'entry-summary' => array(
				'replace' => 'p-summary'
			),
			'entry-content' => array(
				'replace' => 'e-content'
			),
			'published' => array(
				'replace' => 'dt-published'
			),
			'updated' => array(
				'replace' => 'dt-updated'
			),
			'author' => array(
				'replace' => 'p-author h-card',
				'context' => 'vcard',
			),
			'category' => array(
				'replace' => 'p-category'
			),
		),
		'hrecipe' => array(
			'fn' => array(
				'replace' => 'p-name'
			),
			'ingredient' =>  array(
				'replace' => 'p-ingredient'
				/**
				 * TODO: hRecipe 'value' and 'type' child mf not parsing correctly currently.
				 * Per http://microformats.org/wiki/hRecipe#Property_details, they're experimental.
				 */
			),
			'yield' =>  array(
				'replace' => 'p-yield'
			),
			'instructions' =>  array(
				'replace' => 'e-instructions'
			),
			'duration' =>  array(
				'replace' => 'dt-duration'
			),
			'photo' =>  array(
				'replace' => 'u-photo'
			),
			'summary' =>  array(
				'replace' => 'p-summary'
			),
			'author' =>  array(
				'replace' => 'p-author h-card',
				'context' => 'vcard',
			),
			'nutrition' =>  array(
				'replace' => 'p-nutrition'
			),
			'category' =>  array(
				'replace' => 'p-category'
			),
		),
		'hresume' => array(
			'summary' => array(
				'replace' => 'p-summary'
			),
			'contact' => array(
				'replace' => 'p-contact h-card',
				'context' => 'vcard',
			),
			'education' => array(
				'replace' => 'p-education h-event',
				'context' => 'vevent',
			),
			'experience' => array(
				'replace' => 'p-experience h-event',
				'context' => 'vevent',
			),
			'skill' => array(
				'replace' => 'p-skill'
			),
			'affiliation' => array(
				'replace' => 'p-affiliation h-card',
				'context' => 'vcard',
			),
		),
		'vevent' => array(
			'summary' => array(
				'replace' => 'p-name'
			),
			'dtstart' => array(
				'replace' => 'dt-start'
			),
			'dtend' => array(
				'replace' => 'dt-end'
			),
			'duration' => array(
				'replace' => 'dt-duration'
			),
			'description' => array(
				'replace' => 'p-description'
			),
			'url' => array(
				'replace' => 'u-url'
			),
			'category' => array(
				'replace' => 'p-category'
			),
			'location' => array(
				'replace' => 'h-card',
				'context' => 'vcard'
			),
			'geo' => array(
				'replace' => 'p-location h-geo'
			),
		),
		'hreview' => array(
			'summary' => array(
				'replace' => 'p-name'
			),
			# fn: see item.fn below
			# photo: see item.photo below
			# url: see item.url below
			'item' => array(
				'replace' => 'p-item h-item',
				'context' => 'item'
			),
			'reviewer' => array(
				'replace' => 'p-author h-card',
				'context' => 'vcard',
			),
			'dtreviewed' => array(
				'replace' => 'dt-published'
			),
			'rating' => array(
				'replace' => 'p-rating'
			),
			'best' => array(
				'replace' => 'p-best'
			),
			'worst' => array(
				'replace' => 'p-worst'
			),
			'description' => array(
				'replace' => 'e-content'
			),
			'category' => array(
				'replace' => 'p-category'
			),
		),
		'hproduct' => array(
			'fn' => array(
				'replace' => 'p-name',
			),
			'photo' => array(
				'replace' => 'u-photo',
			),
			'brand' => array(
				'replace' => 'p-brand',
			),
			'category' => array(
				'replace' => 'p-category',
			),
			'description' => array(
				'replace' => 'p-description',
			),
			'identifier' => array(
				'replace' => 'u-identifier',
			),
			'url' => array(
				'replace' => 'u-url',
			),
			'review' => array(
				'replace' => 'p-review h-review',
			),
			'price' => array(
				'replace' => 'p-price'
			),
		),
		'item' => array(
			'fn' => array(
				'replace' => 'p-name'
			),
			'url' => array(
				'replace' => 'u-url'
			),
			'photo' => array(
				'replace' => 'u-photo'
			),
		),
		'adr' => array(
			'post-office-box' => array(
				'replace' => 'p-post-office-box'
			),
			'extended-address' => array(
				'replace' => 'p-extended-address'
			),
			'street-address' => array(
				'replace' => 'p-street-address'
			),
			'locality' => array(
				'replace' => 'p-locality'
			),
			'region' => array(
				'replace' => 'p-region'
			),
			'postal-code' => array(
				'replace' => 'p-postal-code'
			),
			'country-name' => array(
				'replace' => 'p-country-name'
			),
		),
		'geo' => array(
			'latitude' => array(
				'replace' => 'p-latitude'
			),
			'longitude' => array(
				'replace' => 'p-longitude'
			),
		),
	);
}

function parseUriToComponents($uri) {
	$result = array(
		'scheme' => null,
		'authority' => null,
		'path' => null,
		'query' => null,
		'fragment' => null
	);

	$u = @parse_url($uri);

	if(array_key_exists('scheme', $u))
		$result['scheme'] = $u['scheme'];

	if(array_key_exists('host', $u)) {
		if(array_key_exists('user', $u))
			$result['authority'] = $u['user'];
		if(array_key_exists('pass', $u))
			$result['authority'] .= ':' . $u['pass'];
		if(array_key_exists('user', $u) || array_key_exists('pass', $u))
			$result['authority'] .= '@';
		$result['authority'] .= $u['host'];
		if(array_key_exists('port', $u))
			$result['authority'] .= ':' . $u['port'];
	}

	if(array_key_exists('path', $u))
		$result['path'] = $u['path'];

	if(array_key_exists('query', $u))
		$result['query'] = $u['query'];

	if(array_key_exists('fragment', $u))
		$result['fragment'] = $u['fragment'];

	return $result;
}

function resolveUrl($baseURI, $referenceURI) {
	$target = array(
		'scheme' => null,
		'authority' => null,
		'path' => null,
		'query' => null,
		'fragment' => null
	);

	# 5.2.1 Pre-parse the Base URI
	# The base URI (Base) is established according to the procedure of
	# Section 5.1 and parsed into the five main components described in
	# Section 3
	$base = parseUriToComponents($baseURI);

	# If base path is blank (http://example.com) then set it to /
	# (I can't tell if this is actually in the RFC or not, but seems like it makes sense)
	if($base['path'] == null)
		$base['path'] = '/';

	# 5.2.2. Transform References

	# The URI reference is parsed into the five URI components
	# (R.scheme, R.authority, R.path, R.query, R.fragment) = parse(R);
	$reference = parseUriToComponents($referenceURI);

	# A non-strict parser may ignore a scheme in the reference
	# if it is identical to the base URI's scheme.
	# TODO

	if($reference['scheme']) {
		$target['scheme'] = $reference['scheme'];
		$target['authority'] = $reference['authority'];
		$target['path'] = removeDotSegments($reference['path']);
		$target['query'] = $reference['query'];
	} else {
		if($reference['authority']) {
			$target['authority'] = $reference['authority'];
			$target['path'] = removeDotSegments($reference['path']);
			$target['query'] = $reference['query'];
		} else {
			if($reference['path'] == '') {
				$target['path'] = $base['path'];
				if($reference['query']) {
					$target['query'] = $reference['query'];
				} else {
					$target['query'] = $base['query'];
				}
			} else {
				if(substr($reference['path'], 0, 1) == '/') {
					$target['path'] = removeDotSegments($reference['path']);
				} else {
					$target['path'] = mergePaths($base, $reference);
					$target['path'] = removeDotSegments($target['path']);
				}
				$target['query'] = $reference['query'];
			}
			$target['authority'] = $base['authority'];
		}
		$target['scheme'] = $base['scheme'];
	}
	$target['fragment'] = $reference['fragment'];

	# 5.3 Component Recomposition
	$result = '';
	if($target['scheme']) {
		$result .= $target['scheme'] . ':';
	}
	if($target['authority']) {
		$result .= '//' . $target['authority'];
	}
	$result .= $target['path'];
	if($target['query']) {
		$result .= '?' . $target['query'];
	}
	if($target['fragment']) {
		$result .= '#' . $target['fragment'];
	} elseif($referenceURI == '#') {
		$result .= '#';
	}
	return $result;
}

# 5.2.3 Merge Paths
function mergePaths($base, $reference) {
	# If the base URI has a defined authority component and an empty
	# path,
	if($base['authority'] && $base['path'] == null) {
		# then return a string consisting of "/" concatenated with the
		# reference's path; otherwise,
		$merged = '/' . $reference['path'];
	} else {
		if(($pos=strrpos($base['path'], '/')) !== false) {
			# return a string consisting of the reference's path component
			# appended to all but the last segment of the base URI's path (i.e.,
			# excluding any characters after the right-most "/" in the base URI
			# path,
			$merged = substr($base['path'], 0, $pos + 1) . $reference['path'];
		} else {
			# or excluding the entire base URI path if it does not contain
			# any "/" characters).
			$merged = $base['path'];
		}
	}
	return $merged;
}

# 5.2.4.A Remove leading ../ or ./
function removeLeadingDotSlash(&$input) {
	if(substr($input, 0, 3) == '../') {
		$input = substr($input, 3);
	} elseif(substr($input, 0, 2) == './') {
		$input = substr($input, 2);
	}
}

# 5.2.4.B Replace leading /. with /
function removeLeadingSlashDot(&$input) {
	if(substr($input, 0, 3) == '/./') {
		$input = '/' . substr($input, 3);
	} else {
		$input = '/' . substr($input, 2);
	}
}

# 5.2.4.C Given leading /../ remove component from output buffer
function removeOneDirLevel(&$input, &$output) {
	if(substr($input, 0, 4) == '/../') {
		$input = '/' . substr($input, 4);
	} else {
		$input = '/' . substr($input, 3);
	}
	$output = substr($output, 0, strrpos($output, '/'));
}

# 5.2.4.D Remove . and .. if it's the only thing in the input
function removeLoneDotDot(&$input) {
	if($input == '.') {
		$input = substr($input, 1);
	} else {
		$input = substr($input, 2);
	}
}

# 5.2.4.E Move one segment from input to output
function moveOneSegmentFromInput(&$input, &$output) {
	if(substr($input, 0, 1) != '/') {
		$pos = strpos($input, '/');
	} else {
		$pos = strpos($input, '/', 1);
	}

	if($pos === false) {
		$output .= $input;
		$input = '';
	} else {
		$output .= substr($input, 0, $pos);
		$input = substr($input, $pos);
	}
}

# 5.2.4 Remove Dot Segments
function removeDotSegments($path) {
	# 1.  The input buffer is initialized with the now-appended path
	#     components and the output buffer is initialized to the empty
	#     string.
	$input = $path;
	$output = '';

	$step = 0;

	# 2.  While the input buffer is not empty, loop as follows:
	while($input) {
		$step++;

		if(substr($input, 0, 3) == '../' || substr($input, 0, 2) == './') {
			#     A.  If the input buffer begins with a prefix of "../" or "./",
			#         then remove that prefix from the input buffer; otherwise,
			removeLeadingDotSlash($input);
		} elseif(substr($input, 0, 3) == '/./' || $input == '/.') {
			#     B.  if the input buffer begins with a prefix of "/./" or "/.",
			#         where "." is a complete path segment, then replace that
			#         prefix with "/" in the input buffer; otherwise,
			removeLeadingSlashDot($input);
		} elseif(substr($input, 0, 4) == '/../' || $input == '/..') {
			#     C.  if the input buffer begins with a prefix of "/../" or "/..",
			#          where ".." is a complete path segment, then replace that
			#          prefix with "/" in the input buffer and remove the last
			#          segment and its preceding "/" (if any) from the output
			#          buffer; otherwise,
			removeOneDirLevel($input, $output);
		} elseif($input == '.' || $input == '..') {
			#     D.  if the input buffer consists only of "." or "..", then remove
			#         that from the input buffer; otherwise,
			removeLoneDotDot($input);
		} else {
			#     E.  move the first path segment in the input buffer to the end of
			#         the output buffer and any subsequent characters up to, but not including,
			#         the next "/" character or the end of the input buffer
			moveOneSegmentFromInput($input, $output);
		}
	}

	return $output;
}
