<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class InventoryAction extends Packet
{

    public const ID = 47;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $action;
    public $item;

    public function __constructor() {}

    public function __constructor($action, \sul\protocol\pocket100\types\Slot $item)
    {
        $this->action = $action;
        $this->item = $item;
    }

}

