<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket131.xml
 */
namespace sul\protocol\play\pocket131;

use utils\Packet;

class Transfer extends Packet
{

    public const ID = 85;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $ip;
    public $port = 19132;

    public function __constructor() {}

    public function __constructor($ip, $port)
    {
        $this->ip = $ip;
        $this->port = $port;
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

