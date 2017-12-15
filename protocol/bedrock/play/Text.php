<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class Text extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $type;
    public $unknown1;

    public function __constructor() {}

    public function __constructor($type, $unknown1)
    {
        $this->type = $type;
        $this->unknown1 = $unknown1;
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

