<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class ServerToClientHandshake extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $serverPublicKey;
    public $token;

    public function __constructor() {}

    public function __constructor($serverPublicKey, $token)
    {
        $this->serverPublicKey = $serverPublicKey;
        $this->token = $token;
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

