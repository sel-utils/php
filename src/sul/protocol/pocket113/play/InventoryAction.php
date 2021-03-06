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

class InventoryAction extends Packet
{

    public const ID = 47;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $action;
    public $item;
    public $unknown2;
    public $unknown3;

    public function __constructor() {}

    public function __constructor($action, \sul\protocol\pocket113\types\Slot $item, $unknown2, $unknown3)
    {
        $this->action = $action;
        $this->item = $item;
        $this->unknown2 = $unknown2;
        $this->unknown3 = $unknown3;
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

