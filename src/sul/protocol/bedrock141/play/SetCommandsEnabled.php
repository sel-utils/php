<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock141.xml
 */
namespace sul\protocol\play\bedrock141;

use utils\Packet;

class SetCommandsEnabled extends Packet
{

    public const ID = 59;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $enabled;

    public function __constructor() {}

    public function __constructor($enabled)
    {
        $this->enabled = $enabled;
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

