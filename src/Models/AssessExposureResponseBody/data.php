<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessExposureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $exposure;
    protected $_name = [
        'exposure' => 'Exposure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposure) {
            $res['Exposure'] = $this->exposure;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exposure'])) {
            $model->exposure = $map['Exposure'];
        }

        return $model;
    }
}
