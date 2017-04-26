<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class DropItem extends Packet
{

    public const ID = 46;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const DROP = 0;

    public $action;
    public $item;

    public function __constructor() {}

    public function __constructor($action, \sul\protocol\pocket101\types\Slot $item)
    {
        $this->action = $action;
        $this->item = $item;
    }

}

