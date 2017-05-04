<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\player\hncom1;

use utils\Packet;

class GamePacket extends Packet
{

    public const ID = 26;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $hubId;
    public $packet;

    public function __constructor() {}

    public function __constructor($hubId, $packet)
    {
        $this->hubId = $hubId;
        $this->packet = $packet;
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

