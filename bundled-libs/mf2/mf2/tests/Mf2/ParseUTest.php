<?php
/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2;
use Mf2\Parser;
use PHPUnit_Framework_TestCase;

class ParseUTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesA() {
		$input = '<div class="h-card"><a class="u-url" href="http://example.com">Awesome example website</a></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com', $output['items'][0]['properties']['url'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesEmptyHrefAttribute() {
		$input = '<div class="h-card"><a class="u-url" href="">Awesome example website</a></div>';
		$parser = new Parser($input, "http://example.com/");
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesMissingHrefAttribute() {
		$input = '<div class="h-card"><a class="u-url">Awesome example website</a></div>';
		$parser = new Parser($input, "http://example.com/");
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/Awesome example website', $output['items'][0]['properties']['url'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesImg() {
		$input = '<div class="h-card"><img class="u-photo" src="http://example.com/someimage.png"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesImgwithAlt() {
		$input = '<div class="h-card"><img class="u-photo" src="http://example.com/someimage.png" alt="Test Alt"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$result = array(
			'value' => 'http://example.com/someimage.png',
			'alt' => 'Test Alt'
		);
		$this->assertEquals( $result, $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesImgwithoutAlt() {
		$input = '<div class="h-card"><img class="u-photo" src="http://example.com/someimage.png"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals( 'http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesArea() {
		$input = '<div class="h-card"><area class="u-photo" href="http://example.com/someimage.png"></area></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesObject() {
		$input = '<div class="h-card"><object class="u-photo" data="http://example.com/someimage.png"></object></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesAbbr() {
		$input = '<div class="h-card"><abbr class="u-photo" title="http://example.com/someimage.png"></abbr></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesAbbrNoTitle() {
		$input = '<div class="h-card"><abbr class="u-photo">no title attribute</abbr></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('no title attribute', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesData() {
		$input = '<div class="h-card"><data class="u-photo" value="http://example.com/someimage.png"></data></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/someimage.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group baseUrl
	 */
	public function testResolvesRelativeUrlsFromDocumentUrl() {
		$input = '<div class="h-card"><img class="u-photo" src="../image.png" /></div>';
		$parser = new Parser($input, 'http://example.com/things/more/more.html');
		$output = $parser->parse();

		$this->assertEquals('http://example.com/things/image.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group baseUrl
	 */
	public function testResolvesRelativeUrlsFromBaseUrl() {
		$input = '<head><base href="http://example.com/things/more/andmore/" /></head><body><div class="h-card"><img class="u-photo" src="../image.png" /></div></body>';
		$parser = new Parser($input, 'http://example.com/things/more.html');
		$output = $parser->parse();

		$this->assertEquals('http://example.com/things/more/image.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group baseUrl
	 */
	public function testResolvesRelativeUrlsInImpliedMicroformats() {
		$input = '<a class="h-card"><img src="image.png" /></a>';
		$parser = new Parser($input, 'http://example.com/things/more.html');
		$output = $parser->parse();

		$this->assertEquals('http://example.com/things/image.png', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group baseUrl
	 */
	public function testResolvesRelativeBaseRelativeUrlsInImpliedMicroformats() {
		$input = '<base href="things/"/><a class="h-card"><img src="image.png" /></a>';
		$parser = new Parser($input, 'http://example.com/');
		$output = $parser->parse();

		$this->assertEquals('http://example.com/things/image.png', $output['items'][0]['properties']['photo'][0]);
	}

	/** @see https://github.com/indieweb/php-mf2/issues/33 */
	public function testParsesHrefBeforeValueClass() {
		$input = '<span class="h-card"><a class="u-url" href="http://example.com/right"><span class="value">WRONG</span></a></span>';
		$result = Mf2\parse($input);
		$this->assertEquals('http://example.com/right', $result['items'][0]['properties']['url'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesAudio() {
		$input = '<div class="h-entry"><audio class="u-audio" src="http://example.com/audio.mp3"></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('audio', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/audio.mp3', $output['items'][0]['properties']['audio'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesVideo() {
		$input = '<div class="h-entry"><video class="u-video" src="http://example.com/video.mp4"></video></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('video', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/video.mp4', $output['items'][0]['properties']['video'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesVideoNoSrc() {
		$input = '<div class="h-entry"><video class="u-video">no video support</video></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('video', $output['items'][0]['properties']);
		$this->assertEquals('no video support', $output['items'][0]['properties']['video'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesSource() {
		$input = '<div class="h-entry"><video><source class="u-video" src="http://example.com/video.mp4" type="video/mp4"><source class="u-video" src="http://example.com/video.ogg" type="video/ogg"></video></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('video', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/video.mp4', $output['items'][0]['properties']['video'][0]);
		$this->assertEquals('http://example.com/video.ogg', $output['items'][0]['properties']['video'][1]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUHandlesVideoPoster() {
		$input = '<div class="h-entry"><video class="u-photo" poster="http://example.com/posterimage.jpg"><source class="u-video" src="http://example.com/video.mp4" type="video/mp4"></video></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('video', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/video.mp4', $output['items'][0]['properties']['video'][0]);
		$this->assertEquals('http://example.com/posterimage.jpg', $output['items'][0]['properties']['photo'][0]);
	}

	/**
	 * @group parseU
	 */
	public function testParseUWithSpaces() {
		$input = '<div class="h-card"><a class="u-url" href=" http://example.com ">Awesome example website</a></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com', $output['items'][0]['properties']['url'][0]);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/130
	 */
	public function testImpliedUWithEmptyHref() {
		$input = '<a class="h-card" href="">Jane Doe</a>
<area class="h-card" href="" alt="Jane Doe"/ >
<div class="h-card" ><a href="">Jane Doe</a><p></p></div>
<div class="h-card" ><area href="">Jane Doe</area><p></p></div>
<div class="h-card" ><a class="h-card" href="">Jane Doe</a><p></p></div>';
		$parser = new Parser($input, 'http://example.com');
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);

		$this->assertArrayHasKey('url', $output['items'][1]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][1]['properties']['url'][0]);

		$this->assertArrayHasKey('url', $output['items'][2]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][2]['properties']['url'][0]);

		$this->assertArrayHasKey('url', $output['items'][3]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][3]['properties']['url'][0]);

		$this->assertArrayHasKey('url', $output['items'][4]['children'][0]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][4]['children'][0]['properties']['url'][0]);
	}

	public function testValueFromLinkTag() {
		$input = <<< END
<!doctype html>
<html class="h-entry">
	<head>
		<link rel="canonical" class="u-url p-name" href="https://example.com/" title="Example.com homepage">
	</head>
	<body></body>
</html>
END;

		$parser = new Parser($input, 'https://example.com');
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('https://example.com/', $output['items'][0]['properties']['url'][0]);

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('Example.com homepage', $output['items'][0]['properties']['name'][0]);
	}

	public function testResolveFromDataElement() {
		$parser = new Parser('<div class="h-test"><data class="u-url" value="relative.html"></data></div>', 'https://example.com/index.html');
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('https://example.com/relative.html', $output['items'][0]['properties']['url'][0]);
	}

	/**
	 * @see https://github.com/microformats/php-mf2/issues/182
	 */
	public function testResolveFromIframeElement() {
		$input = '<div class="h-entry">
<h1 class="p-name">Title</h1>
<iframe src="https://example.com/index.html" class="u-url">
  <p>Your browser does not support iframes.</p>
</iframe>
</div>';
		$parser = new Parser($input, 'https://example.com');
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('https://example.com/index.html', $output['items'][0]['properties']['url'][0]);
	}
}
