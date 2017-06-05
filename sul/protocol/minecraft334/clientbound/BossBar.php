<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\clientbound\minecraft334;

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

