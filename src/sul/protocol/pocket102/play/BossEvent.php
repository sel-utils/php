<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class BossEvent extends Packet
{

    public const ID = 75;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // event id
    public const ADD = 0;
    public const UPDATE = 1;
    public const REMOVE = 2;

    public $entityId;
    public $eventId;

    public function __constructor() {}

    public function __constructor($entityId, $eventId)
    {
        $this->entityId = $entityId;
        $this->eventId = $eventId;
    }

}

