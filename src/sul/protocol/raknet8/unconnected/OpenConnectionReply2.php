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

class OpenConnectionReply2 extends Packet
{

    public const ID = 8;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $magic;
    public $serverId;
    public $clientAddress;
    public $mtuLength;
    public $security;

    public function __constructor() {}

    public function __constructor($magic, $serverId, \sul\protocol\raknet8\types\Address $clientAddress, $mtuLength, $security)
    {
        $this->magic = $magic;
        $this->serverId = $serverId;
        $this->clientAddress = $clientAddress;
        $this->mtuLength = $mtuLength;
        $this->security = $security;
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
