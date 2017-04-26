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

class SpawnPainting extends Packet
{

    public const ID = 4;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // direction
    public const SOUTH = 0;
    public const WEST = 1;
    public const NORTH = 2;
    public const EAST = 3;

    public $entityId;
    public $uuid;
    public $title;
    public $position;
    public $direction;

    public function __constructor() {}

    public function __constructor($entityId, $uuid, $title, $position, $direction)
    {
        $this->entityId = $entityId;
        $this->uuid = $uuid;
        $this->title = $title;
        $this->position = $position;
        $this->direction = $direction;
    }

}

