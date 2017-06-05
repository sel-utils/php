<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\clientbound\minecraft334;

use utils\Packet;

class AttachEntity extends Packet
{

    public const ID = 60;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $target;
    public $holder;

    public function __constructor() {}

    public function __constructor($target, $holder)
    {
        $this->target = $target;
        $this->holder = $holder;
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

