<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket131.xml
 */
namespace sul\protocol\play\pocket131;

use utils\Packet;

class UpdateTrade extends Packet
{

    public const ID = 80;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $windowType = 15;
    public $unknown2;
    public $unknown3;
    public $willing;
    public $trader;
    public $player;
    public $displayName;
    public $offers;

    public function __constructor() {}

    public function __constructor($window, $windowType, $unknown2, $unknown3, $willing, $trader, $player, $displayName, $offers)
    {
        $this->window = $window;
        $this->windowType = $windowType;
        $this->unknown2 = $unknown2;
        $this->unknown3 = $unknown3;
        $this->willing = $willing;
        $this->trader = $trader;
        $this->player = $player;
        $this->displayName = $displayName;
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

