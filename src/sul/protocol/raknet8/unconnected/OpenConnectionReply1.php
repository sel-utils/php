<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\unconnected\raknet8;

use utils\Packet;

class OpenConnectionReply1 extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $magic;
    public $serverId;
    public $security;
    public $mtuLength;

    public function __constructor() {}

    public function __constructor($magic, $serverId, $security, $mtuLength)
    {
        $this->magic = $magic;
        $this->serverId = $serverId;
        $this->security = $security;
        $this->mtuLength = $mtuLength;
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
