<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft315.xml
 */
namespace sul\protocol\clientbound\minecraft315;

use utils\Packet;

class ResourcePackSend extends Packet
{

    public const ID = 50;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $url;
    public $hash;

    public function __constructor() {}

    public function __constructor($url, $hash)
    {
        $this->url = $url;
        $this->hash = $hash;
    }

}

