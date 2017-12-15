<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class PlayerInput extends Packet
{

    public const ID = 57;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $sideways;
    public $forward;
    public $unknown2;
    public $unknown3;

    public function __constructor() {}

    public function __constructor($sideways, $forward, $unknown2, $unknown3)
    {
        $this->sideways = $sideways;
        $this->forward = $forward;
        $this->unknown2 = $unknown2;
        $this->unknown3 = $unknown3;
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

