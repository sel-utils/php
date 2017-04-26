<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\serverbound\minecraft210;

use utils\Packet;

class ChatMessage extends Packet
{

    public const ID = 2;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $text;

    public function __constructor() {}

    public function __constructor($text)
    {
        $this->text = $text;
    }

}

