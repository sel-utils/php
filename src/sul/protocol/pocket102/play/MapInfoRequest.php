<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class MapInfoRequest extends Packet
{

    public const ID = 67;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $mapId;

    public function __constructor() {}

    public function __constructor($mapId)
    {
        $this->mapId = $mapId;
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

