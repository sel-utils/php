<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\clientbound\minecraft108;

use utils\Packet;

class ChatMessage extends Packet
{

    public const ID = 15;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // position
    public const CHAT = 0;
    public const SYSTEM_MESSAGE = 1;
    public const ABOVE_HOTBAR = 2;

    public $message;
    public $position;

    public function __constructor() {}

    public function __constructor($message, $position)
    {
        $this->message = $message;
        $this->position = $position;
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

