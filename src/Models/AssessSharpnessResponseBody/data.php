<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\AssessSharpnessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $sharpness;
    protected $_name = [
        'sharpness' => 'Sharpness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sharpness) {
            $res['Sharpness'] = $this->sharpness;
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
        if (isset($map['Sharpness'])) {
            $model->sharpness = $map['Sharpness'];
        }

        return $model;
    }
}
