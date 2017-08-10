<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket132.xml
 */
namespace sul\protocol\play\pocket132;

use utils\Packet;

class HurtArmor extends Packet
{

    public const ID = 38;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $unknown0;

    public function __constructor() {}

    public function __constructor($unknown0)
    {
        $this->unknown0 = $unknown0;
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

