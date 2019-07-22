<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class DiskDevice extends \PleskX\Api\Struct
{
    /** @var array */
    public $devices;

    public function __construct($apiResponse)
    {
        $this->devices= [];

        foreach ($apiResponse->device as $device) {
            $this->devices[] = new DiskSpace($device);
        }
    }
}