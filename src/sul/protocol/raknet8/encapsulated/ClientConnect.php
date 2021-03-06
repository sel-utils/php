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

class ClientConnect extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $clientId;
    public $pingId;

    public function __constructor() {}

    public function __constructor($clientId, $pingId)
    {
        $this->clientId = $clientId;
        $this->pingId = $pingId;
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

