<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class Other extends \PleskX\Api\Struct
{

    /** @var string */
    public $cpu;

    /** @var integer */
    public $uptime;

    /** @var boolean */
    public $insideVz;


    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'cpu',
            'uptime',
            'inside_vz'
        ]);
    }
}