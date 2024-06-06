<?php
/**
 * Tests of the parsing methods within mf2\Parser
 */

namespace Mf2\Parser\Test;

use Mf2;
use Mf2\Parser;
use PHPUnit_Framework_TestCase;

class RelTest extends PHPUnit_Framework_TestCase {
  public function setUp() {
    date_default_timezone_set('Europe/London');
  }

  public function testRelValueOnLinkTag() {
    $input = '<link rel="webmention" href="http://example.com/webmention">';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/webmention', $output['rels']['webmention'][0]);
  }

  public function testRelValueOnATag() {
    $input = '<a rel="webmention" href="http://example.com/webmention">webmention me</a>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/webmention', $output['rels']['webmention'][0]);
  }

  public function testRelValueOnAreaTag() {
    $input = '<map><area rel="webmention" href="http://example.com/webmention"/></map>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/webmention', $output['rels']['webmention'][0]);
  }

  public function testRelValueOrder() {
    $input = '<map><area rel="webmention" href="http://example.com/area"/></map>
      <a rel="webmention" href="http://example.com/a">webmention me</a>
      <link rel="webmention" href="http://example.com/link">';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/area', $output['rels']['webmention'][0]);
    $this->assertEquals('http://example.com/a', $output['rels']['webmention'][1]);
    $this->assertEquals('http://example.com/link', $output['rels']['webmention'][2]);
  }

  public function testRelValueOrder2() {
    $input = '<map><area rel="webmention" href="http://example.com/area"/></map>
      <link rel="webmention" href="http://example.com/link">
      <a rel="webmention" href="http://example.com/a">webmention me</a>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/area', $output['rels']['webmention'][0]);
    $this->assertEquals('http://example.com/link', $output['rels']['webmention'][1]);
    $this->assertEquals('http://example.com/a', $output['rels']['webmention'][2]);
  }

  public function testRelValueOrder3() {
    $input = '<html>
      <head>
        <link rel="webmention" href="http://example.com/link">
      </head>
      <body>
        <a rel="webmention" href="http://example.com/a">webmention me</a>
        <map><area rel="webmention" href="http://example.com/area"/></map>
      </body>
    </html>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('webmention', $output['rels']);
    $this->assertEquals('http://example.com/link', $output['rels']['webmention'][0]);
    $this->assertEquals('http://example.com/a', $output['rels']['webmention'][1]);
    $this->assertEquals('http://example.com/area', $output['rels']['webmention'][2]);
  }

  public function testRelValueOnBTag() {
    $input = '<b rel="webmention" href="http://example.com/webmention">this makes no sense</b>';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayNotHasKey('webmention', $output['rels']);
  }

  public function testEnableAlternatesFlagTrue() {
    $input = '<a rel="author" href="http://example.com/a">author a</a>
<a rel="author" href="http://example.com/b">author b</a>
<a rel="in-reply-to" href="http://example.com/1">post 1</a>
<a rel="in-reply-to" href="http://example.com/2">post 2</a>
<a rel="alternate home"
   href="http://example.com/fr"
   media="handheld"
   hreflang="fr">French mobile homepage</a>';
    $parser = new Parser($input);
    $parser->enableAlternates = true;
    $output = $parser->parse();

    $this->assertArrayHasKey('alternates', $output);
  }

  public function testEnableAlternatesFlagFalse() {
    $input = '<a rel="author" href="http://example.com/a">author a</a>
<a rel="author" href="http://example.com/b">author b</a>
<a rel="in-reply-to" href="http://example.com/1">post 1</a>
<a rel="in-reply-to" href="http://example.com/2">post 2</a>
<a rel="alternate home"
   href="http://example.com/fr"
   media="handheld"
   hreflang="fr">French mobile homepage</a>';
    $parser = new Parser($input);
    $parser->enableAlternates = false;
    $output = $parser->parse();

    $this->assertArrayNotHasKey('alternates', $output);
  }

  /**
   * @see https://github.com/indieweb/php-mf2/issues/112
   * @see http://microformats.org/wiki/microformats2-parsing#rel_parse_examples
   */
  public function testRelURLs() {
    $input = '<a rel="author" href="http://example.com/a">author a</a>
<a rel="author" href="http://example.com/b">author b</a>
<a rel="in-reply-to" href="http://example.com/1">post 1</a>
<a rel="in-reply-to" href="http://example.com/2">post 2</a>
<a rel="alternate home"
   href="http://example.com/fr"
   media="handheld"
   hreflang="fr">French mobile homepage</a>
<link rel="alternate" type="application/atom+xml" href="http://example.com/articles.atom" title="Atom Feed" />';
    $parser = new Parser($input);
    $output = $parser->parse();

    $this->assertArrayHasKey('rels', $output);
    $this->assertCount(4, $output['rels']);
    $this->assertArrayHasKey('author', $output['rels']);
    $this->assertArrayHasKey('in-reply-to', $output['rels']);
    $this->assertArrayHasKey('alternate', $output['rels']);
    $this->assertArrayHasKey('home', $output['rels']);

    $this->assertArrayHasKey('rel-urls', $output);
    $this->assertCount(6, $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/a', $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/b', $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/1', $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/2', $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/fr', $output['rel-urls']);
    $this->assertArrayHasKey('http://example.com/articles.atom', $output['rel-urls']);

    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/a']);
    $this->assertArrayHasKey('text', $output['rel-urls']['http://example.com/a']);
    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/b']);
    $this->assertArrayHasKey('text', $output['rel-urls']['http://example.com/b']);
    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/1']);
    $this->assertArrayHasKey('text', $output['rel-urls']['http://example.com/1']);
    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/2']);
    $this->assertArrayHasKey('text', $output['rel-urls']['http://example.com/2']);
    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/fr']);
    $this->assertArrayHasKey('text', $output['rel-urls']['http://example.com/fr']);
    $this->assertArrayHasKey('media', $output['rel-urls']['http://example.com/fr']);
    $this->assertArrayHasKey('hreflang', $output['rel-urls']['http://example.com/fr']);
    $this->assertArrayHasKey('title', $output['rel-urls']['http://example.com/articles.atom']);
    $this->assertArrayHasKey('type', $output['rel-urls']['http://example.com/articles.atom']);
    $this->assertArrayHasKey('rels', $output['rel-urls']['http://example.com/articles.atom']);
  }

  /**
   * @see https://github.com/microformats/microformats2-parsing/issues/29
   * @see https://github.com/microformats/microformats2-parsing/issues/30
   */
  public function testRelURLsRelsUniqueAndSorted() {
    $input = '<a href="#" rel="me bookmark"></a>
<a href="#" rel="bookmark archived"></a>';
    $parser = new Parser($input);
    $output = $parser->parse();
    $this->assertEquals($output['rel-urls']['#']['rels'], array('archived', 'bookmark', 'me'));
  }

  public function testRelURLsInfoMergesCorrectly() {
    $input = '<a href="#" rel="a">This nodeValue</a>
<a href="#" rel="a" hreflang="en">Not this nodeValue</a>';
    $parser = new Parser($input);
    $output = $parser->parse();
    $this->assertEquals($output['rel-urls']['#']['hreflang'], 'en');
    $this->assertArrayNotHasKey('media', $output['rel-urls']['#']);
    $this->assertArrayNotHasKey('title', $output['rel-urls']['#']);
    $this->assertArrayNotHasKey('type', $output['rel-urls']['#']);
    $this->assertEquals($output['rel-urls']['#']['text'], 'This nodeValue');
  }

  public function testRelURLsNoDuplicates() {
    $input = '<a href="#a" rel="a"></a>
<a href="#b" rel="a"></a>
<a href="#a" rel="a"></a>';
    $parser = new Parser($input);
    $output = $parser->parse();
    $this->assertEquals($output['rels']['a'], array('#a', '#b'));
  }

  public function testRelURLsFalsyTextVSEmpty() {
    $input = '<a href="#a" rel="a">0</a>
<a href="#b" rel="b"></a>';
    $parser = new Parser($input);
    $output = $parser->parse();
    $this->assertArrayHasKey('text', $output['rel-urls']['#a']);
    $this->assertEquals($output['rel-urls']['#a']['text'], '0');
    $this->assertArrayNotHasKey('text', $output['rel-urls']['#b']);
  }

}
