<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket110.xml
 */
namespace sul\protocol\play\pocket110;

use utils\Packet;

class ChangeDimension extends Packet
{

    public const ID = 61;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // dimension
    public const OVERWORLD = 0;
    public const NETHER = 1;
    public const END = 2;

    public $dimension;
    public $position;
    public $?;

    public function __constructor() {}

    public function __constructor($dimension, $position, $?)
    {
        $this->dimension = $dimension;
        $this->position = $position;
        $this->? = $?;
    }

}

