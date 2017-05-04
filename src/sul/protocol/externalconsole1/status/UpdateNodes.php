<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/externalconsole1.xml
 */
namespace sul\protocol\status\externalconsole1;

use utils\Packet;

class UpdateNodes extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const ADD = 0;
    public const REMOVE = 1;

    public $action;
    public $node;

    public function __constructor() {}

    public function __constructor($action, $node)
    {
        $this->action = $action;
        $this->node = $node;
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

