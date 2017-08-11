<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java315.xml
 */
namespace sul\protocol\clientbound\java315;

use utils\Packet;

class PlayerListHeaderAndFooter extends Packet
{

    public const ID = 71;

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

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {


    }

    public function decode()
    {}

}

