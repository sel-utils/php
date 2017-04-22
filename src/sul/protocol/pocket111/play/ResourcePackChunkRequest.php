<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket111.xml
 */
namespace sul\protocol\play\pocket111;

use utils\Packet;

class ResourcePackChunkRequest extends Packet
{

    public const ID = 85;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $id;
    public $chunkIndex;

    public function __constructor() {}

    public function __constructor($id, $chunkIndex)
    {
        $this->id = $id;
        $this->chunkIndex = $chunkIndex;
    }

}
