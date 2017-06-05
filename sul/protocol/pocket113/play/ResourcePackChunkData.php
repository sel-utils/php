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

class ResourcePackChunkData extends Packet
{

    public const ID = 84;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $id;
    public $chunkIndex;
    public $progress;
    public $data;

    public function __constructor() {}

    public function __constructor($id, $chunkIndex, $progress, ubyte[] $data)
    {
        $this->id = $id;
        $this->chunkIndex = $chunkIndex;
        $this->progress = $progress;
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

