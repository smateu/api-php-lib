<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class LoadAvg extends \PleskX\Api\Struct
{

    /** @var integer */
    public $l1;

    /** @var integer */
    public $l5;

    /** @var integer */
    public $l15;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'l1',
            'l5',
            'l15'
        ]);
    }
}