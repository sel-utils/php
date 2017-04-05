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

class Text extends Packet
{

    public const ID = 10;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $type;

    public function __constructor() {}

    public function __constructor($type)
    {
        $this->type = $type;
    }

}

