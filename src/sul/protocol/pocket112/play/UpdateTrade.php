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

class UpdateTrade extends Packet
{

    public const ID = 81;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $unknown0;
    public $unknown1;
    public $unknown2;
    public $unknown3;
    public $unknown4;
    public $trader;
    public $player;
    public $unknown7;
    public $offers;

    public function __constructor() {}

    public function __constructor($unknown0, $unknown1, $unknown2, $unknown3, $unknown4, $trader, $player, $unknown7, $offers)
    {
        $this->unknown0 = $unknown0;
        $this->unknown1 = $unknown1;
        $this->unknown2 = $unknown2;
        $this->unknown3 = $unknown3;
        $this->unknown4 = $unknown4;
        $this->trader = $trader;
        $this->player = $player;
        $this->unknown7 = $unknown7;
        $this->offers = $offers;
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

