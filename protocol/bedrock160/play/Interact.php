<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class Interact extends Packet
{

    public const ID = 33;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const LEAVE_VEHICLE = 3;
    public const HOVER = 4;
    public const OPEN_INVENTORY = 6;

    public $action;
    public $target;
    public $targetPosition;

    public function __constructor() {}

    public function __constructor($action, $target, $targetPosition)
    {
        $this->action = $action;
        $this->target = $target;
        $this->targetPosition = $targetPosition;
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

