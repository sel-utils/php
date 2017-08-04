<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket131.xml
 */
namespace sul\protocol\play\pocket131;

use utils\Packet;

class SetEntityData extends Packet
{

    public const ID = 39;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $metadata;

    public function __constructor() {}

    public function __constructor($entityId, \sul\metadata\pocket131\Metadata $metadata)
    {
        $this->entityId = $entityId;
        $this->metadata = $metadata;
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

