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

class SetEntityLink extends Packet
{

    public const ID = 41;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const REMOVE = 0;
    public const ADD = 1;

    public $vehicle;
    public $passenger;
    public $action;

    public function __constructor() {}

    public function __constructor($vehicle, $passenger, $action)
    {
        $this->vehicle = $vehicle;
        $this->passenger = $passenger;
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

