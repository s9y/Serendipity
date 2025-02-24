<?php

@define('S9Y_PEAR_PATH', dirname(__FILE__) . '/../../bundled-libs/');
if (!class_exists('XML_RPC_Base')) {
    include_once(S9Y_PEAR_PATH . "XML/RPC.php");
}

use PHPUnit\Framework\Attributes\Test;

class bundledLibsTest extends PHPUnit\Framework\TestCase
{
    #[Test]
    public function test_serendipity_xml_rpc_message()
    {
        $args = array(
            new XML_RPC_Value(
                'testA',
                'string'
            ),
            new XML_RPC_Value(
                'testB',
                'string'
            )
        );
        $message = new XML_RPC_Message(
            'weblogUpdates.ping',
            $args
        );
        $message->createPayload();

        $expected = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r
<methodCall>\r
<methodName>weblogUpdates.ping</methodName>\r
<params>\r
<param>\r
<value><string>testA</string></value>\r
</param>\r
<param>\r
<value><string>testB</string></value>\r
</param>\r
</params>\r
</methodCall>\r
";
        $this->assertEquals($expected, $message->payload);
    }

    #[Test]
    public function test_serendipity_xml_rpc_response_valid()
    {
        $args = array(
            new XML_RPC_Value(
                'testA',
                'string'
            ),
            new XML_RPC_Value(
                'testB',
                'string'
            )
        );
        $message = new XML_RPC_Message(
            'weblogUpdates.ping',
            $args
        );
        $message->createPayload();
        $example_response = "<methodResponse>
<params>
<param>
<value><string>Success!</string></value>
</param>
</params>
</methodResponse>";

        $xmlrpc_result = $message->parseResponse($example_response);
        $this->assertEquals($example_response, $xmlrpc_result->serialize());
    }

}
