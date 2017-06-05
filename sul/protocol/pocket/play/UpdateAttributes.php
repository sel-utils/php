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

class UpdateAttributes extends Packet
{

    public const ID = 30;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $attributes;

    public function __constructor() {}

    public function __constructor($entityId, $attributes)
    {
        $this->entityId = $entityId;
        $this->attributes = $attributes;
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

