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

class SetEntityLink extends Packet
{

    public const ID = 41;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const ADD = 0;
    public const RIDE = 1;
    public const REMOVE = 2;

    public $from;
    public $to;
    public $action;

    public function __constructor() {}

    public function __constructor($from, $to, $action)
    {
        $this->from = $from;
        $this->to = $to;
        $this->action = $action;
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

