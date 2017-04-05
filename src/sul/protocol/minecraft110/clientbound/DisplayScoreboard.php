<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\clientbound\minecraft110;

use utils\Packet;

class DisplayScoreboard extends Packet
{

    public const ID = 56;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // position
    public const LIST = 0;
    public const SIDEBAR = 1;
    public const BELOW_NAME = 2;

    public $position;
    public $scoreName;

    public function __constructor() {}

    public function __constructor($position, $scoreName)
    {
        $this->position = $position;
        $this->scoreName = $scoreName;
    }

}

