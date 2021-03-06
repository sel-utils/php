<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class SetSpawnPosition extends Packet
{

    public const ID = 44;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $unknown0;
    public $position;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($unknown0, \sul\protocol\pocket105\types\BlockPosition $position, $unknown2)
    {
        $this->unknown0 = $unknown0;
        $this->position = $position;
        $this->unknown2 = $unknown2;
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

