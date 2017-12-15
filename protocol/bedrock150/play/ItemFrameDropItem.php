<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class ItemFrameDropItem extends Packet
{

    public const ID = 71;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $item;

    public function __constructor() {}

    public function __constructor(\sul\protocol\bedrock150\types\BlockPosition $position, \sul\protocol\bedrock150\types\Slot $item)
    {
        $this->position = $position;
        $this->item = $item;
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

