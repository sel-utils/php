<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\status\hncom1;

use utils\Packet;

class RemoveNode extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $hubId;

    public function __constructor() {}

    public function __constructor($hubId)
    {
        $this->hubId = $hubId;
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

