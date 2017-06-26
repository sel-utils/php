<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class Login extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // edition
    public const CLASSIC = 0;
    public const EDUCATION = 1;

    public $protocol;
    public $edition;
    public $body;

    public function __constructor() {}

    public function __constructor($protocol, $edition, $body)
    {
        $this->protocol = $protocol;
        $this->edition = $edition;
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
