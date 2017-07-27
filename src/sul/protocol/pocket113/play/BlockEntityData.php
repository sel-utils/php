<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket113.xml
 */
namespace sul\protocol\play\pocket113;

use utils\Packet;

class BlockEntityData extends Packet
{

    public const ID = 56;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $position;
    public $nbt;

    public function __constructor() {}

    public function __constructor(\sul\protocol\pocket113\types\BlockPosition $position, $nbt)
    {
        $this->position = $position;
        $this->nbt = $nbt;
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

