<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\status\hncom2;

use utils\Packet;

class ResourcesUsage extends Packet
{

    public const ID = 12;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $tps;
    public $ram;
    public $cpu;

    public function __constructor() {}

    public function __constructor($tps, $ram, $cpu)
    {
        $this->tps = $tps;
        $this->ram = $ram;
        $this->cpu = $cpu;
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

