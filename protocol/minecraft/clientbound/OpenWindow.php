<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class OpenWindow extends Packet
{

    public const ID = 19;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $type;
    public $title;
    public $slots;

    public function __constructor() {}

    public function __constructor($window, $type, $title, $slots)
    {
        $this->window = $window;
        $this->type = $type;
        $this->title = $title;
        $this->slots = $slots;
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

