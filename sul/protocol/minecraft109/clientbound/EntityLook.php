<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\clientbound\minecraft109;

use utils\Packet;

class EntityLook extends Packet
{

    public const ID = 39;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $yaw;
    public $pitch;
    public $onGround;

    public function __constructor() {}

    public function __constructor($entityId, $yaw, $pitch, $onGround)
    {
        $this->entityId = $entityId;
        $this->yaw = $yaw;
        $this->pitch = $pitch;
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

