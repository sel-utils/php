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

class MessageServerbound extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $addressees;
    public $payload;

    public function __constructor() {}

    public function __constructor($addressees, $payload)
    {
        $this->addressees = $addressees;
        $this->payload = $payload;
    }

}

