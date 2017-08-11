<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\serverbound\java338;

use utils\Packet;

class EnchantItem extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;
    public $enchantment;

    public function __constructor() {}

    public function __constructor($window, $enchantment)
    {
        $this->window = $window;
        $this->enchantment = $enchantment;
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

