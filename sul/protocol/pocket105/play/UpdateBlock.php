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

class UpdateBlock extends Packet
{

    public const ID = 23;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // flags and meta
    public const NEIGHBORS = 1;
    public const NETWORK = 2;
    public const NO_GRAPHIC = 4;
    public const PRIORITY = 8;

    public $position;
    public $block;
    public $flagsAndMeta;

    public function __constructor() {}

    public function __constructor(\sul\protocol\pocket105\types\BlockPosition $position, $block, $flagsAndMeta)
    {
        $this->position = $position;
        $this->block = $block;
        $this->flagsAndMeta = $flagsAndMeta;
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

