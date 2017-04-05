<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class ResourcePacksStackPacket extends Packet
{

    public const ID = 8;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $mustAccept;
    public $behaviourPacks;
    public $resourcePacks;

    public function __constructor() {}

    public function __constructor($mustAccept, \sul\protocol\pocket101\types\PackArray $behaviourPacks, \sul\protocol\pocket101\types\PackArray $resourcePacks)
    {
        $this->mustAccept = $mustAccept;
        $this->behaviourPacks = $behaviourPacks;
        $this->resourcePacks = $resourcePacks;
    }

}

