<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\serverbound\minecraft109;

use utils\Packet;

class ClientStatus extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const RESPAWN = 0;
    public const REQUEST_STATS = 1;
    public const OPEN_INVENTORY = 2;

    public $action;

    public function __constructor() {}

    public function __constructor($action)
    {
        $this->action = $action;
    }

}

