<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class AddHangingEntity extends Packet
{

    public const ID = 17;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $runtimeId;
    public $position;
    public $?;

    public function __constructor() {}

    public function __constructor($entityId, $runtimeId, \sul\protocol\pocket105\types\BlockPosition $position, $?)
    {
        $this->entityId = $entityId;
        $this->runtimeId = $runtimeId;
        $this->position = $position;
        $this->? = $?;
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

