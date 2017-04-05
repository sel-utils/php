<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\clientbound\minecraft210;

use utils\Packet;

class ChunkData extends Packet
{

    public const ID = 32;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $full;
    public $sections;
    public $data;
    public $tilesCount;
    public $tiles;

    public function __constructor() {}

    public function __constructor($position, $full, $sections, $data, $tilesCount, $tiles)
    {
        $this->position = $position;
        $this->full = $full;
        $this->sections = $sections;
        $this->data = $data;
        $this->tilesCount = $tilesCount;
        $this->tiles = $tiles;
    }

}

