<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class FullChunkData extends Packet
{

    public const ID = 59;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $data;

    public function __constructor() {}

    public function __constructor($position, \sul\protocol\pocket105\types\ChunkData $data)
    {
        $this->position = $position;
        $this->data = $data;
    }

}

