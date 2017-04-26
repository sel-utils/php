<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\clientbound\minecraft109;

use utils\Packet;

class BossBar extends Packet
{

    public const ID = 12;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $uuid;
    public $action;

    public function __constructor() {}

    public function __constructor($uuid, $action)
    {
        $this->uuid = $uuid;
        $this->action = $action;
    }

}

