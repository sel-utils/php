<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket113.xml
 */
namespace sul\protocol\play\pocket113;

use utils\Packet;

class ClientboundMapItemData extends Packet
{

    public const ID = 67;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // update
    public const TEXTURE = 2;
    public const DECORATIONS = 4;
    public const ENTITIES = 8;

    public $mapId;
    public $update;
    public $scale;
    public $size;
    public $offset;
    public $data;
    public $decorations;

    public function __constructor() {}

    public function __constructor($mapId, $update, $scale, $size, $offset, $data, $decorations)
    {
        $this->mapId = $mapId;
        $this->update = $update;
        $this->scale = $scale;
        $this->size = $size;
        $this->offset = $offset;
        $this->data = $data;
        $this->decorations = $decorations;
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

