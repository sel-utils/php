<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket111.xml
 */
namespace sul\protocol\play\pocket111;

use utils\Packet;

class SpawnExperienceOrb extends Packet
{

    public const ID = 66;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $position;
    public $count;

    public function __constructor() {}

    public function __constructor($position, $count)
    {
        $this->position = $position;
        $this->count = $count;
    }

}

