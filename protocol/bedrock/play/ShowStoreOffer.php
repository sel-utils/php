<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class ShowStoreOffer extends Packet
{

    public const ID = 91;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $unknown0;
    public $unknown1;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($unknown0, $unknown1, $unknown2)
    {
        $this->unknown0 = $unknown0;
        $this->unknown1 = $unknown1;
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

