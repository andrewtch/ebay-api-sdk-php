<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\RestAPI\Services;

class RestAPIService extends \DTS\eBaySDK\RestAPI\Services\RestAPIBaseService
{
    const API_VERSION = '123';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'MethodOne' => [
            'method' => 'GET',
            'resource' => 'foo/bar/{baz}',
            'responseClass' => '\DTS\eBaySDK\RestAPI\Types\MethodOneResponseType',
            'params' => [
                'foo' => [
                    'valid' => ['string']
                ],
                'bar' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'methodTwo' => [
            'method' => 'GET',
            'resource' => 'foo/bar/{baz}',
            'responseClass' => '\DTS\eBaySDK\RestAPI\Types\MethodTwoResponseType',
            'params' => [
            ]
        ],
        'methodThree' => [
            'method' => 'GET',
            'resource' => 'foo',
            'responseClass' => '\DTS\eBaySDK\RestAPI\Types\MethodTwoResponseType',
            'params' => [
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\RestAPI\Types\MethodOneRequestType $request
     * @return \DTS\eBaySDK\RestAPI\Types\MethodOneResponseType
     */
    public function methodOne(\DTS\eBaySDK\RestAPI\Types\MethodOneRequestType $request)
    {
        return $this->methodOneAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\RestAPI\Types\MethodOneRequestType $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function methodOneAsync(\DTS\eBaySDK\RestAPI\Types\MethodOneRequestType $request)
    {
        return $this->callOperationAsync('MethodOne', $request);
    }

    /**
     * @param \DTS\eBaySDK\RestAPI\Types\MethodTwoRequestType $request
     * @return \DTS\eBaySDK\RestAPI\Types\MethodTwoResponseType
     */
    public function methodTwo(\DTS\eBaySDK\RestAPI\Types\MethodTwoRequestType $request)
    {
        return $this->methodTwoAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\RestAPI\Types\MethodTwoRequestType $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function methodTwoAsync(\DTS\eBaySDK\RestAPI\Types\MethodTwoRequestType $request)
    {
        return $this->callOperationAsync('methodTwo', $request);
    }

    /**
     * @return \DTS\eBaySDK\RestAPI\Types\MethodTwoResponseType
     */
    public function methodThree()
    {
        return $this->methodThreeAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function methodThreeAsync()
    {
        return $this->callOperationAsync('methodThree');
    }
}
