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

class PluginMessage extends Packet
{

    public const ID = 24;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $channel;
    public $data;

    public function __constructor() {}

    public function __constructor($channel, $data)
    {
        $this->channel = $channel;
        $this->data = $data;
    }

}

