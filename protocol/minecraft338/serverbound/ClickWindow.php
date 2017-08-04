<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\serverbound\minecraft338;

use utils\Packet;

class ClickWindow extends Packet
{

    public const ID = 7;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;
    public $slot;
    public $button;
    public $action;
    public $mode;
    public $clickedItem;

    public function __constructor() {}

    public function __constructor($window, $slot, $button, $action, $mode, \sul\protocol\minecraft338\types\Slot $clickedItem)
    {
        $this->window = $window;
        $this->slot = $slot;
        $this->button = $button;
        $this->action = $action;
        $this->mode = $mode;
        $this->clickedItem = $clickedItem;
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

