<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\GetJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalUsedTime;

    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var int
     */
    public $timeToLive;

    /**
     * @var bool
     */
    public $completed;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'status'        => 'Status',
        'totalUsedTime' => 'TotalUsedTime',
        'batchSize'     => 'BatchSize',
        'progress'      => 'Progress',
        'timeToLive'    => 'TimeToLive',
        'completed'     => 'Completed',
        'finish'        => 'Finish',
        'message'       => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalUsedTime) {
            $res['TotalUsedTime'] = $this->totalUsedTime;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->timeToLive) {
            $res['TimeToLive'] = $this->timeToLive;
        }
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalUsedTime'])) {
            $model->totalUsedTime = $map['TotalUsedTime'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['TimeToLive'])) {
            $model->timeToLive = $map['TimeToLive'];
        }
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
