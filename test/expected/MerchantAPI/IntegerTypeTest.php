<?php

use DTS\eBaySDK\MerchantAPI\Types\IntegerType;

class IntegerTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IntegerType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantAPI\Types\IntegerType', $this->obj);
    }

    public function testExtendsIntegerType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
    }
}