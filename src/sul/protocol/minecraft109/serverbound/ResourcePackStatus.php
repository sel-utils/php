<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\serverbound\minecraft109;

use utils\Packet;

class ResourcePackStatus extends Packet
{

    public const ID = 22;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // result
    public const LOADED = 0;
    public const DECLINED = 1;
    public const FAILED = 2;
    public const ACCEPTED = 3;

    public $hash;
    public $result;

    public function __constructor() {}

    public function __constructor($hash, $result)
    {
        $this->hash = $hash;
        $this->result = $result;
    }

}

