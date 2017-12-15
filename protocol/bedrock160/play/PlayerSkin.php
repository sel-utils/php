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

class PlayerSkin extends Packet
{

    public const ID = 93;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $uuid;
    public $skinId;
    public $skinName;
    public $unknown3;
    public $skinData;
    public $capeData;
    public $geometryModel;
    public $geometryData;

    public function __constructor() {}

    public function __constructor(\sul\protocol\bedrock160\types\McpeUuid $uuid, $skinId, $skinName, $unknown3, $skinData, $capeData, $geometryModel, $geometryData)
    {
        $this->uuid = $uuid;
        $this->skinId = $skinId;
        $this->skinName = $skinName;
        $this->unknown3 = $unknown3;
        $this->skinData = $skinData;
        $this->capeData = $capeData;
        $this->geometryModel = $geometryModel;
        $this->geometryData = $geometryData;
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

