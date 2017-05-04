<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket112.xml
 */
namespace sul\protocol\play\pocket112;

use utils\Packet;

class RemoveBlock extends Packet
{

    public const ID = 21;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $position;

    public function __constructor() {}

    public function __constructor(\sul\protocol\pocket112\types\BlockPosition $position)
    {
        $this->position = $position;
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

