<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java338;

use utils\Packet;

class AdvancementProgress extends Packet
{

    public const ID = 55;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $notEmpty;
    public $identifier;

    public function __constructor() {}

    public function __constructor($notEmpty, $identifier)
    {
        $this->notEmpty = $notEmpty;
        $this->identifier = $identifier;
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

