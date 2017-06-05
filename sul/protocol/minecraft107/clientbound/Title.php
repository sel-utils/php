<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class Title extends Packet
{

    public const ID = 69;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $action;

    public function __constructor() {}

    public function __constructor($action)
    {
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

