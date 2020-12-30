<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\Tea\Model;

class ExtendImageStyleRequest extends Model
{
    /**
     * @var string
     */
    public $styleUrl;

    /**
     * @var string
     */
    public $majorUrl;
    protected $_name = [
        'styleUrl' => 'StyleUrl',
        'majorUrl' => 'MajorUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->styleUrl) {
            $res['StyleUrl'] = $this->styleUrl;
        }
        if (null !== $this->majorUrl) {
            $res['MajorUrl'] = $this->majorUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtendImageStyleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StyleUrl'])) {
            $model->styleUrl = $map['StyleUrl'];
        }
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }

        return $model;
    }
}
