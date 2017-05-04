<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\world\hncom2;

use utils\Packet;

class UpdateGamemode extends Packet
{

    public const ID = 34;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $worldId;
    public $gamemode;

    public function __constructor() {}

    public function __constructor($worldId, $gamemode)
    {
        $this->worldId = $worldId;
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

