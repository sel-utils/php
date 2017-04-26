<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\serverbound\minecraft316;

use utils\Packet;

class KeepAlive extends Packet
{

    public const ID = 11;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $id;

    public function __constructor() {}

    public function __constructor($id)
    {
        $this->id = $id;
    }

}

