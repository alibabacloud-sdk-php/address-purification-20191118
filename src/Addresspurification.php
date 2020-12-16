<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ClassifyPOIRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ClassifyPOIResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CompleteAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CompleteAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CorrectAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\CorrectAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractNameRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractNameResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractPhoneRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\ExtractPhoneResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressDivisionCodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressDivisionCodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressGeocodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressGeocodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\UpdateProjectShrinkRequest;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Addresspurification extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('address-purification', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param GetAddressGeocodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAddressGeocodeResponse
     */
    public function getAddressGeocodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAddressGeocodeResponse::fromMap($this->doRequest('GetAddressGeocode', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAddressGeocodeRequest $request
     *
     * @return GetAddressGeocodeResponse
     */
    public function getAddressGeocode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressGeocodeWithOptions($request, $runtime);
    }

    /**
     * @param CompleteAddressRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CompleteAddressResponse
     */
    public function completeAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CompleteAddressResponse::fromMap($this->doRequest('CompleteAddress', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CompleteAddressRequest $request
     *
     * @return CompleteAddressResponse
     */
    public function completeAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeAddressWithOptions($request, $runtime);
    }

    /**
     * @param GetZipcodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetZipcodeResponse
     */
    public function getZipcodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetZipcodeResponse::fromMap($this->doRequest('GetZipcode', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetZipcodeRequest $request
     *
     * @return GetZipcodeResponse
     */
    public function getZipcode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getZipcodeWithOptions($request, $runtime);
    }

    /**
     * @param ExtractPhoneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExtractPhoneResponse
     */
    public function extractPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtractPhoneResponse::fromMap($this->doRequest('ExtractPhone', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExtractPhoneRequest $request
     *
     * @return ExtractPhoneResponse
     */
    public function extractPhone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractPhoneWithOptions($request, $runtime);
    }

    /**
     * @param ExtractNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExtractNameResponse
     */
    public function extractNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtractNameResponse::fromMap($this->doRequest('ExtractName', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExtractNameRequest $request
     *
     * @return ExtractNameResponse
     */
    public function extractName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractNameWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressDivisionCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAddressDivisionCodeResponse
     */
    public function getAddressDivisionCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAddressDivisionCodeResponse::fromMap($this->doRequest('GetAddressDivisionCode', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAddressDivisionCodeRequest $request
     *
     * @return GetAddressDivisionCodeResponse
     */
    public function getAddressDivisionCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressDivisionCodeWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyPOIRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClassifyPOIResponse
     */
    public function classifyPOIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ClassifyPOIResponse::fromMap($this->doRequest('ClassifyPOI', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClassifyPOIRequest $request
     *
     * @return ClassifyPOIResponse
     */
    public function classifyPOI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyPOIWithOptions($request, $runtime);
    }

    /**
     * @param StructureAddressRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StructureAddressResponse
     */
    public function structureAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StructureAddressResponse::fromMap($this->doRequest('StructureAddress', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StructureAddressRequest $request
     *
     * @return StructureAddressResponse
     */
    public function structureAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->structureAddressWithOptions($request, $runtime);
    }

    /**
     * @param ExtractAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExtractAddressResponse
     */
    public function extractAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExtractAddressResponse::fromMap($this->doRequest('ExtractAddress', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExtractAddressRequest $request
     *
     * @return ExtractAddressResponse
     */
    public function extractAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->extractAddressWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $tmp
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($tmp, $runtime)
    {
        Utils::validateModel($tmp);
        $request = new UpdateProjectShrinkRequest([]);
        RpcUtils::convert($tmp, $request);
        if (!Utils::isUnset($tmp->parameters)) {
            $request->parametersShrink = Utils::toJSONString($tmp->parameters);
        }

        return UpdateProjectResponse::fromMap($this->doRequest('UpdateProject', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param CorrectAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CorrectAddressResponse
     */
    public function correctAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CorrectAddressResponse::fromMap($this->doRequest('CorrectAddress', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CorrectAddressRequest $request
     *
     * @return CorrectAddressResponse
     */
    public function correctAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->correctAddressWithOptions($request, $runtime);
    }

    /**
     * @param GetAddressSimilarityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAddressSimilarityResponse
     */
    public function getAddressSimilarityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAddressSimilarityResponse::fromMap($this->doRequest('GetAddressSimilarity', 'HTTPS', 'POST', '2019-11-18', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAddressSimilarityRequest $request
     *
     * @return GetAddressSimilarityResponse
     */
    public function getAddressSimilarity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAddressSimilarityWithOptions($request, $runtime);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
