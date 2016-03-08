<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantAPI\Services;

class MerchantAPIService extends \DTS\eBaySDK\MerchantAPI\Services\MerchantAPIBaseService
{
    const API_VERSION = '1.2.3';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\MerchantAPI\Types\MethodOneRequestType $request
     * @return \DTS\eBaySDK\MerchantAPI\Types\ComplexType
     */
    public function methodOne(\DTS\eBaySDK\MerchantAPI\Types\MethodOneRequestType $request)
    {
        return $this->callOperation(
            'MethodOne',
            $request,
            '\DTS\eBaySDK\MerchantAPI\Types\ComplexType'
        );
    }

    /**
     * @param \DTS\eBaySDK\MerchantAPI\Types\MethodTwoRequestType $request
     * @return \DTS\eBaySDK\MerchantAPI\Types\ComplexType
     */
    public function methodTwo(\DTS\eBaySDK\MerchantAPI\Types\MethodTwoRequestType $request)
    {
        return $this->callOperation(
            'methodTwo',
            $request,
            '\DTS\eBaySDK\MerchantAPI\Types\ComplexType'
        );
    }
}
