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

class PlayerListItem extends Packet
{

    public const ID = 45;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $action;

    public function __constructor() {}

    public function __constructor($action)
    {
        $this->action = $action;
    }

}

