<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class PlayerFall extends Packet
{

    public const ID = 38;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $distance;

    public function __constructor() {}

    public function __constructor($distance)
    {
        $this->distance = $distance;
    }

}

