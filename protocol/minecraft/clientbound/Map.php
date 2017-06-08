<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft335.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class Map extends Packet
{

    public const ID = 36;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $mapId;
    public $scale;
    public $showIcons;
    public $icons;
    public $colums;
    public $rows;
    public $offset;
    public $data;

    public function __constructor() {}

    public function __constructor($mapId, $scale, $showIcons, $icons, $colums, $rows, $offset, $data)
    {
        $this->mapId = $mapId;
        $this->scale = $scale;
        $this->showIcons = $showIcons;
        $this->icons = $icons;
        $this->colums = $colums;
        $this->rows = $rows;
        $this->offset = $offset;
        $this->data = $data;
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

