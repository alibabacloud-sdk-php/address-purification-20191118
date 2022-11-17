<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetAddressSimilarityResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\GetZipcodeResponse;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressRequest;
use AlibabaCloud\SDK\Addresspurification\V20191118\Models\StructureAddressResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Addresspurification extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('address-purification', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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

    /**
     * @param CorrectAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CorrectAddressResponse
     */
    public function correctAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CorrectAddress',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CorrectAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ExtractAddressRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExtractAddressResponse
     */
    public function extractAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtractAddress',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ExtractNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExtractNameResponse
     */
    public function extractNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtractName',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ExtractPhoneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExtractPhoneResponse
     */
    public function extractPhoneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExtractPhone',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExtractPhoneResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAddressDivisionCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAddressDivisionCodeResponse
     */
    public function getAddressDivisionCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAddressDivisionCode',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAddressDivisionCodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetAddressSimilarityRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAddressSimilarityResponse
     */
    public function getAddressSimilarityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAddressSimilarity',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAddressSimilarityResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetZipcodeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetZipcodeResponse
     */
    public function getZipcodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetZipcode',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetZipcodeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StructureAddressRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StructureAddressResponse
     */
    public function structureAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->defaultCity)) {
            $body['DefaultCity'] = $request->defaultCity;
        }
        if (!Utils::isUnset($request->defaultDistrict)) {
            $body['DefaultDistrict'] = $request->defaultDistrict;
        }
        if (!Utils::isUnset($request->defaultProvince)) {
            $body['DefaultProvince'] = $request->defaultProvince;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StructureAddress',
            'version'     => '2019-11-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StructureAddressResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
