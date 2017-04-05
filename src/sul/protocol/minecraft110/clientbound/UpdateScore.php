<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\clientbound\minecraft110;

use utils\Packet;

class UpdateScore extends Packet
{

    public const ID = 66;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const UPDATE = 0;
    public const REMOVE = 1;

    public $scoreName;
    public $action;
    public $objectiveName;
    public $value;

    public function __constructor() {}

    public function __constructor($scoreName, $action, $objectiveName, $value)
    {
        $this->scoreName = $scoreName;
        $this->action = $action;
        $this->objectiveName = $objectiveName;
        $this->value = $value;
    }

}

