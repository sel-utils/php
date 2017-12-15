<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class Login extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $protocol = 150;
    public $body;

    public function __constructor() {}

    public function __constructor($protocol, \sul\protocol\bedrock150\types\LoginBody $body)
    {
        $this->protocol = $protocol;
        $this->body = $body;
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

