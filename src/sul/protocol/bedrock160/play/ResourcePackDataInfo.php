<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class ResourcePackDataInfo extends Packet
{

    public const ID = 82;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $id;
    public $maxChunkSize;
    public $chunkCount;
    public $compressedPackSize;
    public $sha256;

    public function __constructor() {}

    public function __constructor($id, $maxChunkSize, $chunkCount, $compressedPackSize, $sha256)
    {
        $this->id = $id;
        $this->maxChunkSize = $maxChunkSize;
        $this->chunkCount = $chunkCount;
        $this->compressedPackSize = $compressedPackSize;
        $this->sha256 = $sha256;
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

