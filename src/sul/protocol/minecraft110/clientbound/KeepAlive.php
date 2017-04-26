<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\clientbound\minecraft110;

use utils\Packet;

class KeepAlive extends Packet
{

    public const ID = 31;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $id;

    public function __constructor() {}

    public function __constructor($id)
    {
        $this->id = $id;
    }

}

