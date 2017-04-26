<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class Transfer extends Packet
{

    public const ID = 83;

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

}

