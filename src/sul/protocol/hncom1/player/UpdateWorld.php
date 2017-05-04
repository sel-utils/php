<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\player\hncom1;

use utils\Packet;

class UpdateWorld extends Packet
{

    public const ID = 20;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $hubId;
    public $world;
    public $dimension;

    public function __constructor() {}

    public function __constructor($hubId, $world, $dimension)
    {
        $this->hubId = $hubId;
        $this->world = $world;
        $this->dimension = $dimension;
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

