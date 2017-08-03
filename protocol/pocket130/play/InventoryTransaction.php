<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket130.xml
 */
namespace sul\protocol\play\pocket130;

use utils\Packet;

class InventoryTransaction extends Packet
{

    public const ID = 30;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;



    public function __constructor() {}

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

