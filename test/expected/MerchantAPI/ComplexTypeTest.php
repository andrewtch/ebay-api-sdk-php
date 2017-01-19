<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantAPI\Types;

use DTS\eBaySDK\MerchantAPI\Types\ComplexType;

class ComplexTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ComplexType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantAPI\Types\ComplexType', $this->obj);
    }

    public function testExtendsAnotherType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantAPI\Types\AnotherType', $this->obj);
    }
}
