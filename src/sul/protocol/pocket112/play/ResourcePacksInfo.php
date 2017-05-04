<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket112.xml
 */
namespace sul\protocol\play\pocket112;

use utils\Packet;

class ResourcePacksInfo extends Packet
{

    public const ID = 6;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $mustAccept;
    public $behaviourPacks;
    public $resourcePacks;

    public function __constructor() {}

    public function __constructor($mustAccept, $behaviourPacks, $resourcePacks)
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

