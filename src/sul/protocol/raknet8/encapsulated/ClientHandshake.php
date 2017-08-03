<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/raknet8.xml
 */
namespace sul\protocol\encapsulated\raknet8;

use utils\Packet;

class ClientHandshake extends Packet
{

    public const ID = 19;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $clientAddress;
    public $systemAddresses;
    public $pingId;
    public $clientId;

    public function __constructor() {}

    public function __constructor(\sul\protocol\raknet8\types\Address $clientAddress, $systemAddresses, $pingId, $clientId)
    {
        $this->clientAddress = $clientAddress;
        $this->systemAddresses = $systemAddresses;
        $this->pingId = $pingId;
        $this->clientId = $clientId;
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
