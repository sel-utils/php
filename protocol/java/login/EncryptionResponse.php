<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\login\java;

use utils\Packet;

class EncryptionResponse extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $sharedSecret;
    public $verifyToken;

    public function __constructor() {}

    public function __constructor($sharedSecret, $verifyToken)
    {
        $this->sharedSecret = $sharedSecret;
        $this->verifyToken = $verifyToken;
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
