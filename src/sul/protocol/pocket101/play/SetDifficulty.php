<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class SetDifficulty extends Packet
{

    public const ID = 60;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // difficulty
    public const PEACEFUL = 0;
    public const EASY = 1;
    public const NORMAL = 2;
    public const HARD = 3;

    public $difficulty;

    public function __constructor() {}

    public function __constructor($difficulty)
    {
        $this->difficulty = $difficulty;
    }

}

