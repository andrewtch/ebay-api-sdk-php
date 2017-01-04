<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\RestAPI\Types;

/**
 *
 * @property string $BISH
 * @property string $BISHbosh
 * @property string $BoshBish
 * @property string $BoshBOSH
 * @property string $eBay
 * @property \DTS\eBaySDK\RestAPI\Types\AnotherType $AnotherType
 * @property string $uri
 * @property string $binary
 * @property boolean $boolean
 * @property \DateTime $DateTime
 * @property integer $decimal
 * @property double $double
 * @property string $duration
 * @property double $float
 * @property integer $integer
 * @property integer[] $integers
 * @property integer $long
 * @property string $string
 * @property string[] $strings
 * @property string $time
 * @property string $token
 * @property \DTS\eBaySDK\RestAPI\Enums\EnumStringType $enumString
 * @property \DTS\eBaySDK\RestAPI\Enums\EnumTokenType $enumToken
 * @property string $id
 * @property string[] $repeatable
 * @property string[] $repeatable2
 * @property \DTS\eBaySDK\RestAPI\Types\Foo $foo
 * @property mixed $any
 * @property string $uriArr
 * @property string $binaryArr
 * @property boolean $booleanArr
 * @property \DateTime $DateTimeArr
 * @property integer $decimalArr
 * @property double $doubleArr
 * @property string $durationArr
 * @property double $floatArr
 * @property integer $integerArr
 * @property integer $longArr
 * @property string $stringArr
 * @property string $timeArr
 * @property string $tokenArr
 * @property \DTS\eBaySDK\RestAPI\Enums\EnumStringType $enumStringArr
 * @property \DTS\eBaySDK\RestAPI\Enums\EnumTokenType $enumTokenArr
 */
class ComplexType extends \DTS\eBaySDK\RestAPI\Types\AnotherType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BISH' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BISH'
        ],
        'BISHbosh' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BISHbosh'
        ],
        'BoshBish' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BoshBish'
        ],
        'BoshBOSH' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BoshBOSH'
        ],
        'eBay' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBay'
        ],
        'AnotherType' => [
            'type' => 'DTS\eBaySDK\RestAPI\Types\AnotherType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AnotherType'
        ],
        'uri' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uri'
        ],
        'binary' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'binary'
        ],
        'boolean' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'boolean'
        ],
        'DateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DateTime'
        ],
        'decimal' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimal'
        ],
        'double' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'double'
        ],
        'duration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'duration'
        ],
        'float' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'float'
        ],
        'integer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'integer'
        ],
        'integers' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'integers'
        ],
        'long' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'long'
        ],
        'string' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'string'
        ],
        'strings' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'strings'
        ],
        'time' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'time'
        ],
        'token' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'token'
        ],
        'enumString' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'enumString'
        ],
        'enumToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'enumToken'
        ],
        'id' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'id'
        ],
        'repeatable' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'repeatable'
        ],
        'repeatable2' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'repeatable2'
        ],
        'foo' => [
            'type' => 'DTS\eBaySDK\RestAPI\Types\Foo',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'foo'
        ],
        'any' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'any'
        ],
        'uriArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'uriArr'
        ],
        'binaryArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'binaryArr'
        ],
        'booleanArr' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'booleanArr'
        ],
        'DateTimeArr' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'DateTimeArr'
        ],
        'decimalArr' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'decimalArr'
        ],
        'doubleArr' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'doubleArr'
        ],
        'durationArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'durationArr'
        ],
        'floatArr' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'floatArr'
        ],
        'integerArr' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'integerArr'
        ],
        'longArr' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'longArr'
        ],
        'stringArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'stringArr'
        ],
        'timeArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'timeArr'
        ],
        'tokenArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'tokenArr'
        ],
        'enumStringArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'enumStringArr'
        ],
        'enumTokenArr' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'enumTokenArr'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
