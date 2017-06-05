<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\serverbound\minecraft334;

use utils\Packet;

class SteerBoat extends Packet
{

    public const ID = 18;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $rightPaddleTurning;
    public $leftPaddleTurning;

    public function __constructor() {}

    public function __constructor($rightPaddleTurning, $leftPaddleTurning)
    {
        $this->rightPaddleTurning = $rightPaddleTurning;
        $this->leftPaddleTurning = $leftPaddleTurning;
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

