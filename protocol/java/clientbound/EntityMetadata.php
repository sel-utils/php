<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java;

use utils\Packet;

class EntityMetadata extends Packet
{

    public const ID = 60;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;
    public $metadata;

    public function __constructor() {}

    public function __constructor($entityId, \sul\metadata\java\Metadata $metadata)
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

