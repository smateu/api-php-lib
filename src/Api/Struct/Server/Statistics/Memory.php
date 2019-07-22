<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class Memory extends \PleskX\Api\Struct
{

    /** @var integer */
    public $total;

    /** @var integer */
    public $used;

    /** @var integer */
    public $free;

    /** @var integer */
    public $shared;

    /** @var integer */
    public $buffer;

    /** @var integer */
    public $cached;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'total',
            'used',
            'free',
            'shared',
            'buffer',
            'cached'
        ]);
    }
}