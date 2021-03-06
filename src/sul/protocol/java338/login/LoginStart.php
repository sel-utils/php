<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\login\java338;

use utils\Packet;

class LoginStart extends Packet
{

    public const ID = 0;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $username;

    public function __constructor() {}

    public function __constructor($username)
    {
        $this->username = $username;
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

