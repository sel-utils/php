<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class UseItem extends Packet
{

    public const ID = 36;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $blockPosition;
    public $hotbarSlot;
    public $face;
    public $facePosition;
    public $position;
    public $slot;
    public $item;

    public function __constructor() {}

    public function __constructor(\sul\protocol\pocket105\types\BlockPosition $blockPosition, $hotbarSlot, $face, $facePosition, $position, $slot, \sul\protocol\pocket105\types\Slot $item)
    {
        $this->blockPosition = $blockPosition;
        $this->hotbarSlot = $hotbarSlot;
        $this->face = $face;
        $this->facePosition = $facePosition;
        $this->position = $position;
        $this->slot = $slot;
        $this->item = $item;
    }

}

