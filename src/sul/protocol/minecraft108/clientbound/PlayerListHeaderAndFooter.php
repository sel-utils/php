<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft108.xml
 */
namespace sul\protocol\clientbound\minecraft108;

use utils\Packet;

class PlayerListHeaderAndFooter extends Packet
{

    public const ID = 72;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $header;
    public $footer;

    public function __constructor() {}

    public function __constructor($header, $footer)
    {
        $this->header = $header;
        $this->footer = $footer;
    }

}

