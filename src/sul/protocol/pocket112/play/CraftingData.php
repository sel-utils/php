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

class CraftingData extends Packet
{

    public const ID = 53;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $recipes;

    public function __constructor() {}

    public function __constructor($recipes)
    {
        $this->recipes = $recipes;
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

