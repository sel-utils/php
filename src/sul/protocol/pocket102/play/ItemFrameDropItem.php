<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class ItemFrameDropItem extends Packet
{

    public const ID = 70;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $item;

    public function __constructor() {}

    public function __constructor(\sul\protocol\pocket102\types\BlockPosition $position, \sul\protocol\pocket102\types\Slot $item)
    {
        $this->position = $position;
        $this->item = $item;
    }

}

