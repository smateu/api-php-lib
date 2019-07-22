<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Webspace;

class Limits extends \PleskX\Api\Struct
{

    /** @var array */
    public $limits;

    public function __construct($apiResponse)
    {
        $this->limits = [];

        foreach ($apiResponse->limit as $limit) {
            $this->limits[(string)$limit->name] = (string)$limit->value;
        }

    }
}
