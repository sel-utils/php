<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class AdventureSettings extends Packet
{

    public const ID = 55;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // flags
    public const IMMUTABLE_WORLD = 1;
    public const PVP_DISABLED = 2;
    public const PVM_DISABLED = 4;
    public const MVP_DISBALED = 8;
    public const EVP_DISABLED = 16;
    public const AUTO_JUMP = 32;
    public const ALLOW_FLIGHT = 64;
    public const NO_CLIP = 128;
    public const FLYING = 512;

    // permissions
    public const USER = 0;
    public const OPERATOR = 1;
    public const HOST = 2;
    public const AUTOMATION = 3;
    public const ADMIN = 4;

    public $flags;
    public $permissions;

    public function __constructor() {}

    public function __constructor($flags, $permissions)
    {
        $this->flags = $flags;
        $this->permissions = $permissions;
    }

}

