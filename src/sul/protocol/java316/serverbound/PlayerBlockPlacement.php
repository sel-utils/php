<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java316.xml
 */
namespace sul\protocol\serverbound\java316;

use utils\Packet;

class PlayerBlockPlacement extends Packet
{

    public const ID = 28;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // hand
    public const MAIN_HAND = 0;
    public const OFF_HAND = 1;

    public $position;
    public $face;
    public $hand;
    public $cursorPosition;

    public function __constructor() {}

    public function __constructor($position, $face, $hand, $cursorPosition)
    {
        $this->position = $position;
        $this->face = $face;
        $this->hand = $hand;
        $this->cursorPosition = $cursorPosition;
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

