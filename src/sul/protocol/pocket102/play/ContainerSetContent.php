<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class ContainerSetContent extends Packet
{

    public const ID = 52;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $slots;
    public $hotbar;

    public function __constructor() {}

    public function __constructor($window, $slots, $hotbar)
    {
        $this->window = $window;
        $this->slots = $slots;
        $this->hotbar = $hotbar;
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

