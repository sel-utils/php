<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock137;

use utils\Packet;

class SetDefaultGameType extends Packet
{

    public const ID = 105;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // game type
    public const SURVIVAL = 0;
    public const CREATIVE = 1;
    public const ADVENTURE = 2;

    public $gameType;

    public function __constructor() {}

    public function __constructor($gameType)
    {
        $this->gameType = $gameType;
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

