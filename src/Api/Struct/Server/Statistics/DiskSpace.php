<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class DiskSpace extends \PleskX\Api\Struct
{

    /** @var string */
    public $name;

    /** @var integer */
    public $total;

    /** @var integer */
    public $used;

    /** @var integer */
    public $free;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'name',
            'total',
            'used',
            'free'
        ]);
    }
}