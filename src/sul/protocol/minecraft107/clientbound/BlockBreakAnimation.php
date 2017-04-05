<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class BlockBreakAnimation extends Packet
{

    public const ID = 8;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $position;
    public $stage;

    public function __constructor() {}

    public function __constructor($entityId, $position, $stage)
    {
        $this->entityId = $entityId;
        $this->position = $position;
        $this->stage = $stage;
    }

}

