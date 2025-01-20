<?php
/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2;
use Mf2\Parser;
use PHPUnit_Framework_TestCase;

/**
 * @todo some of these can be made into single tests with dataProviders
 */
class ParseImpliedTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		date_default_timezone_set('Europe/London');
	}


	public function testParsesImpliedPNameFromNodeValue() {
		$input = '<span class="h-card">The Name</span>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('The Name', $output['items'][0]['properties']['name'][0]);
	}

	public function testParsesImpliedPNameFromImgAlt() {
		$input = '<img class="h-card" src="" alt="The Name" />';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('The Name', $output['items'][0]['properties']['name'][0]);
	}

	public function testParsesImpliedPNameFromNestedImgAlt() {
		$input = '<div class="h-card"><img src="" alt="The Name" /></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('The Name', $output['items'][0]['properties']['name'][0]);
	}

	public function testParsesImpliedPNameFromDoublyNestedImgAlt() {
		$input = '<div class="h-card"><span><img src="" alt="The Name" /></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('name', $output['items'][0]['properties']);
		$this->assertEquals('The Name', $output['items'][0]['properties']['name'][0]);
	}

	public function testParsesImpliedUPhotoFromImgSrcWithoutAlt() {
		$input = '<img class="h-card" src="http://example.com/img.png" />';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/img.png', $output['items'][0]['properties']['photo'][0]);
	}

	public function testParsesImpliedUPhotoFromImgSrcWithEmptyAlt() {
		$input = '<img class="h-card" src="http://example.com/img.png" alt="" />';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/img.png', $output['items'][0]['properties']['photo'][0]['value']);
		$this->assertEquals('', $output['items'][0]['properties']['photo'][0]['alt']);
	}

	public function testParsesImpliedUPhotoFromImgSrcWithAlt() {
		$input = '<img class="h-card" src="http://example.com/img.png" alt="Example" />';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/img.png', $output['items'][0]['properties']['photo'][0]['value']);
		$this->assertEquals('Example', $output['items'][0]['properties']['photo'][0]['alt']);
	}

	public function testParsesImpliedUPhotoFromNestedImgSrc() {
		$input = '<div class="h-card"><img src="http://example.com/img.png" alt="" /></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$return = [
			'value' => 'http://example.com/img.png',
			'alt'=> ''
			];
		$this->assertEquals( $return, $output['items'][0]['properties']['photo'][0]);
	}

	public function testParsesImpliedUPhotoFromDoublyNestedImgSrc() {
		$input = '<div class="h-card"><span><img src="http://example.com/img.png" alt="" /></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('photo', $output['items'][0]['properties']);
		$result = [
			'alt' => '',
			'value' => 'http://example.com/img.png'
			];
		$this->assertEquals($result, $output['items'][0]['properties']['photo'][0]);
	}

	/*
	 * see testImpliedPhotoFromNestedObject() and testImpliedPhotoFromNestedObject()
	public function testIgnoresImgIfNotOnlyChild() {
		$input = '<div class="h-card"><img src="http://example.com/img.png" /> <p>Moar text</p></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayNotHasKey('photo', $output['items'][0]['properties']);
	}

	public function testIgnoresDoublyNestedImgIfNotOnlyDoublyNestedChild() {
		$input = '<div class="h-card"><span><img src="http://example.com/img.png" /> <p>Moar text</p></span></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayNotHasKey('photo', $output['items'][0]['properties']);
	}
	*/

	public function testParsesImpliedUUrlFromAHref() {
		$input = '<a class="h-card" href="http://example.com/">Some Name</a>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);
	}


	public function testParsesImpliedUUrlFromNestedAHref() {
		$input = '<span class="h-card"><a href="http://example.com/">Some Name</a></span>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('url', $output['items'][0]['properties']);
		$this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);
	}

  public function testParsesImpliedUUrlWithExplicitName() {
    $input = '<span class="h-card"><a href="http://example.com/" class="p-name">Some Name</a></span>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('url', $output['items'][0]['properties']);
    $this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);
  }

  public function testParsesImpliedNameWithExplicitURL() {
    $input = '<span class="h-card"><a href="http://example.com/" class="u-url">Some Name</a></span>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('url', $output['items'][0]['properties']);
    $this->assertEquals('http://example.com/', $output['items'][0]['properties']['url'][0]);
    $this->assertEquals('Some Name', $output['items'][0]['properties']['name'][0]);
  }

	public function testMultipleImpliedHCards() {
		$input = '<span class="h-card">Frances Berriman</span>

<a class="h-card" href="http://benward.me">Ben Ward</a>

<img class="h-card" alt="Sally Ride"
	 src="http://upload.wikimedia.org/wikipedia/commons/a/a4/Ride-s.jpg"/>

<a class="h-card" href="http://tantek.com">
 <img alt="Tantek Çelik" src="http://ttk.me/logo.jpg"/>
</a>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
	"items": [{
		"type": ["h-card"],
		"properties": {
			"name": ["Frances Berriman"]
		}
	},
	{
		"type": ["h-card"],
		"properties": {
			"name": ["Ben Ward"],
			"url": ["http://benward.me"]
		}
	},
	{
		"type": ["h-card"],
		"properties": {
			"name": ["Sally Ride"],
			"photo": [{
				"value": "http://upload.wikimedia.org/wikipedia/commons/a/a4/Ride-s.jpg",
				"alt": "Sally Ride"
			}]
		}
	},
	{
		"type": ["h-card"],
		"properties": {
			"name": ["Tantek Çelik"],
			"url": ["http://tantek.com"],
			"photo": [{
				"value": "http://ttk.me/logo.jpg",
				"alt": "Tantek Çelik"
			}]
		}
	}]
}';

		$parser = new Parser($input, '', true);
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/** as per https://github.com/indieweb/php-mf2/issues/37 */
	public function testParsesImpliedNameConsistentWithPName() {
		$inner = "Name	\nand more";
		$test = '<span class="h-card"> ' . $inner .' </span><span class="h-card"><span class="p-name"> ' . $inner . ' </span></span>';
		$result = Mf2\parse($test);
		$this->assertEquals('Name and more', $result['items'][0]['properties']['name'][0]);
		$this->assertEquals('Name and more', $result['items'][1]['properties']['name'][0]);
	}


	/** @see https://github.com/indieweb/php-mf2/issues/6 */
	public function testParsesImpliedNameFromAbbrTitle() {
		$input = '<abbr class="h-card" title="Barnaby Walters">BJW</abbr>';
		$result = Mf2\parse($input);
		$this->assertEquals('Barnaby Walters', $result['items'][0]['properties']['name'][0]);
	}

	public function testImpliedPhotoFromObject() {
		$input = '<object class="h-card" data="http://example/photo1.jpg">John Doe</object>';
		$result = Mf2\parse($input);

		$this->assertArrayHasKey('photo', $result['items'][0]['properties']);
		$this->assertEquals('http://example/photo1.jpg', $result['items'][0]['properties']['photo'][0]);
	}

	/**
	 * Correcting previous test testIgnoresImgIfNotOnlyChild()
	 * This *should* return the photo since h-x>img[src]:only-of-type:not[.h-*]
	 * @see https://indiewebcamp.com/User:Tantek.com
	 */
	public function testImpliedPhotoFromNestedImg() {
		$input = '<span class="h-card"><a href="http://tantek.com/" class="external text" style="border: 0px none;"><img src="https://pbs.twimg.com/profile_images/423350922408767488/nlA_m2WH.jpeg" style="width:128px;float:right;margin-left:1em"><b><span style="font-size:2em">Tantek Çelik</span></b></a></span>';
		$result = Mf2\parse($input);

		$this->assertArrayHasKey('photo', $result['items'][0]['properties']);
		$this->assertEquals('https://pbs.twimg.com/profile_images/423350922408767488/nlA_m2WH.jpeg', $result['items'][0]['properties']['photo'][0]);
	}

	public function testIgnoredPhotoIfMultipleImg() {
		$input = '<div class="h-card"><img src="http://example/photo2.jpg" /> <img src="http://example/photo3.jpg" /> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * Correcting previous test testIgnoresDoublyNestedImgIfNotOnlyDoublyNestedChild()
	 * This *should* return the photo since .h-x>object[data]:only-of-type:not[.h-*]
	 */
	public function testImpliedPhotoFromNestedObject() {
		$input = '<div class="h-card"><object data="http://example/photo3.jpg">John Doe</object> <p>Moar text</p></div>';
		$result = Mf2\parse($input);

		$this->assertArrayHasKey('photo', $result['items'][0]['properties']);
		$this->assertEquals('http://example/photo3.jpg', $result['items'][0]['properties']['photo'][0]);
	}

	public function testIgnoredPhotoIfMultipleObject() {
		$input = '<div class="h-card"><object data="http://example/photo3.jpg">John Doe</object> <object data="http://example/photo4.jpg"></object> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	public function testIgnoredPhotoIfNestedImgH() {
		$input = '<div class="h-entry"> <img src="http://example/photo2.jpg" class="h-card" /> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	public function testIgnoredPhotoIfNestedImgHasHClass() {
		$input = '<div class="h-entry"> <img src="http://example/photo2.jpg" alt="John Doe" class="h-card" /> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	public function testIgnoredPhotoIfNestedObjectHasHClass() {
		$input = '<div class="h-entry"> <object data="http://example/photo3.jpg" class="h-card">John Doe</object> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/176
	 */
	public function testIgnoredPhotoImgInNestedH() {
		$input = '<div class="h-entry"> <div class="u-comment h-cite"> <img src="/image.jpg"> </div> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/176
	 */
	public function testIgnoredPhotoObjectInNestedH() {
		$input = '<div class="h-entry"> <div class="u-comment h-cite"> <object data="/image2.jpg">John Doe</object> </div> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/190
	 */
	public function testIgnoredMultiChildrenWithNestedPhotoImg() {
		$input = '<div class="h-card"> <a href="https://example.com"><img src="https://example.com/photo.jpg"></a> <span class="p-name"><a href="/User:Example.com">Max Mustermann</a></span> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/190
	 */
	public function testIgnoredMultiChildrenWithNestedPhotoObject() {
		$input = '<div class="h-card"> <a href="https://example.com"><object data="https://example.com/photo.jpg"></object></a> <span class="p-name"><a href="/User:Example.com">Max Mustermann</a></span> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * Imply properties only on explicit h-x class name root microformat element (no backcompat roots)
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_for_implied_properties
	 */
	public function testBackcompatNoImpliedName() {
		$input = '<div class="hentry"> <div class="entry-content"> <p> blah blah blah </p> </div> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('name', $result['items'][0]['properties']);
		$this->assertArrayHasKey('content', $result['items'][0]['properties']);
	}


	/**
	 * Imply properties only on explicit h-x class name root microformat element (no backcompat roots)
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_for_implied_properties
	 */
	public function testBackcompatNoImpliedPhoto() {
		$input = '<div class="hentry"> <img src="https://example.com/photo.jpg" alt="photo" /> </div>';
		$result = Mf2\parse($input);

		$this->assertEmpty($result['items'][0]['properties']);
	}


	/**
	 * Imply properties only on explicit h-x class name root microformat element (no backcompat roots)
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_for_implied_properties
	 */
	public function testBackcompatNoImpliedUrl() {
		$input = '<div class="hentry"> <a href="https://example.com/this-post" class="entry-title">Title</a> <div class="entry-content"> <p> blah blah blah </p> </div> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('url', $result['items'][0]['properties']);
		$this->assertArrayHasKey('name', $result['items'][0]['properties']);
		$this->assertArrayHasKey('content', $result['items'][0]['properties']);
	}


	/**
	 * Don't imply u-url if there are other u-*
	 * @see http://microformats.org/wiki/microformats2-parsing#parsing_for_implied_properties
	 * @see https://github.com/microformats/php-mf2/issues/183
	 */
	public function testNoImpliedUrl() {
		$input = '<div class="h-entry"> <h1 class="p-name"><a href="https://example.com/this-post">Title</a></h1> <div class="e-content"> <p> blah blah blah </p> </div> <a href="https://example.org/syndicate" class="u-syndication"></a> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('url', $result['items'][0]['properties']);
	}

	/**
	 * Do not use img src in implied p-name
	 * @see https://github.com/microformats/php-mf2/issues/180
	 */
	public function testNoImgSrcImpliedName() {
		$input = '<p class="h-card">My Name <img src="http://xyz" /></p>';
		$result = Mf2\parse($input);

		$this->assertArrayHasKey('name', $result['items'][0]['properties']);
		$this->assertEquals('My Name', $result['items'][0]['properties']['name'][0]);
	}

	/**
	 * @see https://github.com/microformats/php-mf2/issues/198
	 */
	public function testNoImpliedPhotoWhenExplicitUProperty() {
		$input = '<div class="h-card"> <span class="p-org">Organization Name</span> <img src="/logo.png" class="u-logo" alt=""> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
	}

	/**
	 * @see https://github.com/microformats/php-mf2/issues/198
	 */
	public function testNoImpliedPhotoWhenNestedMicroformat() {
		$input = '<div class="h-entry"> <img src="/photo.jpg" alt=""> <div class="p-author h-card"> <span class="p-name">Alice</span> <span class="p-org">Organization Name</span> <img src="/logo.png" class="u-logo" alt=""> </div> </div>';
		$result = Mf2\parse($input);

		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']);
		$this->assertArrayHasKey('author', $result['items'][0]['properties']);
		$this->assertArrayNotHasKey('photo', $result['items'][0]['properties']['author'][0]['properties']);
	}
}

