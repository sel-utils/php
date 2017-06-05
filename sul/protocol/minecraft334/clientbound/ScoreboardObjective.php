<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\clientbound\minecraft334;

use utils\Packet;

class ScoreboardObjective extends Packet
{

    public const ID = 65;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // mode
    public const CREATE = 0;
    public const REMOVE = 1;
    public const UPDATE = 2;

    // type
    public const NUMERIC = "integer";
    public const GRAPHIC = "hearts";

    public $name;
    public $mode;
    public $value;
    public $type;

    public function __constructor() {}

    public function __constructor($name, $mode, $value, $type)
    {
        $this->name = $name;
        $this->mode = $mode;
        $this->value = $value;
        $this->type = $type;
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

