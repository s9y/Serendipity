<?php

namespace Mf2\Parser\Test;

use Mf2\Parser;
use Mf2;
use PHPUnit_Framework_TestCase;

/**
 * Combined Microformats Test
 *
 * Tests the ability of Parser::parse() to handle nested microformats correctly.
 * More info at http://microformats.org/wiki/microformats-2#combining_microformats
 *
 * @todo implement
 */
class CombinedMicroformatsTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		date_default_timezone_set('Europe/London');
	}

	/**
	 * From http://microformats.org/wiki/microformats2#combining_microformats
	 */
	public function testHEventLocationHCard() {
		$input = '<div class="h-event">
	<a class="p-name u-url" href="http://indiewebcamp.com/2012">
	IndieWebCamp 2012
	</a>
	from <time class="dt-start">2012-06-30</time>
	to <time class="dt-end">2012-07-01</time> at
	<span class="p-location h-card">
	<a class="p-name p-org u-url" href="http://geoloqi.com/">
	Geoloqi</a>, <span class="p-street-address">920 SW 3rd Ave. Suite 400</span>, <span class="p-locality">Portland</span>, <abbr class="p-region" title="Oregon">OR</abbr>
  </span>
</div>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
	"items": [{
		"type": ["h-event"],
		"properties": {
			"name": ["IndieWebCamp 2012"],
			"url": ["http://indiewebcamp.com/2012"],
			"start": ["2012-06-30"],
			"end": ["2012-07-01"],
			"location": [{
				"value": "Geoloqi",
				"type": ["h-card"],
				"properties": {
					"name": ["Geoloqi"],
					"org": ["Geoloqi"],
					"url": ["http://geoloqi.com/"],
					"street-address": ["920 SW 3rd Ave. Suite 400"],
					"locality": ["Portland"],
					"region": ["Oregon"]
				}
			}]
		}
	}]
}';

		$parser = new Parser($input, '', true);
		$parser->stringDateTimes = true;
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/**
	 * From http://microformats.org/wiki/microformats2#combining_microformats
	 */
	public function testHCardOrgPOrg() {
		$input = '<div class="h-card">
  <a class="p-name u-url"
	 href="http://blog.lizardwrangler.com/"
	>Mitchell Baker</a>
  (<span class="p-org">Mozilla Foundation</span>)
</div>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
  "items": [{
	"type": ["h-card"],
	"properties": {
	  "name": ["Mitchell Baker"],
	  "url": ["http://blog.lizardwrangler.com/"],
	  "org": ["Mozilla Foundation"]
	}
  }]
}';

		$parser = new Parser($input, '', true);
		$parser->stringDateTimes = true;
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/**
	 * From http://microformats.org/wiki/microformats2#combining_microformats
	 */
	public function testHCardOrgHCard() {
		$input = '<div class="h-card">
  <a class="p-name u-url"
	 href="http://blog.lizardwrangler.com/"
	>Mitchell Baker</a>
  (<a class="p-org h-card"
	  href="http://mozilla.org/"
	 >Mozilla Foundation</a>)
</div>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
  "items": [{
	"type": ["h-card"],
	"properties": {
	  "name": ["Mitchell Baker"],
	  "url": ["http://blog.lizardwrangler.com/"],
	  "org": [{
		"value": "Mozilla Foundation",
		"type": ["h-card"],
		"properties": {
		  "name": ["Mozilla Foundation"],
		  "url": ["http://mozilla.org/"]
		 }
	  }]
	}
  }]
}';

		$parser = new Parser($input, '', true);
		$parser->stringDateTimes = true;
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/**
	 * From http://microformats.org/wiki/microformats2#combining_microformats
	 */
	public function testHCardPOrgHCardHOrg() {
		$input = '<div class="h-card">
  <a class="p-name u-url"
	 href="http://blog.lizardwrangler.com/"
	>Mitchell Baker</a>
  (<a class="p-org h-card h-org"
	  href="http://mozilla.org/"
	 >Mozilla Foundation</a>)
</div>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
  "items": [{
	"type": ["h-card"],
	"properties": {
	  "name": ["Mitchell Baker"],
	  "url": ["http://blog.lizardwrangler.com/"],
	  "org": [{
		"value": "Mozilla Foundation",
		"type": ["h-card", "h-org"],
		"properties": {
		  "name": ["Mozilla Foundation"],
		  "url": ["http://mozilla.org/"]
		}
	  }]
	}
  }]
}';

		$parser = new Parser($input, '', true);
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/**
	 * From http://microformats.org/wiki/microformats2#combining_microformats
	 */
	public function testHCardChildHCard() {
		$input = '<div class="h-card">
	<a class="p-name u-url"
	href="http://blog.lizardwrangler.com/">
	Mitchell Baker</a>
	(<a class="h-card h-org" href="http://mozilla.org/">
	Mozilla Foundation</a>)
</div>';
		$expected = '{
	"rels": {},
	"rel-urls": {},
  "items": [{
		"type": ["h-card"],
		"properties": {
			"name": ["Mitchell Baker"],
			"url": ["http://blog.lizardwrangler.com/"]
		},
		"children": [{
			"type": ["h-card","h-org"],
			"properties": {
				"name": ["Mozilla Foundation"],
				"url": ["http://mozilla.org/"]
			}
		}]
	}]
}';

		$parser = new Parser($input, '', true);
		$output = $parser->parse();

		$this->assertJsonStringEqualsJsonString(json_encode($output), $expected);
	}

	/**
	 * Regression test for https://github.com/indieweb/php-mf2/issues/42
	 *
	 * This was occurring because mfPropertyNamesFromClass was only ever returning the first property name
	 * rather than all of them.
	 */
	public function testNestedMicroformatUnderMultipleProperties() {
		$input = '<article class="h-entry"><div class="p-like-of p-in-reply-to h-cite"></div></article>';
		$mf = Mf2\parse($input);

		$this->assertCount(1, $mf['items'][0]['properties']['like-of']);
		$this->assertCount(1, $mf['items'][0]['properties']['in-reply-to']);
	}

	/**
	 * Test microformats nested under e-* property classnames retain html: key in structure
	 *
	 * @see https://github.com/indieweb/php-mf2/issues/64
	 */
	public function testMicroformatsNestedUnderEPropertyClassnamesRetainHtmlKey() {
		$input = '<div class="h-entry"><div class="h-card e-content"><p>Hello</p></div></div>';
		$mf = Mf2\parse($input);

		$this->assertArrayHasKey('value', $mf['items'][0]['properties']['content'][0]);
		$this->assertEquals($mf['items'][0]['properties']['content'][0]['value'], 'Hello');
		$this->assertArrayHasKey('html', $mf['items'][0]['properties']['content'][0]);
		$this->assertEquals($mf['items'][0]['properties']['content'][0]['html'], '<p>Hello</p>');
	}

	/**
	 * Test microformats nested under u-* property classnames derive value: key from parsing as u-*
	 */
	public function testMicroformatsNestedUnderUPropertyClassnamesDeriveValueCorrectly() {
		$input = '<div class="h-entry"><img class="u-url h-card" alt="This should not be the value" src="This should be the value" /></div>';
		$mf = Mf2\parse($input);
		$this->assertEquals($mf['items'][0]['properties']['url'][0]['value'], 'This should be the value', json_encode($mf['items'][0]['properties']['url'][0]));
	}

	public function testMicroformatsNestedUnderUPropertyClassnamesDeriveValueFromURL() {
		$input = '<div class="h-entry">
		  <h1 class="p-name">Name</h1>
		  <p class="e-content">Hello World</p>
		  <ul>
		    <li class="u-comment h-cite">
		    	<a class="u-author h-card" href="http://jane.example.com/">Jane Bloggs</a>
		    	<p class="p-content p-name">lol</p>
		    	<a class="u-url" href="http://example.org/post1234"><time class="dt-published">2015-07-12 12:03</time></a>
		    </li>
		  </ul>
		</div>';
		$expected = '{
		  "items": [{
    	  "type": ["h-entry"],
	      "properties": {
	        "name": ["Name"],
	        "content": [{
	          "html": "Hello World",
	          "value": "Hello World"
	        }],
	        "comment": [{
            "type": ["h-cite"],
            "properties": {
              "author": [{
                "type": ["h-card"],
                "properties": {
                  "name": ["Jane Bloggs"],
                  "url": ["http:\/\/jane.example.com\/"]
                },
                "value": "http:\/\/jane.example.com\/"
              }],
              "content": ["lol"],
              "name": ["lol"],
              "url": ["http:\/\/example.org\/post1234"],
              "published": ["2015-07-12 12:03"]
            },
            "value": "http:\/\/example.org\/post1234"
          }]
	      }
	    }],
	    "rels":[],
	    "rel-urls": []
	  }';
	  	$mf = Mf2\parse($input);

		$this->assertJsonStringEqualsJsonString(json_encode($mf), $expected);
		$this->assertEquals($mf['items'][0]['properties']['comment'][0]['value'], 'http://example.org/post1234');
		$this->assertEquals($mf['items'][0]['properties']['comment'][0]['properties']['author'][0]['value'], 'http://jane.example.com/');
	}

	public function testMicroformatsNestedUnderPPropertyClassnamesDeriveValueFromFirstPName() {
		$input = '<div class="h-entry"><div class="p-author h-card">This post was written by <span class="p-name">Zoe</span>.</div></div>';
		$mf = Mf2\parse($input);

		$this->assertEquals($mf['items'][0]['properties']['author'][0]['value'], 'Zoe');
	}


	/**
	 * @see https://github.com/indieweb/php-mf2/issues/98
	 * @see https://github.com/microformats/tests/issues/58
	 */
	public function testNoValueForNestedMicroformatWithoutProperty() {
		$input = '<div class="h-card" ><a class="h-card" href="jane.html">Jane Doe</a><p></p></div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('children', $output['items'][0]);
		$this->assertArrayNotHasKey('value', $output['items'][0]['children'][0]);
	}


	/**
	 * With the backcompat changes I worked on in this PR, I ran into a case where
	 * nested mf1 without properties were not added to the 'children' property properly.
	 * I fixed that but then wanted to ensure it worked beyond 1-level deep. This example
	 * is contrived, but lets me test to confirm 'children' is set correctly. - Gregor Morrill
	 */
	public function testNestedMf1() {
		$input = '<div class="hentry"> <div class="vcard"><span class="fn">Jane Doe</span> and <div class="vcard"><span class="fn">John Doe</span></div> </div> </div>';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertEmpty($output['items'][0]['properties']);
		$this->assertArrayHasKey('children', $output['items'][0]);
		$this->assertEquals('h-card', $output['items'][0]['children'][0]['type'][0]);
		$this->assertEquals('Jane Doe', $output['items'][0]['children'][0]['properties']['name'][0]);
		$child_mf = $output['items'][0]['children'][0];
		$this->assertArrayHasKey('children', $child_mf);
		$this->assertEquals('h-card', $child_mf['children'][0]['type'][0]);
		$this->assertEquals('John Doe', $child_mf['children'][0]['properties']['name'][0]);
	}

  public function testNoUrlFromRelOnMf2() {
    $input = <<< END
<div class="h-entry">
<p> <a href="/article" rel="bookmark" class="p-name">Title of Post</a> </p>
<div class="e-content"><p> This is the post </p> </div>
</div>
END;
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('name', $output['items'][0]['properties']);
    $this->assertArrayHasKey('content', $output['items'][0]['properties']);
    $this->assertArrayNotHasKey('url', $output['items'][0]['properties']);
  }

	/**
	 * Simplified h-entry with `p-location h-adr` from https://aaronparecki.com/2018/03/14/3/
	 * Whitespace cleaned up for easier test assertion
	 * @see https://github.com/indieweb/php-mf2/issues/151
	 */
	public function testNestedValuePProperty() {
		$input = <<< END
<div class="h-entry">
<span class="p-location h-adr">
<span class="p-locality">Portland</span>, <span class="p-region">Oregon</span> <span class="weather"><span>&bull;</span><i class="wi wi-night-alt-cloudy" title="Mostly Cloudy"></i> 44&deg;F</span>
<data class="p-latitude" value="45.535623"></data>
<data class="p-longitude" value="-122.621209"></data>
</span>
</div>
END;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('value', $output['items'][0]['properties']['location'][0]);
		$this->assertEquals("Portland, Oregon • 44°F", $output['items'][0]['properties']['location'][0]['value']);
	}

	/**
	 * @see https://github.com/indieweb/php-mf2/issues/151
	 */
	public function testNestedValueDTProperty() {
		$input = <<< END
<div class="h-entry">
	<div class="dt-acme h-acme-object">1997-12-12</div>
</div>
END;
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayHasKey('value', $output['items'][0]['properties']['acme'][0]);
		$this->assertEquals('1997-12-12', $output['items'][0]['properties']['acme'][0]['value']);
	}

	/**
	 * rel=tag should not be upgraded within microformats2
	 * @see https://github.com/indieweb/php-mf2/issues/157
	 */
	public function testMf2DoesNotParseRelTag() {
		$input = '<div class="h-entry">
<a rel="tag" href="/tags/tests">Tests</a>
</div>

<div class="h-review">
<a rel="tag" href="/tags/reviews">Reviews</a>
</div>
';
		$parser = new Parser($input);
		$output = $parser->parse();

		$this->assertArrayNotHasKey('category', $output['items'][0]['properties']);
		$this->assertArrayNotHasKey('category', $output['items'][1]['properties']);
	}

	/**
	 * JSON-mode should return an empty stdClass when a microformat has no properties.
	 * @see https://github.com/indieweb/php-mf2/issues/171
	 */
	public function testEmptyPropertiesObjectInJSONMode() {
		$input = '<div class="h-feed"><div class="h-entry"></div></div>';
		// Try in JSON-mode: expect the raw PHP to be an stdClass instance that serializes to an empty object.
		$parser = new Parser($input, null, true);
		$output = $parser->parse();
		$this->assertInstanceOf('\stdClass', $output['items'][0]['properties']);
		$this->assertSame('{}', json_encode($output['items'][0]['properties']));
		// Repeat in non-JSON-mode: expect the raw PHP to be an array. Check that its serialization is not what we need for mf2 JSON.
		$parser = new Parser($input, null, false);
		$output = $parser->parse();
		$this->assertInternalType('array', $output['items'][0]['properties']);
		$this->assertSame('[]', json_encode($output['items'][0]['properties']));
	}

}

