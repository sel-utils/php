<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/externalconsole1.xml
 */
namespace sul\protocol\connected\externalconsole1;

use utils\Packet;

class Command extends Packet
{

    public const ID = 5;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $command;

    public function __constructor() {}

    public function __constructor($command)
    {
        $this->command = $command;
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
