<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class CorrectAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @description RequestId
     *
     * @example 226BD68D-6208-4140-A6EC-2F2BF434B601
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CorrectAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
