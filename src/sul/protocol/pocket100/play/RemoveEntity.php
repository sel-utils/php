<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class RemoveEntity extends Packet
{

    public const ID = 15;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $entityId;

    public function __constructor() {}

    public function __constructor($entityId)
    {
        $this->entityId = $entityId;
    }

}

