<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server;

class Statistics extends \PleskX\Api\Struct
{

    /** @var Statistics\Objects */
    public $objects;

    /** @var Statistics\Version */
    public $version;

    /** @var Statistics\LoadAvg */
    public $load_avg;

    /** @var Statistics\Other */
    public $other;

    /** @var Statistics\Memory */
    public $mem;

    /** @var Statistics\DiskDevice */
    public $disk;

    public function __construct($apiResponse)
    {
        $this->objects = new Statistics\Objects($apiResponse->objects);
        $this->version = new Statistics\Version($apiResponse->version);
        $this->load_avg= new Statistics\LoadAvg($apiResponse->load_avg);
        $this->other   = new Statistics\Other($apiResponse->other);
        $this->mem     = new Statistics\Memory($apiResponse->mem);
        $this->disk    = new Statistics\DiskDevice($apiResponse->diskspace);
    }
}
