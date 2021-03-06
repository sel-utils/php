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

class ShowCredits extends Packet
{

    public const ID = 77;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // status
    public const START = 0;
    public const END = 1;

    public $entityId;
    public $status;

    public function __constructor() {}

    public function __constructor($entityId, $status)
    {
        $this->entityId = $entityId;
        $this->status = $status;
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

