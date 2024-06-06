# php-mf2

[![Latest Stable Version](http://poser.pugx.org/mf2/mf2/v)](https://packagist.org/packages/mf2/mf2) [![Total Downloads](http://poser.pugx.org/mf2/mf2/downloads)](https://packagist.org/packages/mf2/mf2) [![Latest Unstable Version](http://poser.pugx.org/mf2/mf2/v/unstable)](https://packagist.org/packages/mf2/mf2) [![License](http://poser.pugx.org/mf2/mf2/license)](https://packagist.org/packages/mf2/mf2) [![PHP Version Require](http://poser.pugx.org/mf2/mf2/require/php)](https://packagist.org/packages/mf2/mf2)<a href="https://github.com/microformats/php-mf2/actions/workflows/main.yml"><img src="https://github.com/microformats/php-mf2/actions/workflows/main.yml/badge.svg?branch=main" alt="" /></a> 

php-mf2 is a pure, generic [microformats-2](http://microformats.org/wiki/microformats-2) parser. It makes HTML as easy to consume as JSON.

Instead of having a hard-coded list of all the different microformats, it follows a set of procedures to handle different property types (e.g. `p-` for plaintext, `u-` for URL, etc). This allows for a very small and maintainable parser.

## Installation

There are two ways of installing php-mf2. We **highly recommend** installing php-mf2 using [Composer](http://getcomposer.org). The rest of the documentation assumes that you have done so.

To install using Composer, run

```
composer require mf2/mf2
```

If you can’t or don’t want to use Composer, then php-mf2 can be installed the old way by downloading [`/Mf2/Parser.php`](https://raw.githubusercontent.com/microformats/php-mf2/master/Mf2/Parser.php), adding it to your project and requiring it from files you want to call its functions from, like this:

```php
<?php

require_once 'Mf2/Parser.php';

// Now all the functions documented below are available, for example:
$mf = Mf2\fetch('https://waterpigs.co.uk');
```

It is recommended to install the HTML5 parser for proper handling of HTML5 elements. Using composer, run

```
composer require masterminds/html5
```

If this library is added to your project, the php-mf2 parser will use it automatically instead of the built-in HTML parser.


### Signed Code Verification

From v0.2.9, php-mf2’s version tags are signed using GPG, allowing you to cryptographically verify that you’re using code which hasn’t been tampered with. To verify the code you will need the GPG keys for one of the people in the list of code signers:

* Barnaby Walters barnaby@waterpigs.co.uk 1C00 430B 19C6 B426 922F E534 BEF8 CE58 118A D524
* Aaron Parecki aaron@parecki.com F384 12A1 55FB 8B15 B7DD 8E07 4225 2B5E 65CE 0ADD
* Bear bear@bear.im 0A93 9BA7 8203 FCBC 58A9 E8B5 9D1E 0661 8EE5 B4D8

To import the relevant keys into your GPG keychain, execute the following command:

```bash
gpg --recv-keys 1C00430B19C6B426922FE534BEF8CE58118AD524 F38412A155FB8B15B7DD8E0742252B5E65CE0ADD 0A939BA78203FCBC58A9E8B59D1E06618EE5B4D8
```

Then verify the installed files like this:

```bash
# in your project root
cd vendor/mf2/mf2
git tag -v v0.3.0
```

If nothing went wrong, you should see the tag commit message, ending something like this:

```
gpg: Signature made Wed  6 Aug 10:04:20 2014 GMT using RSA key ID 2B2BBB65
gpg: Good signature from "Barnaby Walters <barnaby@waterpigs.co.uk>"
gpg:                 aka "[jpeg image of size 12805]"
```

Possible issues:

* **Git complains that there’s no such tag**: check for a .git file in the source folder; odds are you have the prefer-dist setting enabled and composer is just extracting a zip rather than checking out from git.
* **Git complains the gpg command doesn’t exist**: If you successfully imported my key then you obviously do have gpg installed, but you might have gpg2, whereas git looks for gpg. Solution: tell git which binary to use: `git config --global gpg.program 'gpg2'`

## Usage

php-mf2 is PSR-0 autoloadable, so simply include Composer’s auto-generated autoload file (`/vendor/autoload.php`) and you can start using it. These two functions cover most situations:

* To fetch microformats from a URL, call `Mf2\fetch($url)`
* To parse microformats from HTML, call `Mf2\parse($html, $url)`, where `$url` is the URL from which `$html` was loaded, if any. This parameter is required for correct relative URL parsing and must not be left out unless parsing HTML which is not loaded from the web.

## Examples

### Fetching microformats from a URL

```php
<?php

namespace YourApp;

require '/vendor/autoload.php';

use Mf2;

// (Above code (or equivalent) assumed in future examples)

$mf = Mf2\fetch('http://microformats.org');

foreach ($mf['items'] as $microformat) {
	echo "A {$microformat['type'][0]} called {$microformat['properties']['name'][0]}\n";
}

```

### Parsing microformats from a HTML string

Here we demonstrate parsing of microformats2 implied property parsing, where an entire h-card with name and URL properties is created using a single `h-card` class.

```php
<?php

$html = '<a class="h-card" href="https://waterpigs.co.uk/">Barnaby Walters</a>';
$output = Mf2\parse($html, 'https://waterpigs.co.uk/');
```

`$output` is a canonical microformats2 array structure like:

```json
{
	"items": [
		{
			"type": ["h-card"],
			"properties": {
				"name": ["Barnaby Walters"],
				"url": ["https://waterpigs.co.uk/"]
			}
		}
	],
	"rels": {}
}
```

If no microformats are found, `items` will be an empty array.

Note that, whilst the property prefixes are stripped, the prefix of the `h-*` classname(s) in the "type" array are retained.

### Parsing a document with relative URLs

Most of the time you’ll be getting your input HTML from a URL. You should pass that URL as the second parameter to `Mf2\parse()` so that any relative URLs in the document can be resolved. For example, say you got the following HTML from `http://example.org/post/1`:

```html
<div class="h-card">
	<h1 class="p-name">Mr. Example</h1>
	<img class="u-photo" alt="" src="/photo.png" />
</div>
```

Parsing like this:

```php
$output = Mf2\parse($html, 'http://example.org/post/1');
```

will result in the following output, with relative URLs made absolute:

```json
{
	"items": [{
		"type": ["h-card"],
		"properties": {
			"name": ["Mr. Example"],
			"photo": ["http://example.org/photo.png"]
		}
	}],
	"rels": {},
	"rel-urls": {}
}
```

php-mf2 correctly handles relative URL resolution according to the URI and HTML specs, including correct use of the `<base>` element.

### Parsing `rel` and `rel=alternate` values

php-mf2 also parses any link relations in the document, placing them into two top-level arrays — one for `rel=alternate` and another for all other rel values, e.g. when parsing:

```html
<a rel="me" href="https://twitter.com/barnabywalters">Me on twitter</a>
<link rel="alternate etc" href="http://example.com/notes.atom" />
```

parsing will result in the following keys:

```json
{
	"items": [],
	"rels": {
		"me": ["https://twitter.com/barnabywalters"]
	},
	"rel-urls": {
		"https://twitter.com/barnabywalters": {
			"text": "Me on twitter",
			"rels": ["me"]
		},
		"http://example.com/notes.atom": {
			"rels": ["alternate","etc"]
		}
	}
}
```

Protip: if you’re not bothered about the microformats2 data and just want rels and alternates, you can improve performance by creating a `Mf2\Parser` object (see below) and calling `->parseRelsAndAlternates()` instead of `->parse()`, e.g.

```php
<?php

$parser = new Mf2\Parser('<link rel="…');
$relsAndAlternates = $parser->parseRelsAndAlternates();
```

### Debugging Mf2\fetch

`Mf2\fetch()` will attempt to parse any response served with “HTML” in the content-type, regardless of what the status code is. If it receives a non-HTML response it will return null.

To learn what the HTTP status code for any request was, or learn more about the request, pass a variable name as the third parameter to `Mf2\fetch()` — this will be filled with the contents of `curl_getinfo()`, e.g:

```php

<?php

$mf = Mf2\fetch('http://waterpigs.co.uk/this-page-doesnt-exist', true, $curlInfo);
if ($curlInfo['http_code'] == '404') {
	// This page doesn’t exist.
}

```

If it was HTML then it is still parsed, as there are cases where error pages contain microformats — for example a deleted h-entry resulting in a 410 Gone response containing a stub h-entry with amn explanation for the deletion.

### Getting more control by creating a Parser object

The `Mf2\parse()` function covers the most common usage patterns by internally creating an instance of `Mf2\Parser` and returning the output all in one step. For some advanced usage you can also create an instance of `Mf2\Parser` yourself.

The constructor takes two arguments, the input HTML (or a DOMDocument) and the URL to use as a base URL. Once you have a parser, there are a few other things you can do:

### Selectively parsing a document

There are several ways to selectively parse microformats from a document. If you wish to only parse microformats from an element with a particular ID, `Parser::parseFromId($id) ` is the easiest way.

If your needs are more complex, `Parser::parse` accepts an optional context DOMNode as its second parameter. Typically you’d use `Parser::query` to run XPath queries on the document to get the element you want to parse from under, then pass it to `Parser::parse`. Example usage:

```php
$doc = 'More microformats, more microformats <div id="parse-from-here"><span class="h-card">This shows up</span></div> yet more ignored content';
$parser = new Mf2\Parser($doc);

$parser->parseFromId('parse-from-here'); // returns a document with only the h-card descended from div#parse-from-here

$elementIWant = $parser->query('an xpath query')[0];

$parser->parse(true, $elementIWant); // returns a document with only the Microformats under the selected element

```

### Experimental Language Parsing

There is still [ongoing brainstorming](http://microformats.org/wiki/microformats2-parsing-brainstorming#Parse_language_information) around how HTML language attributes should be added to the parsed result. In order to use this feature, you will need to set a flag to opt in.

```php
$doc = '<div class="h-entry" lang="sv" id="postfrag123">
	<h1 class="p-name">En svensk titel</h1>
	<div class="e-content" lang="en">With an <em>english</em> summary</div>
	<div class="e-content">Och <em>svensk</em> huvudtext</div>
</div>';
$parser = new Mf2\Parser($doc);
$parser->lang = true;
$result = $parser->parse();
```

```json
{
	"items": [
		{
			"type": ["h-entry"],
			"properties": {
				"name": ["En svensk titel"],
				"content": [
					{
						"html": "With an <em>english</em> summary",
						"value": "With an english summary",
						"lang": "en"
					},
					{
						"html": "Och <em>svensk</em> huvudtext",
						"value": "Och svensk huvudtext",
						"lang": "sv"
					}
				]
			},
			"lang": "sv"
		}
	],
	"rels": {},
	"rel-urls": {}
}
```

Note that this option is still considered experimental and in development, and the parsed output may change between minor releases.


### Generating output for JSON serialization with JSON-mode

Due to a quirk with the way PHP arrays work, there is an edge case ([reported](https://github.com/microformats/php-mf2/issues/29) by Tom Morris) in which a document with no rel values, when serialised as JSON, results in an empty object as the rels value rather than an empty array. Replacing this in code with a stdClass breaks PHP iteration over the values.

As of version 0.2.6, the default behaviour is back to being PHP-friendly, so if you want to produce results specifically for serialisation as JSON (for example if you run a HTML -> JSON service, or want to run tests against JSON fixtures), enable JSON mode:

```php
// …by passing true as the third constructor:
$jsonParser = new Mf2\Parser($html, $url, true);
```

### Classic Microformats Markup

php-mf2 has some support for parsing classic microformats markup. It’s enabled by default, but can be turned off by calling `Mf2\parse($html, $url, false);` or `$parser->parse(false);` if you’re instanciating a parser yourself.

In previous versions of php-mf2 you could also add your own class mappings — officially this is no longer supported.

* If the built in mappings don’t successfully parse some classic microformats markup then raise an issue and we’ll fix it.
* If you want to screen-scrape websites which don’t use mf2 into mf2 data structures, consider contributing to [php-mf2-shim](https://github.com/microformats/php-mf2-shim)
* If you *really* need to make one-off changes to the default mappings… It is possible. But you have to figure it out for yourself ;)

## Security

**No filtering of content takes place in mf2\Parser, so treat its output as you would any untrusted data from the source of the parsed document.**

Some tips:

* All content apart from the 'html' key in dictionaries produced by parsing an `e-*` property is not HTML-escaped. For example, `<span class="p-name">&lt;code&gt;</span>` will result in `"name": ["<code>"]`. At the very least, HTML-escape all properties before echoing them out in HTML
* If you’re using the raw HTML content under the 'html' key of dictionaries produced by parsing `e-*` properties, you SHOULD purify the HTML before displaying it to prevent injection of arbitrary code. For PHP we recommend using [HTML Purifier](http://htmlpurifier.org)

TODO: move this section to a security/consumption best practises page on the wiki

## Contributing

Issues and bug reports are very welcome. If you know how to write tests then please do so as code always expresses problems and intent much better than English, and gives me a way of measuring whether or not fixes have actually solved your problem. If you don’t know how to write tests, don’t worry :) Just include as much useful information in the issue as you can.

Pull requests very welcome, please try to maintain stylistic, structural and naming consistency with the existing codebase, and don’t be too upset if we make naming changes :)

### How to make a Pull Request

1. Fork the repo to your github account
2. Clone a copy to your computer (simply installing php-mf2 using composer only works for using it, not developing it)
3. Install the dev dependencies with `composer install`.
4. Run PHPUnit with `composer phpunit`
5. Check PHP Compatibility with the current minimum version supported (`composer phpcs`)
6. Add PHPUnit tests for your changes, either in an existing test file if suitable, or a new one
7. Make your changes
8. Make sure your tests pass (`composer phpunit`)
9. Go to your fork of the repo on github.com and make a pull request, preferably with a short summary, detailed description and references to issues/parsing specs as appropriate
10. Bask in the warm feeling of having contributed to a piece of free software

### Testing

There are currently two separate test suites: one, in `tests/Mf2`, is written in phpunit, containing many microformats parsing examples as well as internal parser tests and regression tests for specific issues over php-mf2’s history. Run it with `./vendor/bin/phpunit`. If you do not have a live internet connection, you can exclude tests that depend on it: `./vendor/bin/phpunit --exclude-group internet`.

The other, in `tests/test-suite`, is a custom test harness which hooks up php-mf2 to the cross-platform [microformats test suite](https://github.com/microformats/tests). To run these tests you must first install the tests with `./composer.phar install`. Each test consists of a HTML file and a corresponding JSON file, and the suite can be run with `php ./tests/test-suite/test-suite.php`.

Currently php-mf2 passes the majority of it’s own test case, and a good percentage of the cross-platform tests. Contributors should ALWAYS test against the PHPUnit suite to ensure any changes don’t negatively impact php-mf2, and SHOULD run the cross-platform suite, especially if you’re changing parsing behaviour.

### Changelog

#### v0.5.0

Breaking change: bumped minimum PHP version from 5.4 to 5.6 ([#220](https://github.com/microformats/php-mf2/issues/220))

Other changes:

* [#195](https://github.com/microformats/php-mf2/issues/195) Fix backcompat parsing for geo property
* [#182](https://github.com/microformats/php-mf2/issues/182) Fix parsing for iframe.u-*\[src]
* [#214](https://github.com/microformats/php-mf2/issues/214) parse an img element for src and alt
* [#206](https://github.com/microformats/php-mf2/issues/206) Add optional ID for h-* elements
* [#198](https://github.com/microformats/php-mf2/issues/198) reduce instances where photo is implied
* Internal: switched from Travis to Github Actions for CI
* Internal: renamed master branch to main

#### v0.4.6

Bugfixes:

* Don't include img src attribute in implied p-name ([#180](https://github.com/microformats/php-mf2/issues/180))
* Normalize ordinal dates in VCP values ([#167](https://github.com/microformats/php-mf2/issues/167))
* Fix for accidental array access of stdClass in deeply nested structures ([#196](https://github.com/microformats/php-mf2/issues/196))
* Reduce instances where u-url is implied according to a [spec update](http://microformats.org/wiki/index.php?title=microformats2-parsing&diff=66887&oldid=66871) ([#183](https://github.com/microformats/php-mf2/issues/183) and [parsing issue #36](https://github.com/microformats/microformats2-parsing/issues/36))
* Fix for wrongly implied photo property ([#190](https://github.com/microformats/php-mf2/issues/190))

Other Updates:

* Adds a filter to avoid running tests that require a live internet connection ([#194](https://github.com/microformats/php-mf2/pull/194))
* Refactor implied name code to match new implied name handling of photo and url ([#193](https://github.com/microformats/php-mf2/pull/193))
* Moved this repo to the microformats GitHub organization ([#179](https://github.com/microformats/php-mf2/issues/179))


#### v0.4.5

2018-08-02

Bugfixes:

* Fix for parsing empty `e-` elements

Other Updates:

* Added `.editorconfig` to the project and cleaned up whitespace across all files


#### v0.4.4

2018-08-01

Bugfixes:

* Ensure empty `properties` is an object `{}` rather than array  `[]` ([#171](https://github.com/microformats/php-mf2/issues/171))
* Ensure the parser does not mutate the DOMDOcument passed in ([#174](https://github.com/microformats/php-mf2/issues/174))
* Fix for multiple class names in backcompat parsing ([#156](https://github.com/microformats/php-mf2/issues/156))

Microformats Parsing Updates:

* New algorithm for plaintext values ([#168](https://github.com/microformats/php-mf2/pull/168) and [parsing issue #15](https://github.com/microformats/microformats2-parsing/issues/15))
* Always resolve URLs from `u-` properties even when not from a link element ([Parsing issue #10](https://github.com/microformats/microformats2-parsing/issues/10))

Other Updates:

* Improved test coverage


#### v0.4.3

2018-03-29

If the [masterminds/html5](https://github.com/Masterminds/html5-php) HTML5 parser is available, the Mf2 parser will use that instead of the built-in HTML parser. This enables proper handling of HTML5 elements such as `<article>`.

To include the HTML5 parser in your project, run:

```
composer require masterminds/html5
```

#### v0.4.2

2018-03-29

Fixes:

* [#165](https://github.com/microformats/php-mf2/pull/165) - Prevents inadvertently adding whitespace to the html value
* [#158](https://github.com/microformats/php-mf2/issues/158) - Allows numbers in vendor prefixed names
* [#160](https://github.com/microformats/php-mf2/issues/160) - Ignores class names with consecutive dashes
* [#159](https://github.com/microformats/php-mf2/issues/159) - Remove duplicate values from type and rels arrays
* [#162](https://github.com/microformats/php-mf2/pull/162) - Improved rel attribute parsing

Backcompat:

* [#157](https://github.com/microformats/php-mf2/issues/157) - Parse `rel=tag` as `p-category` for hEntry and hReview

#### v0.4.1

2018-03-15

Fixes:

* [#153](https://github.com/microformats/php-mf2/issues/153) - Fixes parsed timestamps authored with a Z timezone offset
* [#151](https://github.com/microformats/php-mf2/issues/151) - Adds back "value" of nested microformats when no matching property exists


#### v0.4.0

2018-03-13

Breaking changes:

* [#125](https://github.com/microformats/php-mf2/pull/125) - Add `rel-urls` to parsed result. Removes `alternates` by default but still available behind a feature flag.
* [#142](https://github.com/microformats/php-mf2/pull/142) - Reduce instances of implied `p-name`. See Microformats issue [#6](https://github.com/microformats/microformats2-parsing/issues/6). This means it is now possible for the parsed result to *not* have a `name` property, whereas before there was always a `name` property on an object. Make sure consuming code can handle an object without a name now.

Fixes:

* [#124](https://github.com/microformats/php-mf2/pull/124) - Fix for experimental lang parsing
* [#127](https://github.com/microformats/php-mf2/issues/127) - Fix for parsing `h-*` class names containing invalid characters.
* [#131](https://github.com/microformats/php-mf2/pull/131) - Improved `dt-` parsing. Issues [#126](https://github.com/microformats/php-mf2/issues/126) and [#115](https://github.com/microformats/php-mf2/issues/115).
* [#130](https://github.com/microformats/php-mf2/issues/130) - Fix for implied properties with empty attributes.
* [#135](https://github.com/microformats/php-mf2/issues/135) - Trim leading and tailing whitespace from HTML value as well as text value.
* [#137](https://github.com/microformats/php-mf2/issues/137) - Fix backcompat hfeed parsing.
* [#134](https://github.com/microformats/php-mf2/issues/134) - Fix `rel=bookmark` backcompat parsing.
* [#116](https://github.com/microformats/php-mf2/issues/116) - Fix backcompat parsing for `summary` property in `hreview`
* [#149](https://github.com/microformats/php-mf2/issues/149) - Fix for datetime parsing, no longer tries to interpret the value and passes through instead

#### v0.3.2

2017-05-27

* Fixed how the Microformats tests repo is loaded via composer
* Moved experimental language parsing feature behind an opt-in flag
* [#121](https://github.com/microformats/php-mf2/pull/121) Fixed language detection to support parsing of HTML fragments

#### v0.3.1

2017-05-24

* [#89](https://github.com/microformats/php-mf2/issues/89) - Fixed parsing empty `img alt=""` attributes
* [#91](https://github.com/microformats/php-mf2/issues/91) - Ignore rel values from HTML tags that don't allow rel values
* [#57](https://github.com/microformats/php-mf2/issues/57) - Implement hAtom rel=bookmark backcompat
* [#94](https://github.com/microformats/php-mf2/pull/94) - Fixed HTML output when parsing e-* properties
* [#97](https://github.com/microformats/php-mf2/pull/97) - Experimental language parsing
* [#88](https://github.com/microformats/php-mf2/issues/88) - Fix for implied photo parsing
* [#102](https://github.com/microformats/php-mf2/pull/102) - Ignore classes with numbers or capital letters
* [#111](https://github.com/microformats/php-mf2/pull/111) - Improved backcompat parsing
* [#106](https://github.com/microformats/php-mf2/issues/106) - Send `Accept: text/html` header when using the `fetch` method
* [#114](https://github.com/microformats/php-mf2/issues/114) - Parse `poster` attribute for `video` tags
* [#118](https://github.com/microformats/php-mf2/issues/118) - Fixes parsing elements with missing attributes
* Tests now use [microformats/tests](https://github.com/microformats/tests) repo

Many thanks to @gRegorLove for the major overhaul of the backcompat parsing!

#### v0.3.0

2016-03-14

* Requires PHP 5.4 at minimum (PHP 5.3 is EOL)
* Licensed under CC0 rather than MIT
* Merges Pull requests #70, #73, #74, #75, #77, #80, #82, #83, #85 and #86.
* Variety of small bug fixes and features including improved whitespace support, removal of style and script contents from plaintext properties
* All PHPUnit tests passing finally

Many thanks to @aaronpk, @diplix, @dissolve, @dymcx @gRegorLove, @jeena, @veganstraightedge and @voxpelli for all your hard work opening issues and sending and merging PRs!

#### v0.2.12

2015-07-12

* Merges pull requests [#65](https://github.com/microformats/php-mf2/pull/65), [#66](https://github.com/microformats/php-mf2/pull/66) and [#67](https://github.com/microformats/php-mf2/pull/67).
* Fixes issue [#64](https://github.com/microformats/php-mf2/issues/64).

Many thanks to @aaronpk, @gRegorLove and @kylewm for contributions, @aaronpk and @kevinmarks for PR management and @tantek for issue reporting!

#### v0.2.11

2015-07-10

#### v0.2.10

2015-04-29

* Merged [#58](https://github.com/microformats/php-mf2/pull/58), fixing some parsing bugs and adding support for area element parsing. Thanks so much for your hard work and patience, <a class="h-card" href="http://ben.thatmustbe.me/">Ben</a>!

#### v0.2.9

2014-08-06

* Added backcompat classmap for hProduct, associated tests
* Started GPG signing version tags as barnaby@waterpigs.co.uk, fingerprint CBC7 7876 BF7C 9637 B6AE 77BA 7D49 834B 0416 CFA3

#### v0.2.8

2014-07-17

* Fixed issue #51 causing php-mf2 to not work with PHP 5.3
* Fixed issue #52 correctly handling the `<template>` element by ignoring it
* Fixed issue #53 improving the plaintext parsing of `<img>` elements

#### v0.2.7

2014-06-18

* Added `Mf2\fetch()` which fetches content from a URL and returns parsed microformats
* Added implied `dt-end` discovery (thanks for all your hard work, @gRegorLove!)
* Fixed issue causing classnames like `blah e- blah` to produce properties with numeric keys (thanks @aaronpk and @gRegorLove)
* Fixed issue causing resolved URLs to not include port numbers (thanks @aaronpk)

#### v0.2.6

* Added JSON mode as long-term fix for #29
* Fixed bug causing microformats nested under multiple property names to be parsed only once

#### v0.2.5

* Removed conditional replacing empty rel list with stdclass. Original purpose was to make JSON-encoding the output from the parser correct but it also caused Fatal Errors due to trying to treat stdclass as array.

#### v0.2.4

#### v0.2.3

* Made p-* parsing consistent with implied name parsing
* Stopped collapsing whitespace in p-* properties
* Implemented unicodeTrim which removes &nbsp; characters as well as regex \s
* Added support for implied name via abbr[title]
* Prevented excessively nested value-class elements from being parsed incorrectly, removed incorrect separator which was getting added in some cases
* Updated u-* parsing to be spec-compliant, matching [href] before value-class and only attempting URL resolution for URL attributes
* Added support for input[value] parsing
* Tests for all the above

#### v0.2.2

* Made resolveUrl method public, allowing advanced parsers and subclasses to make use of it
* Fixed bug causing multiple duplicate property values to appear

#### v0.2.1

* Fixed bug causing classic microformats property classnames to not be parsed correctly

#### v0.2.0 (BREAKING CHANGES)

* Namespace change from mf2 to Mf2, for PSR-0 compatibility
* `Mf2\parse()` function added to simplify the most common case of just parsing some HTML
* Updated e-* property parsing rules to match mf2 parsing spec — instead of producing inconsistent HTML content, it now produces dictionaries like <pre><code>
{
	"html": "<b>The Content</b>",
	"value: "The Content"
}
</code></pre>
* Removed `htmlSafe` options as new e-* parsing rules make them redundant
* Moved a whole load of static functions out of the class and into standalone functions
* Changed autoloading to always include Parser.php instead of using classmap

#### v0.1.23

* Made some changes to the way back-compatibility with classic microformats are handled, ignoring classic property classnames inside mf2 roots and outside classic roots
* Deprecated ability to add new classmaps, removed twitter classmap. Use [php-mf2-shim](http://github.com/microformats/php-mf2-shim) instead, it’s better

#### v0.1.22

* Converts classic microformats by default

#### v0.1.21

* Removed webignition dependency, also removing ext-intl dependency. php-mf2 is now a standalone, single file library again
* Replaced webignition URL resolving with custom code passing almost all tests, courtesy of <a class="h-card" href="http://aaronparecki.com">Aaron Parecki</a>

#### v0.1.20

* Added in almost-perfect custom URL resolving code

#### v0.1.19 (2013-06-11)

* Required stable version of webigniton/absolute-url-resolver, hopefully resolving versioning problems

#### v0.1.18 (2013-06-05)

* Fixed problems with isElementParsed, causing elements to be incorrectly parsed
* Cleaned up some test files

#### v0.1.17

* Rewrote some PHP 5.4 array syntax which crept into 0.1.16 so php-mf2 still works on PHP 5.3
* Fixed a bug causing weird partial microformats to be added to parent microformats if they had doubly property-nested children
* Finally actually licensed this project under a real license (MIT, in composer.json)
* Suggested barnabywalters/mf-cleaner in composer.json

#### v0.1.16

* Ability to parse from only an ID
* Context DOMElement can be passed to $parse
* Parser::query runs XPath queries on the current document
* When parsing e-* properties, elements with @src, @data or @href have relative URLs resolved in the output

#### v0.1.15

* Added html-safe options
* Added rel+rel-alternate parsing


## License

php-mf2 is dedicated to the public domain using Creative Commons -- CC0 1.0 Universal.

http://creativecommons.org/publicdomain/zero/1.0
