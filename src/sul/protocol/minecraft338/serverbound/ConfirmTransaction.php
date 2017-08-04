<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft338.xml
 */
namespace sul\protocol\serverbound\minecraft338;

use utils\Packet;

class ConfirmTransaction extends Packet
{

    public const ID = 5;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;
    public $action;
    public $accepted;

    public function __constructor() {}

    public function __constructor($window, $action, $accepted)
    {
        $this->window = $window;
        $this->action = $action;
        $this->accepted = $accepted;
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

