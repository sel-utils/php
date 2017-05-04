<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class ResourcePacksInfo extends Packet
{

    public const ID = 7;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $mustAccept;
    public $behaviourPacks;
    public $resourcePacks;

    public function __constructor() {}

    public function __constructor($mustAccept, \sul\protocol\pocket101\types\PackWithSizeArray $behaviourPacks, \sul\protocol\pocket101\types\PackWithSizeArray $resourcePacks)
    {
        $this->mustAccept = $mustAccept;
        $this->behaviourPacks = $behaviourPacks;
        $this->resourcePacks = $resourcePacks;
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

