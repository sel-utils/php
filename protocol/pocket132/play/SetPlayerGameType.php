<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket132.xml
 */
namespace sul\protocol\play\pocket132;

use utils\Packet;

class SetPlayerGameType extends Packet
{

    public const ID = 62;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // gamemode
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;

    public $gamemode;

    public function __constructor() {}

    public function __constructor($gamemode)
    {
        $this->gamemode = $gamemode;
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

