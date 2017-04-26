<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class UpdateTrade extends Packet
{

    public const ID = 81;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $?;
    public $?;
    public $?;
    public $?;
    public $?;
    public $trader;
    public $player;
    public $?;
    public $offers;

    public function __constructor() {}

    public function __constructor($?, $?, $?, $?, $?, $trader, $player, $?, $offers)
    {
        $this->? = $?;
        $this->? = $?;
        $this->? = $?;
        $this->? = $?;
        $this->? = $?;
        $this->trader = $trader;
        $this->player = $player;
        $this->? = $?;
        $this->offers = $offers;
    }

}

