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

class MobEffect extends Packet
{

    public const ID = 29;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // event id
    public const ADD = 1;
    public const MODIFY = 2;
    public const REMOVE = 3;

    public $entityId;
    public $eventId;
    public $effect;
    public $amplifier;
    public $particles;
    public $duration;

    public function __constructor() {}

    public function __constructor($entityId, $eventId, $effect, $amplifier, $particles, $duration)
    {
        $this->entityId = $entityId;
        $this->eventId = $eventId;
        $this->effect = $effect;
        $this->amplifier = $amplifier;
        $this->particles = $particles;
        $this->duration = $duration;
    }

}
