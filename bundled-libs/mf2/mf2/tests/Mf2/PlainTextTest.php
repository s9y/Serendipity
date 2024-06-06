<?php

namespace Mf2\Parser\Test;

class PlainTextTest extends \PHPUnit_Framework_TestCase {
    /**
     * @dataProvider aaronpkExpectations
     */
    public function testAaronpkExpectations($input, $pName, $eValue, $eHtml) {
        $parser = new \Mf2\Parser($input);
        $output = $parser->parse();
        $entryProperties = $output['items'][0]['properties'];
        $this->assertEquals($pName, $entryProperties['name'][0]);
        $this->assertEquals($eValue, $entryProperties['content'][0]['value']);
        $this->assertEquals($eHtml, $entryProperties['content'][0]['html']);
    }

    public function aaronpkExpectations() {
        return array(
            1 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\"><p>Hello World</p></div>\n</div>",
                "Hello World",
                "Hello World",
                "<p>Hello World</p>"
            ),
            2 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\"><p>Hello<br>World</p></div>\n</div>",
                "Hello\nWorld",
                "Hello\nWorld",
                "<p>Hello<br>World</p>"
            ),
            3 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\"><p>Hello<br>\nWorld</p></div>\n</div>",
                "Hello\nWorld",
                "Hello\nWorld",
                "<p>Hello<br>\nWorld</p>"
            ),
            4 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\">\n    <p>Hello World</p>\n  </div>\n</div>",
                "Hello World",
                "Hello World",
                "<p>Hello World</p>"
            ),
            5 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\">Hello\nWorld</div>\n</div>",
                "Hello World",
                "Hello World",
                "Hello\nWorld"
            ),
            6 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\"><p>Hello</p><p>World</p></div>\n</div>",
                "Hello\nWorld",
                "Hello\nWorld",
                "<p>Hello</p><p>World</p>"
            ),
            7 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\">Hello<br>\n    World</div>\n</div>",
                "Hello\nWorld",
                "Hello\nWorld",
                "Hello<br>\n    World",
            ),
            8 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\"><br>Hello<br>World<br></div>\n</div>",
                "Hello\nWorld",
                "Hello\nWorld",
                "<br>Hello<br>World<br>"
            ),
            9 => array(
                "<div class=\"h-entry\">\n  <div class=\"e-content p-name\">\n    <p>One</p>\n    <p>Two</p>\n    <p>Three</p>\n  </div>\n</div>",
                "One\nTwo\nThree",
                "One\nTwo\nThree",
                "<p>One</p>\n    <p>Two</p>\n    <p>Three</p>"
            )
        );
    }
}
