<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft335.xml
 */
namespace sul\protocol\clientbound\minecraft335;

use utils\Packet;

class EntityRelativeMove extends Packet
{

    public const ID = 38;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $delta;
    public $onGround;

    public function __constructor() {}

    public function __constructor($entityId, $delta, $onGround)
    {
        $this->entityId = $entityId;
        $this->delta = $delta;
        $this->onGround = $onGround;
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

