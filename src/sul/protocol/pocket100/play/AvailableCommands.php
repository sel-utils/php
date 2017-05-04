<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class AvailableCommands extends Packet
{

    public const ID = 77;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $commands;
    public $?;

    public function __constructor() {}

    public function __constructor($commands, $?)
    {
        $this->commands = $commands;
        $this->? = $?;
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

