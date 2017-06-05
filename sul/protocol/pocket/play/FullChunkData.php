<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket113.xml
 */
namespace sul\protocol\play\pocket;

use utils\Packet;

class FullChunkData extends Packet
{

    public const ID = 58;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $data;

    public function __constructor() {}

    public function __constructor($position, \sul\protocol\pocket\types\ChunkData $data)
    {
        $this->position = $position;
        $this->data = $data;
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

