<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\clientbound\minecraft109;

use utils\Packet;

class BlockAction extends Packet
{

    public const ID = 10;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const NOTE_BLOCK_HARP = 0;
    public const NOTE_BLOCK_BASS_DRUM = 1;
    public const NOTE_BLOCK_SNARE_DRUM = 2;
    public const NOTE_BLOCK_CLICKS = 3;
    public const NOTE_BLOCK_STICKS = 3;
    public const NOTE_BLOCK_BASS_GUITAR = 4;
    public const PISTON_EXTEND = 0;
    public const PISTON_RETRACT = 1;
    public const CHEST_WATCHERS = 1;
    public const BEACON_RECALCULATE = 1;
    public const MOB_SPAWNER_RESET_DELAY = 1;
    public const END_GATEWAY_YELLOW_BEAM = 1;

    // parameter
    public const PISTON_DOWN = 0;
    public const PISTON_UP = 1;
    public const PISTON_SOUTH = 2;
    public const PISTON_WEST = 3;
    public const PISTON_NORTH = 4;
    public const PISTON_EAST = 5;

    public $position;
    public $action;
    public $parameter;
    public $blockType;

    public function __constructor() {}

    public function __constructor($position, $action, $parameter, $blockType)
    {
        $this->position = $position;
        $this->action = $action;
        $this->parameter = $parameter;
        $this->blockType = $blockType;
    }

}

