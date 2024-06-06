<?php

namespace Mf2\Parser\Test;

use Mf2\Parser;
use Mf2;
use PHPUnit_Framework_TestCase;

/**
 * Parser Test
 *
 * Contains tests for internal parsing functions and stuff which doesn’t go anywhere else, i.e.
 * isn’t related to a particular property as such.
 *
 * Stuff for parsing E goes in here until there is enough of it to go elsewhere (like, never?)
 */
class ParserTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	public function testUnicodeTrim() {
		$this->assertEquals('thing', Mf2\unicodeTrim('  thing  '));
		$this->assertEquals('thing', Mf2\unicodeTrim('			thing			'));
		$this->assertEquals('thing', Mf2\unicodeTrim(mb_convert_encoding(' &nbsp; thing &nbsp; ', 'UTF-8', 'HTML-ENTITIES') ));
	}

	public function testMicroformatNameFromClassReturnsFullRootName() {
		$expected = array('h-card');
		$actual = Mf2\mfNamesFromClass('someclass h-card someotherclass', 'h-');

		$this->assertEquals($expected, $actual);
	}

	public function testMicroformatNameFromClassHandlesMultipleHNames() {
		$expected = array('h-card', 'h-person');
		$actual = Mf2\mfNamesFromClass('someclass h-card someotherclass h-person yetanotherclass', 'h-');

		$this->assertEquals($expected, $actual);
	}

	public function testMicroformatStripsPrefixFromPropertyClassname() {
		$expected = array('name');
		$actual = Mf2\mfNamesFromClass('someclass p-name someotherclass', 'p-');

		$this->assertEquals($expected, $actual);
	}

	public function testNestedMicroformatPropertyNameWorks() {
		$expected = array('location' => array('p-'), 'author' => array('u-', 'p-'));
		$test = 'someclass p-location someotherclass u-author p-author';
		$actual = Mf2\nestedMfPropertyNamesFromClass($test);

		$this->assertEquals($expected, $actual);
	}

	public function testMicroformatNamesFromClassIgnoresPrefixesWithoutNames() {
		$expected = array();
		$actual = Mf2\mfNamesFromClass('someclass h- someotherclass', 'h-');

		$this->assertEquals($expected, $actual);
	}

	public function testMicroformatNamesFromClassHandlesExcessiveWhitespace() {
		$expected = array('h-card');
		$actual = Mf2\mfNamesFromClass('  someclass
				h-card 	 someotherclass		   	 ', 'h-');

		$this->assertEquals($expected, $actual);
	}

	public function testMicroformatNamesFromClassIgnoresUppercaseClassnames() {
		$expected = array();
		$actual = Mf2\mfNamesFromClass('H-ENTRY', 'h-');

		$this->assertEquals($expected, $actual);
	}

	public function testParseE() {
		$input = '<div class="h-entry"><div class="e-content">Here is a load of <strong>embedded markup</strong></div></div>';
		//$parser = new Parser($input);
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('content', $output['items'][0]['properties']);
		$this->assertEquals('Here is a load of <strong>embedded markup</strong>', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertEquals('Here is a load of embedded markup', $output['items'][0]['properties']['content'][0]['value']);
	}

	public function testParseEmptyE() {
		$input = '<div class="h-entry"><div class="p-name">Name</div> <div class="e-content"></div></div>';
		//$parser = new Parser($input);
		$output = Mf2\parse($input);

		$this->assertEquals('Name', $output['items'][0]['properties']['name'][0]);
		$this->assertArrayHasKey('content', $output['items'][0]['properties']);
		$this->assertEquals('', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertEquals('', $output['items'][0]['properties']['content'][0]['value']);
	}

	public function testParseEResolvesRelativeLinks() {
		$input = '<div class="h-entry"><p class="e-content">Blah blah <a href="/a-url">thing</a>. <object data="/object"></object> <img src="/img" /></p></div>';
		$parser = new Parser($input, 'http://example.com');
		$output = $parser->parse();

		$this->assertEquals('Blah blah <a href="http://example.com/a-url">thing</a>. <object data="http://example.com/object"></object> <img src="http://example.com/img">', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertEquals('Blah blah thing. http://example.com/img', $output['items'][0]['properties']['content'][0]['value']);
	}

	public function testParseEWithBR() {
		$input = '<div class="h-entry"><div class="e-content">Here is content with two lines.<br>The br tag should not be converted to an XML br/br element.</div></div>';
		//$parser = new Parser($input);
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('content', $output['items'][0]['properties']);
		$this->assertEquals('Here is content with two lines.<br>The br tag should not be converted to an XML br/br element.', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertEquals('Here is content with two lines.'."\n".'The br tag should not be converted to an XML br/br element.', $output['items'][0]['properties']['content'][0]['value']);
	}

	public function testParseEWithWhitespace() {
		$input = '<div class="h-entry">
	<div class="e-content">
		This <strong>leading and trailing whitespace</strong> should be removed from the HTML and text values.
	</div>
</div>';
		//$parser = new Parser($input);
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('content', $output['items'][0]['properties']);
		$this->assertEquals('This <strong>leading and trailing whitespace</strong> should be removed from the HTML and text values.', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertEquals('This leading and trailing whitespace should be removed from the HTML and text values.', $output['items'][0]['properties']['content'][0]['value']);
	}

	/**
	 * @group parseH
	 */
	public function testInvalidClassnamesContainingHAreIgnored() {
		$input = '<div class="asdfgh-jkl"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		// Look through $output for an item which indicate failure
		foreach ($output['items'] as $item) {
			if (in_array('asdfgh-jkl', $item['type']))
				$this->fail();
		}
	}

	public function testHtmlSpecialCharactersWorks() {
		$this->assertEquals('&lt;&gt;', htmlspecialchars('<>'));
	}

	public function testHtmlEncodesNonEProperties() {
		$input = '<div class="h-card">
			<span class="p-name">&lt;p&gt;</span>
			<span class="dt-published">&lt;dt&gt;</span>
			<span class="u-url">&lt;u&gt;</span>
			</div>';

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('<p>', $output['items'][0]['properties']['name'][0]);
		$this->assertEquals('<dt>', $output['items'][0]['properties']['published'][0]);
		$this->assertEquals('<u>', $output['items'][0]['properties']['url'][0]);
	}


	public function testHtmlEncodesImpliedProperties() {
		$input = '<a class="h-card" href="&lt;url&gt;"><img src="&lt;img&gt;" alt="" />&lt;name&gt;</a>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEquals('<name>', $output['items'][0]['properties']['name'][0]);
		$this->assertEquals('<url>', $output['items'][0]['properties']['url'][0]);
		$result = [
			'value' => '<img>',
			'alt' => ''
			];
		$this->assertEquals($result, $output['items'][0]['properties']['photo'][0]);
	}

	public function testParsesRelValues() {
		$input = '<a rel="author" href="http://example.com">Mr. Author</a>';
		$parser = new Parser($input);

		$output = $parser->parse();

		$this->assertArrayHasKey('rels', $output);
		$this->assertEquals('http://example.com', $output['rels']['author'][0]);
	}

	public function testParsesRelAlternateValues() {
		$input = '<a rel="alternate home" href="http://example.org" hreflang="de", media="screen" type="text/html" title="German Homepage Link">German Homepage</a>';
		$parser = new Parser($input);
		$parser->enableAlternates = true;
		$output = $parser->parse();

		$this->assertArrayHasKey('alternates', $output);
		$this->assertEquals('http://example.org', $output['alternates'][0]['url']);
		$this->assertEquals('home', $output['alternates'][0]['rel']);
		$this->assertEquals('de', $output['alternates'][0]['hreflang']);
		$this->assertEquals('screen', $output['alternates'][0]['media']);
		$this->assertEquals('text/html', $output['alternates'][0]['type']);
		$this->assertEquals('German Homepage Link', $output['alternates'][0]['title']);
		$this->assertEquals('German Homepage', $output['alternates'][0]['text']);
	}

	public function testParseFromIdOnlyReturnsMicroformatsWithinThatId() {
		$input = <<<EOT
<div class="h-entry"><span class="p-name">Not Included</span></div>

<div id="parse-here">
	<span class="h-card">Included</span>
</div>

<div class="h-entry"><span class="p-name">Not Included</span></div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parseFromId('parse-here');

		$this->assertCount(1, $output['items']);
		$this->assertEquals('Included', $output['items'][0]['properties']['name'][0]);
	}

	/**
	 * Issue #21 github.com/indieweb/php-mf2/issues/21
	 */
	public function testDoesntAddArraysWithOnlyValueForAlreadyParsedNestedMicroformats() {
		$input = <<<EOT
<div class="h-entry">
	<div class="p-in-reply-to h-entry">
		<span class="p-author h-card">Nested Author</span>
	</div>

	<span class="p-author h-card">Real Author</span>
</div>
EOT;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertCount(1, $output['items'][0]['properties']['author']);
	}

	public function testParsesNestedMicroformatsWithClassnamesInAnyOrder() {
		$input = <<<EOT
<div class="h-entry">
	<div class="note- p-in-reply-to h-entry">Name</div>
</div>
EOT;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertCount(1, $output['items'][0]['properties']['in-reply-to']);
		$this->assertEquals('Name', $output['items'][0]['properties']['in-reply-to'][0]['properties']['name'][0]);
	}

	/**
	 * @group internet
	 */
	public function testFetchMicroformats() {
		$mf = Mf2\fetch('http://waterpigs.co.uk/');
		$this->assertArrayHasKey('items', $mf);

		$mf = Mf2\fetch('http://waterpigs.co.uk/photo.jpg', null, $curlInfo);
		$this->assertNull($mf);
		$this->assertContains('jpeg', $curlInfo['content_type']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/48
	 */
	public function testIgnoreClassesEndingInHyphen() {
		$input = '<span class="h-entry"> <span class="e-">foo</span> </span>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayNotHasKey('0', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/52
	 * @see https://github.com/tommorris/mf2py/commit/92740deb7e19b8f1e7fbf6bec001cf52f2b07e99
	 */
	public function testIgnoresTemplateElements() {
		$result = Mf2\parse('<template class="h-card"><span class="p-name">Tom Morris</span></template>');
		$this->assertCount(0, $result['items']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/53
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_an_e-_property
	 */
	public function testConvertsNestedImgElementToAltOrSrc() {
		$input = <<<EOT
<div class="h-entry">
	<p class="e-content">It is a strange thing to see a <img alt="five legged elephant" src="/photos/five-legged-elephant.jpg" /></p>
</div>
EOT;
		$result = Mf2\parse($input, 'http://waterpigs.co.uk/articles/five-legged-elephant');
		$this->assertEquals('It is a strange thing to see a five legged elephant', $result['items'][0]['properties']['content'][0]['value']);
	}

	// parser not respecting not[h-*] in rule  "else if .h-x>a[href]:only-of-type:not[.h-*] then use that [href] for url"
	public function testNotImpliedUrlFromHCard() {
		$input = <<<EOT
<span class="h-entry">
	<a class="h-card" href="http://test.com">John Q</a>
</span>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayNotHasKey('url', $output['items'][0]['properties']);
	}

	public function testAreaTag() {
		$input = <<<EOT
<div class="h-entry">
	<area class="p-category h-card" href="http://personB.example.com" alt="Person Bee" shape="rect" coords="100,100,120,120">
</div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		// p-name is no longer implied for this test due to nested microformat
		// see https://github.com/microformats/microformats2-parsing/issues/6
		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('rect', $output['items'][0]['properties']['category'][0]['shape']);
		$this->assertEquals('100,100,120,120', $output['items'][0]['properties']['category'][0]['coords']);
		$this->assertEquals('Person Bee', $output['items'][0]['properties']['category'][0]['value']);
	}

	public function testParseHcardInCategory() {
		$input = <<<EOT
<span class="h-entry">
	<a class="p-author h-card" href="http://a.example.com/">Alice</a> tagged
	<a href="http://b.example.com/" class="u-category h-card">Bob Smith</a> in
	<a class="u-tag-of u-in-reply-to" href="http://s.example.com/permalink47">
		<img src="http://s.example.com/photo47.png" alt="a photo of Bob and Cole" />
	</a>
</span>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertContains('h-entry', $output['items'][0]['type']);
		$this->assertArrayHasKey('category', $output['items'][0]['properties']);
		$this->assertContains('h-card', $output['items'][0]['properties']['category'][0]['type']);
		$this->assertArrayHasKey('name', $output['items'][0]['properties']['category'][0]['properties']);
		$this->assertEquals('Bob Smith', $output['items'][0]['properties']['category'][0]['properties']['name'][0]);
		$this->assertArrayHasKey('url', $output['items'][0]['properties']['category'][0]['properties']);
		$this->assertEquals('http://b.example.com/', $output['items'][0]['properties']['category'][0]['properties']['url'][0]);
	}

	public function testApplyTransformationToSrcset() {
		$transformation = function ($url) {
			return 'https://example.com/' . ltrim($url, '/');
		};

		// Example from https://developers.whatwg.org/edits.html#attr-img-srcset
		$srcset = 'banner-HD.jpeg 2x, banner-phone.jpeg 100w, banner-phone-HD.jpeg 100w 2x';
		$result = Mf2\applySrcsetUrlTransformation($srcset, $transformation);
		$this->assertEquals('https://example.com/banner-HD.jpeg 2x, https://example.com/banner-phone.jpeg 100w, https://example.com/banner-phone-HD.jpeg 100w 2x', $result);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/84
	 * @group internet
	 */
	public function testRelativeURLResolvedWithFinalURL() {
		$mf = Mf2\fetch('http://aaron.pk/4Zn5');

		$this->assertEquals('https://aaronparecki.com/img/1240x0/2014/12/23/5/photo.jpeg', $mf['items'][0]['properties']['photo'][0]);
	}

	public function testScriptTagContentsRemovedFromTextValue() {
		$input = <<<EOT
<div class="h-entry">
	<div class="p-content">
		<b>Hello World</b>
		<script>alert("hi");</script>
	</div>
</div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertContains('h-entry', $output['items'][0]['type']);
		$this->assertContains('Hello World', $output['items'][0]['properties']['content'][0]);
		$this->assertNotContains('alert', $output['items'][0]['properties']['content'][0]);
	}

	public function testScriptElementContentsRemovedFromAllPlaintextValues() {
		$input = <<<EOT
<div class="h-entry">
	<span class="dt-published">contained<script>not contained</script><style>not contained</style></span>
	<span class="u-url">contained<script>not contained</script><style>not contained</style></span>
</div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertNotContains('not contained', $output['items'][0]['properties']['published'][0]);
		$this->assertNotContains('not contained', $output['items'][0]['properties']['url'][0]);
	}

	public function testScriptTagContentsNotRemovedFromHTMLValue() {
		$input = <<<EOT
<div class="h-entry">
	<div class="e-content">
		<b>Hello World</b>
		<script>alert("hi");</script>
		<style>body{ visibility: hidden; }</style>
		<p>
			<script>alert("hi");</script>
			<style>body{ visibility: hidden; }</style>
		</p>
	</div>
</div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertContains('h-entry', $output['items'][0]['type']);
		$this->assertContains('Hello World', $output['items'][0]['properties']['content'][0]['value']);
		$this->assertContains('<b>Hello World</b>', $output['items'][0]['properties']['content'][0]['html']);
		# The script and style tags should be removed from plaintext results but left in HTML results.
		$this->assertContains('alert', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertNotContains('alert', $output['items'][0]['properties']['content'][0]['value']);
		$this->assertContains('visibility', $output['items'][0]['properties']['content'][0]['html']);
		$this->assertNotContains('visibility', $output['items'][0]['properties']['content'][0]['value']);
	}

	public function testWhitespaceBetweenElements() {
		$input = <<<EOT
<div class="h-entry">
	<data class="p-rsvp" value="yes">I'm attending</data>
	<a class="u-in-reply-to" href="https://snarfed.org/2014-06-16_homebrew-website-club-at-quip">Homebrew Website Club at Quip</a>
	<div class="p-content">Thanks for hosting!</div>
</div>
EOT;

		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertContains('h-entry', $output['items'][0]['type']);
		// p-name is no longer implied for this test due to other p-*
		// see https://github.com/microformats/microformats2-parsing/issues/6
		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']);
	}


	/**
	 * @see http://www.kevinmarks.com/twitterutils.html
	 */
	public function testCamelCaseClassNames() {
		$input = <<<EOT
<div class="EmbeddedTweet js-clickToOpenTarget" data-click-to-open-target="https://twitter.com/kevinmarks/status/700752598123433985" data-iframe-title="Twitter Tweet" data-dt-full="%{hours12}:%{minutes} %{amPm} - %{day} %{month} %{year}" data-dt-months="Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec" data-dt-am="AM" data-dt-pm="PM" data-dt-now="now" data-dt-s="s" data-dt-m="m" data-dt-h="h" data-dt-second="second" data-dt-seconds="seconds" data-dt-minute="minute" data-dt-minutes="minutes" data-dt-hour="hour" data-dt-hours="hours" data-dt-abbr="%{number}%{symbol}" data-dt-short="%{day} %{month}" data-dt-long="%{day} %{month} %{year}" data-scribe="page:tweet" id="twitter-widget-0" lang="en" data-twitter-event-id="0">

		<div class="EmbeddedTweet-tweet">
<blockquote class="Tweet h-entry js-tweetIdInfo subject expanded
									 is-deciderHtmlWhitespace" cite="https://twitter.com/kevinmarks/status/700752598123433985" data-tweet-id="700752598123433985" data-scribe="section:subject">
	<div class="Tweet-header u-cf">
		<div class="Tweet-brand u-floatRight">
			<span class="u-hiddenInNarrowEnv">
<a class="FollowButton follow-button profile" data-scribe="component:followbutton" href="https://twitter.com/kevinmarks" role="button" title="Follow Kevin Marks on Twitter"><span class="FollowButton-bird"><div class="Icon Icon--twitter " aria-label="" title="" role="presentation"></div></span> Follow</a>
</span>
			<span class="u-hiddenInWideEnv"><a href="https://twitter.com/download" data-scribe="element:logo"><div class="Icon Icon--twitter " aria-label="Get Twitter app" title="Get Twitter app" role="img"></div></a></span>
		</div>

<div class="TweetAuthor" data-scribe="component:author">
	<a class="TweetAuthor-link Identity u-linkBlend" data-scribe="element:user_link" href="https://twitter.com/kevinmarks" aria-label="Kevin Marks (screen name: kevinmarks)">
		<span class="TweetAuthor-avatar Identity-avatar">
			<img class="Avatar" data-scribe="element:avatar" data-src-2x="https://pbs.twimg.com/profile_images/553009683087114240/tU5HkXEI_bigger.jpeg" alt="" data-src-1x="https://pbs.twimg.com/profile_images/553009683087114240/tU5HkXEI_normal.jpeg" src="https://pbs.twimg.com/profile_images/553009683087114240/tU5HkXEI_normal.jpeg">
		</span>
		<span class="TweetAuthor-name Identity-name customisable-highlight" title="Kevin Marks" data-scribe="element:name">Kevin Marks</span>

		<span class="TweetAuthor-screenName Identity-screenName" title="@kevinmarks" data-scribe="element:screen_name">@kevinmarks</span>
	</a>
</div>

	</div>

	<div class="Tweet-body e-entry-content" data-scribe="component:tweet">
		<p class="Tweet-text e-entry-title" lang="en" dir="ltr">I wish people would stop using u- as a prefix for utility classes in CSS. Use util- instead. You're messing with my microformats.</p>


		<div class="Tweet-metadata dateline">


<a class="u-linkBlend u-url customisable-highlight long-permalink" data-datetime="2016-02-19T18:43:33+0000" data-scribe="element:full_timestamp" href="https://twitter.com/kevinmarks/status/700752598123433985">
<time class="dt-updated" datetime="2016-02-19T18:43:33+0000" pubdate="" title="Time posted: 19 Feb 2016, 18:43:33 (UTC)">10:43 AM - 19 Feb 2016</time></a>
		</div>


		<ul class="Tweet-actions" data-scribe="component:actions" role="menu" aria-label="Tweet actions">
			<li class="Tweet-action">
<a class="TweetAction TweetAction--reply web-intent" href="https://twitter.com/intent/tweet?in_reply_to=700752598123433985" data-scribe="element:reply"><div class="Icon Icon--reply TweetAction-icon" aria-label="Reply" title="Reply" role="img"></div></a></li>
			<li class="Tweet-action">
<a class="TweetAction TweetAction--retweet web-intent" href="https://twitter.com/intent/retweet?tweet_id=700752598123433985" data-scribe="element:retweet"><div class="Icon Icon--retweet TweetAction-icon" aria-label="Retweet" title="Retweet" role="img"></div>    <span class="TweetAction-stat" data-scribe="element:retweet_count" aria-hidden="true">1</span>
		<span class="u-hiddenVisually">1 Retweet</span>
</a></li>
			<li class="Tweet-action">
<a class="TweetAction TweetAction--heart web-intent" href="https://twitter.com/intent/like?tweet_id=700752598123433985" data-scribe="element:heart"><div class="Icon Icon--heart TweetAction-icon" aria-label="Like" title="Like" role="img"></div>    <span class="TweetAction-stat" data-scribe="element:heart_count" aria-hidden="true">4</span>
		<span class="u-hiddenVisually">4 likes</span>
</a></li>
		</ul>
	</div>
</blockquote>
</div>
	</div>
EOT;

		$output = Mf2\parse($input);

		$this->assertArrayNotHasKey('linkBlend', $output['items'][0]['properties']);
		$this->assertArrayNotHasKey('hiddenInNarrowEnv', $output['items'][0]['properties']);
		$this->assertArrayNotHasKey('floatRight', $output['items'][0]['properties']);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/127
	 */
	public function testCamelCaseRootClassNames() {
		$input = '<div class="h-Entry"> <a href="https://example.com" class="u-url">content</a> </div>';
		$output = Mf2\parse($input);

		$this->assertEmpty($output['items']);
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/127
	 */
	public function testMisTypedRootClassNames() {
		$input = '<div class="h-entry>"> <a href="https://example.com" class="u-url">content</a></div>
		<div class="h-entry1>"> <a href="https://example.com" class="u-url">content</a></div>
		<div class="h-👍"> <a href="https://example.com" class="u-url">content</a></div>
		<div class="h-hentry_"> <a href="https://example.com" class="u-url">content</a></div>
		<div class="h-"> <a href="https://example.com" class="u-url">content</a></div>';
		$output = Mf2\parse($input);

		$this->assertEmpty($output['items']);
	}

	public function testClassNameNumbers() {
		$input = '<div class="h-entry"> <div class="u-column1"> <p class="p-title">Test</p> </div> </div>';
		$output = Mf2\parse($input);

		$this->assertArrayNotHasKey('column1', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/6#issuecomment-366473390
	 */
	public function testNoImpliedNameWhenE()
	{
		$input = '<article class="h-entry">
	<div class="e-content">
		<p>Wanted content.</p>
	</div>
	<footer>
		<p>Footer to be ignored.</p>
	</footer>
</article>';
		$output = Mf2\parse($input);

		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/6#issuecomment-366473390
	 */
	public function testNoImpliedNameWhenP()
	{
		$input = '<article class="h-entry">
	<div class="p-content">
		<p>Wanted content.</p>
	</div>
	<footer>
		<p>Footer to be ignored.</p>
	</footer>
</article>';
		$output = Mf2\parse($input);

		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/6#issuecomment-366473390
	 */
	public function testNoImpliedNameWhenNestedMicroformat()
	{
		$input = '<article class="h-entry">
	<div class="u-like-of h-cite">
		<p>I really like <a class="p-name u-url" href="http://microformats.org/">Microformats</a></p>
	</div>
	<footer>
		<p>Footer to be ignored.</p>
	</footer>
</article>';
		$output = Mf2\parse($input);

		$this->assertArrayNotHasKey('name', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/143
	 */
	public function testChildObjects() {
		$input = <<<END
<html>
	<head>
		<title>Test</title>
	</head>
	<body>

		<div class="h-feed">
			<a href="/author" class="p-author h-card">Author Name</a>

			<ul>
				<li class="h-entry">
					<a href="/1" class="u-url p-name">One</a>
				</li>
				<li class="h-entry">
					<a href="/2" class="u-url p-name">Two</a>
				</li>
				<li class="h-entry">
					<a href="/3" class="u-url p-name">Three</a>
				</li>
				<li class="h-entry">
					<a href="/4" class="u-url p-name">Four</a>
				</li>
			</ul>
		</div>

	</body>
</html>
END;
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('author', $output['items'][0]['properties']);
		$this->assertEquals('Author Name', $output['items'][0]['properties']['author'][0]['properties']['name'][0]);
		$this->assertCount(4, $output['items'][0]['children']);
		$this->assertEquals('One', $output['items'][0]['children'][0]['properties']['name'][0]);
		$this->assertEquals('Two', $output['items'][0]['children'][1]['properties']['name'][0]);
		$this->assertEquals('Three', $output['items'][0]['children'][2]['properties']['name'][0]);
		$this->assertEquals('Four', $output['items'][0]['children'][3]['properties']['name'][0]);
	}


	public function testMultiLevelRecursion() {
		$input = <<<END
<html>
	<head>
		<title>Test</title>
	</head>
	<body>

		<div class="h-feed">
			<a href="/author" class="p-author h-card">Author Name</a>

			<ul>
				<li class="h-entry">
					<a href="/1" class="u-url p-name">One</a>
				</li>
				<li class="h-entry">
					<a href="/2" class="u-url p-name">Two</a>
					<ul>
						<li class="p-comment h-entry"><a href="/a" class="u-url p-name">Comment A</a></li>
						<li class="p-comment h-entry"><a href="/b" class="u-url p-name">Comment B</a></li>
					</ul>
				</li>
				<li class="h-entry">
					<a href="/3" class="u-url p-name">Three</a>
					<ul>
						<li class="h-entry"><a href="/c" class="u-url p-name">Comment C</a></li>
						<li class="h-entry"><a href="/d" class="u-url p-name">Comment D</a></li>
					</ul>
				</li>
				<li class="h-entry">
					<a href="/4" class="u-url p-name">Four</a>
				</li>
			</ul>
		</div>

	</body>
</html>
END;
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('author', $output['items'][0]['properties']);
		$this->assertEquals('Author Name', $output['items'][0]['properties']['author'][0]['properties']['name'][0]);
		$this->assertCount(4, $output['items'][0]['children']);
		$this->assertEquals('One', $output['items'][0]['children'][0]['properties']['name'][0]);
		$this->assertEquals('Two', $output['items'][0]['children'][1]['properties']['name'][0]);
		$this->assertEquals('Comment A', $output['items'][0]['children'][1]['properties']['comment'][0]['properties']['name'][0]);
		$this->assertEquals('Comment B', $output['items'][0]['children'][1]['properties']['comment'][1]['properties']['name'][0]);
		$three = $output['items'][0]['children'][2];
		$this->assertEquals('Three', $three['properties']['name'][0]);
		$this->assertEquals('Comment C', $three['children'][0]['properties']['name'][0]);
		$this->assertEquals('Comment D', $three['children'][1]['properties']['name'][0]);
		$this->assertEquals('Four', $output['items'][0]['children'][3]['properties']['name'][0]);
	}

	public function testNoErrantWhitespaceOnEHtml()
	{
		$input = '<div class="h-entry"><div class="e-content"><p>1</p><p>2</p></div></div>';
		$output = Mf2\parse($input);
		$this->assertEquals('<p>1</p><p>2</p>', $output['items'][0]['properties']['content'][0]['html']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/158
	 */
	public function testPrefixWithNumbers() {
		$input = '<li class="h-entry">
	<data class="p-name" value="Coffee"></data>
	<div class="p-p3k-drank h-p3k-food">
		<span class="value">Coffee</span>
	</div>
</li>';
		$output = Mf2\parse($input);

		$this->assertArrayHasKey('p3k-drank', $output['items'][0]['properties']);
		$this->assertCount(1, $output['items'][0]['properties']['p3k-drank']);
		$this->assertEquals('h-p3k-food', $output['items'][0]['properties']['p3k-drank'][0]['type'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/160
	 */
	public function testConsecutiveDashes() {
		$input = '<div class="h-entry h-----">
<p> <a href="http://example.com/post" class="u-in-reply--to">http://example.com/post posted:</a> </p>
<span class="p-name">Too many dashes</span>
<span class="p--acme-leading">leading dash</span>
<span class="p-acme--middle">middle dash</span>
<span class="p-acme-trailing-">trailing dash</span>
</div>';
		$output = Mf2\parse($input);

		$this->assertCount(1, $output['items'][0]['type']);
		$this->assertEquals('h-entry', $output['items'][0]['type'][0]);
		$this->assertCount(1, $output['items'][0]['properties']);
		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
	}

	/**
	 * Additional test from mf2py. Covers consecutive dashes, numbers in vendor prefix, and capital letters.
	 * Added markup for numbers-only prefix and capital letter in prefix
	 * @see https://github.com/kartikprabhu/mf2py/blob/experimental/test/examples/class_names_format.html
	 * @see https://github.com/indieweb/php-mf2/issues/160
	 * @see https://github.com/indieweb/php-mf2/issues/158
	 */
	public function testMfClassRegex() {
		$input = '<article class="h-x-test h-p3k-entry h-feed h-Entry h-p3k-fEed h--d h-test-">
		<a class="u-url u-Url u-p3k-url u--url u-url- u-123-url u-123A-url" href="example.com" >URL </a>
		<span class="p-name p-nAme p-p3k-name p--name p-name-" >name</span>
</article>';
		$output = Mf2\parse($input);

		$this->assertCount(3, $output['items'][0]['type']);
		$this->assertContains('h-feed', $output['items'][0]['type']);
		$this->assertContains('h-p3k-entry', $output['items'][0]['type']);
		$this->assertContains('h-x-test', $output['items'][0]['type']);
		$this->assertCount(5, $output['items'][0]['properties']);
		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertArrayHasKey('p3k-url', $output['items'][0]['properties']);
		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertArrayHasKey('p3k-name', $output['items'][0]['properties']);
		$this->assertArrayHasKey('123-url', $output['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/microformats/microformats2-parsing/issues/30
	 */
	public function testUniqueAndAlphabeticalMfClasses() {
		$input = '<div class="h-entry h-cite h-entry"></div>';
		$output = Mf2\parse($input);

		$this->assertEquals(array('h-cite', 'h-entry'), $output['items'][0]['type']);
	}

	/**
	 * The default DOMDocument parser will trip here because it does not know HTML5 elements.
	 * @see https://html.spec.whatwg.org/#optional-tags:the-p-element
	 **/
	public function testHtml5OptionalPEndTag() {
		if (!class_exists('Masterminds\\HTML5')) {
			$this->markTestSkipped('masterminds/html5 is required for this test.');
		}
		$input = '<div class="h-entry"><p class="p-name">Name<article>Not Name</article></div>';
		$output = Mf2\parse($input);

		$this->assertEquals('Name', $output['items'][0]['properties']['name'][0]);
	}

	/**
	 * Make sure the parser does not mutate any DOMDocument instances passed to the constructor.
	 * @see https://github.com/indieweb/php-mf2/issues/174
	 * @see https://github.com/microformats/mf2py/issues/104
	 */
	public function testNotMutatingPassedInDOM() {
		$input = file_get_contents(__DIR__ . '/snarfed.org.html');

		// Use same parsing as Parser::__construct(), twice to have a comparison object.
		libxml_use_internal_errors(true);
		$refDoc = new \DOMDocument();
		@$refDoc->loadHTML(Mf2\unicodeToHtmlEntities($input), \LIBXML_NOWARNING);
		$inputDoc = new \DOMDocument();
		@$inputDoc->loadHTML(Mf2\unicodeToHtmlEntities($input), \LIBXML_NOWARNING);

		// For completion sake, test PHP itself.
		$this->assertEquals($refDoc, $inputDoc, 'PHP could not create identical DOMDocument instances.');

		// Parse one DOMDocument instance, and test if it is still the same as the other.
		Mf2\parse($inputDoc, 'http://snarfed.org/2013-10-23_oauth-dropins');
		$this->assertEquals($refDoc, $inputDoc, 'Parsing mutated the DOMDocument.');
	}

	public function testNoImpliedURLForEmptyProperties() {
		// In the 0.4.5 release, this caused an error
		// https://github.com/microformats/php-mf2/issues/196

		$input = <<<EOD
<div class="h-entry">
  <li class="h-cite u-comment">
    <div class="vcard"></div>
  </li>
</div>
EOD;

		$output = Mf2\parse($input);
		$this->assertInternalType('array', $output['items'][0]['properties']['comment'][0]['properties']);
		$this->assertInternalType('array', $output['items'][0]['properties']['comment'][0]['children'][0]['properties']);
		$this->assertEmpty($output['items'][0]['properties']['comment'][0]['properties']);
		$this->assertEmpty($output['items'][0]['properties']['comment'][0]['children'][0]['properties']);
  }

  /**
	 * Make sure day of year passed to normalizeOrdinalDate() is valid
	 * @see https://github.com/indieweb/php-mf2/issues/167
	 */
	public function testInvalidOrdinalDate() {
		# 365 days in non-leap years
		$this->assertEquals('2018-12-31', Mf2\normalizeOrdinalDate('2018-365'));
		$this->assertEquals('', Mf2\normalizeOrdinalDate('2018-366'));
		# 366 days in leap years
		$this->assertEquals('2016-12-31', Mf2\normalizeOrdinalDate('2016-366'));
		$this->assertEquals('', Mf2\normalizeOrdinalDate('2016-367'));
	}
}

