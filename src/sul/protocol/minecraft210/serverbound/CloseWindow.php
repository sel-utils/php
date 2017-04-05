<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\serverbound\minecraft210;

use utils\Packet;

class CloseWindow extends Packet
{

    public const ID = 8;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;

    public function __constructor() {}

    public function __constructor($window)
    {
        $this->window = $window;
    }

}

