<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class MobArmorEquipment extends Packet
{

    public const ID = 32;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $entityId;
    public $armor;

    public function __constructor() {}

    public function __constructor($entityId, $armor)
    {
        $this->entityId = $entityId;
        $this->armor = $armor;
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

