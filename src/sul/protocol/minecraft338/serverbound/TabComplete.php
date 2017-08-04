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

class TabComplete extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $text;
    public $command;
    public $hasPosition;
    public $block;

    public function __constructor() {}

    public function __constructor($text, $command, $hasPosition, $block)
    {
        $this->text = $text;
        $this->command = $command;
        $this->hasPosition = $hasPosition;
        $this->block = $block;
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

