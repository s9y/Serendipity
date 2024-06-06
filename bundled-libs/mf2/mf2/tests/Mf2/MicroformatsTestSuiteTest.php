<?php

namespace Mf2\Parser\Test;

final class TestSuiteParser extends \Mf2\Parser
{
    /** Actually textContent from before the whitespace normalisation merge (e8da04f93d548d26287a8980eca4216639cbc61d) */
    public function textContent(\DOMElement $el, $dummy=false) {
        $excludeTags = array('noframe', 'noscript', 'script', 'style', 'frames', 'frameset');

        if (isset($el->tagName) and in_array(strtolower($el->tagName), $excludeTags)) {
            return '';
        }

        $this->_resolveChildUrls($el);

        $clonedEl = $el->cloneNode(true);

        foreach ($this->xpath->query('.//img', $clonedEl) as $imgEl) {
            if ($imgEl->hasAttribute('alt')) {
                $replacement = $imgEl->getAttribute('alt');
            } else if ($imgEl->hasAttribute('src')) {
                $replacement = ' ' . $imgEl->getAttribute('src') . ' ';
            } else {
                $replacement = ''; // Bye bye IMG element.
            }
            $newNode = $this->doc->createTextNode($replacement);
            $imgEl->parentNode->replaceChild($newNode, $imgEl);
        }

        foreach ($excludeTags as $tagName) {
            foreach ($this->xpath->query(".//{$tagName}", $clonedEl) as $elToRemove) {
                $elToRemove->parentNode->removeChild($elToRemove);
            }
        }

        return \Mf2\unicodeTrim($clonedEl->textContent);
    }

    // Hack. Old textContent requires "resolveChildUrls", but that method is private.
    private $__resolveChildUrls = null;
    private function _resolveChildUrls(\DOMElement $element) {
        if (null === $this->__resolveChildUrls) {
            $reflectUpon = new \ReflectionClass($this);
            $this->__resolveChildUrls = $reflectUpon->getMethod('resolveChildUrls');
            $this->__resolveChildUrls->setAccessible(true);
        }
        return $this->__resolveChildUrls->invoke($this, $element);
    }
}

class MicroformatsTestSuiteTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider mf1TestsProvider
     * @group microformats/tests/mf1
     */
    public function testMf1FromTestSuite($input, $expectedOutput)
    {
        $parser = new TestSuiteParser($input, 'http://example.com/');
        $this->assertEquals(
            $this->makeComparible(json_decode($expectedOutput, true)),
            $this->makeComparible(json_decode(json_encode($parser->parse()), true))
        );
    }

    /**
     * @dataProvider mf2TestsProvider
     * @group microformats/tests/mf2
     */
    public function testMf2FromTestSuite($input, $expectedOutput, $test)
    {
        if ($test === 'h-event/time') {
            $this->markTestIncomplete('This test does not match because we implement a proposed spec: https://github.com/microformats/microformats2-parsing/issues/4#issuecomment-373457720.');
        }

        $parser = new TestSuiteParser($input, 'http://example.com/');
        $this->assertEquals(
            $this->makeComparible(json_decode($expectedOutput, true)),
            $this->makeComparible(json_decode(json_encode($parser->parse()), true))
        );
    }

    /**
     * @dataProvider mixedTestsProvider
     * @group microformats/tests/mixed
     */
    public function testMixedFromTestSuite($input, $expectedOutput)
    {
        $parser = new TestSuiteParser($input, 'http://example.com/');
        $this->assertEquals(
            $this->makeComparible(json_decode($expectedOutput, true)),
            $this->makeComparible(json_decode(json_encode($parser->parse()), true))
        );
    }

    /**
     * To make arrays coming from JSON more easily comparible by PHPUnit:
     * * We sort arrays by key, normalising them, because JSON objects are unordered.
     * * We json_encode strings, and cut the starting and ending ", so PHPUnit better
     *   shows whitespace characters like tabs and newlines.
     **/
    public function makeComparible($array)
    {
        ksort($array);
        foreach ($array as $key => $value) {
            if (gettype($value) === 'array') {
                $array[$key] = $this->makeComparible($value);
            } else if (gettype($value) === 'string') {
                $array[$key] = substr(json_encode($value), 1, -1);
            }
        }
        return $array;
    }

    /**
     * Data provider lists all tests from a specific directory in mf2/tests.
     **/
    public function htmlAndJsonProvider($subFolder = '')
    {
        // Get the actual wanted subfolder.
        $subFolder = '/mf2/tests/tests' . $subFolder;
        // Ripped out of the test-suite.php code:
        $finder = new \RegexIterator(
            new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(
                dirname(__FILE__) . '/../../vendor/' . $subFolder,
                \RecursiveDirectoryIterator::SKIP_DOTS
            )),
            '/^.+\.html$/i',
            \RecursiveRegexIterator::GET_MATCH
        );
        // Build the array of separate tests:
        $tests = array();
        foreach ($finder as $key => $value) {
            $dir = realpath(pathinfo($key, PATHINFO_DIRNAME));
            $testname = substr($dir, strpos($dir, $subFolder) + strlen($subFolder) + 1) . '/' . pathinfo($key, PATHINFO_FILENAME);
            $test = pathinfo($key, PATHINFO_BASENAME);
            $result = pathinfo($key, PATHINFO_FILENAME) . '.json';
            if (is_file($dir . '/' . $result)) {
                $tests[$testname] = array(
                    'input' => file_get_contents($dir . '/' . $test),
                    'expectedOutput' => file_get_contents($dir . '/' . $result),
                    'name' => $testname
                );
            }
        }
        return $tests;
    }

    /**
     * Following three functions are the actual dataProviders used by the test methods.
     */
    public function mf1TestsProvider()
    {
        return $this->htmlAndJsonProvider('/microformats-v1');
    }

    public function mf2TestsProvider()
    {
        return $this->htmlAndJsonProvider('/microformats-v2');
    }

    public function mixedTestsProvider()
    {
        return $this->htmlAndJsonProvider('/microformats-mixed');
    }
}
