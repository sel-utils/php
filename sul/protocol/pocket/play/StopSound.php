<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket113.xml
 */
namespace sul\protocol\play\pocket;

use utils\Packet;

class StopSound extends Packet
{

    public const ID = 88;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $name;
    public $stopAll;

    public function __constructor() {}

    public function __constructor($name, $stopAll)
    {
        $this->name = $name;
        $this->stopAll = $stopAll;
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

