<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket112.xml
 */
namespace sul\protocol\play\pocket112;

use utils\Packet;

class PlayerInput extends Packet
{

    public const ID = 57;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $motion;
    public $flags;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($motion, $flags, $unknown2)
    {
        $this->motion = $motion;
        $this->flags = $flags;
        $this->unknown2 = $unknown2;
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

