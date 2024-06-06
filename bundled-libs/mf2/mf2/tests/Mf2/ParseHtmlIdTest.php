<?php
/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2;
use Mf2\Parser;
use PHPUnit_Framework_TestCase;

/**
 * 
 */
class ParseHtmlIdTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	/** as per https://github.com/microformats/microformats2-parsing/issues/44 */
	public function testParserIdAttribute() {
		$test = '<div class="h-feed" id="recentArticles"><h2 class="p-name">Recent Articles</h2><div class="hentry" id="article">Lorem Ipsum</div>
		<div class="p-author h-card" id="theAuthor">Max Mustermann</div>
		<div class="h-entry" id="">empty id should not be parsed</div>
		<div class="h-entry" id="0">id=0 should work and not be treated false-y</div>
		</div>';
		$result = Mf2\parse($test);
		$this->assertArrayHasKey('id', $result['items'][0]);
		$this->assertEquals('recentArticles', $result['items'][0]['id']);
		$this->assertArrayHasKey('id', $result['items'][0]['children'][0]);
		$this->assertEquals('article', $result['items'][0]['children'][0]['id']);
		$this->assertArrayHasKey('id', $result['items'][0]['properties']['author'][0]);
		$this->assertEquals('theAuthor', $result['items'][0]['properties']['author'][0]['id']);
		$this->assertArrayNotHasKey('id', $result['items'][0]['children'][1]);
		$this->assertArrayHasKey('id', $result['items'][0]['children'][2]);
		$this->assertEquals('0', $result['items'][0]['children'][2]['id']);
	}
}

