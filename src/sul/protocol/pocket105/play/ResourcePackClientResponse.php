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

class ResourcePackClientResponse extends Packet
{

    public const ID = 9;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // status
    public const REFUSED = 1;
    public const SEND_PACKS = 2;
    public const HAVE_ALL_PACKS = 3;
    public const COMPLETED = 4;

    public $status;
    public $packIds;

    public function __constructor() {}

    public function __constructor($status, \sul\protocol\pocket105\types\PackIds $packIds)
    {
        $this->status = $status;
        $this->packIds = $packIds;
    }

}

