<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java340.xml
 */
namespace sul\protocol\serverbound\java;

use utils\Packet;

class AdvencementTab extends Packet
{

    public const ID = 25;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // action
    public const OPEN_TAB = 0;
    public const CLOSE_SCREEN = 1;

    public $action;
    public $tab;

    public function __constructor() {}

    public function __constructor($action, $tab)
    {
        $this->action = $action;
        $this->tab = $tab;
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

