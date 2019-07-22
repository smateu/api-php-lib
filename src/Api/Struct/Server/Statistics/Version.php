<?php
// Copyright 1999-2019. Plesk International GmbH.

namespace PleskX\Api\Struct\Server\Statistics;

class Version extends \PleskX\Api\Struct
{

    /** @var string */
    public $internalName;

    /** @var string */
    public $version;

    /** @var string */
    public $os;

    /** @var string */
    public $os_version;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            ['plesk_name' => 'internalName'],
            ['plesk_version' => 'version'],
            ['plesk_os' => 'os'],
            ['plesk_os_version' => 'os_version'],
        ]);
    }
}
