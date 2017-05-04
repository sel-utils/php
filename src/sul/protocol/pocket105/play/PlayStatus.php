<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class PlayStatus extends Packet
{

    public const ID = 2;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // status
    public const OK = 0;
    public const OUTDATED_CLIENT = 1;
    public const OUTDATED_SERVER = 2;
    public const SPAWNED = 3;
    public const INVALID_TENANT = 4;
    public const EDITION_MISMATCH = 5;

    public $status;

    public function __constructor() {}

    public function __constructor($status)
    {
        $this->status = $status;
    }

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {

    }

    public function decode()
    {}

}

