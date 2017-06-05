<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\serverbound\minecraft108;

use utils\Packet;

class UseEntity extends Packet
{

    public const ID = 10;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // type
    public const INTERACT = 0;
    public const ATTACK = 1;
    public const INTERACT_AT = 2;

    // hand
    public const MAIN_HAND = 0;
    public const OFF_HAND = 1;

    public $target;
    public $type;
    public $targetPosition;
    public $hand;

    public function __constructor() {}

    public function __constructor($target, $type, $targetPosition, $hand)
    {
        $this->target = $target;
        $this->type = $type;
        $this->targetPosition = $targetPosition;
        $this->hand = $hand;
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
