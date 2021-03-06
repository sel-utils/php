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

class PlayerList extends Packet
{

    public const ID = 63;

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

