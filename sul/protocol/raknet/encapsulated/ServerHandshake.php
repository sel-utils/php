<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\encapsulated\raknet;

use utils\Packet;

class ServerHandshake extends Packet
{

    public const ID = 16;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $clientAddress;
    public $mtuLength;
    public $systemAddresses;
    public $pingId;
    public $serverId;

    public function __constructor() {}

    public function __constructor(\sul\protocol\raknet\types\Address $clientAddress, $mtuLength, $systemAddresses, $pingId, $serverId)
    {
        $this->clientAddress = $clientAddress;
        $this->mtuLength = $mtuLength;
        $this->systemAddresses = $systemAddresses;
        $this->pingId = $pingId;
        $this->serverId = $serverId;
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

