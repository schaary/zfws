<?php

require_once dirname(dirname(dirname(__FILE__))).'/library/Soaptest.php';

class SoapTestTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }


    public function testLogicalNot()
    {
    	$soapTest = new Soaptest();
		$bool = $soapTest->logical_not(false);
        $this->assertTrue($bool);
    }
}
