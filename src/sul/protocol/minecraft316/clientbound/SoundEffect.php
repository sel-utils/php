<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft316;

use utils\Packet;

class SoundEffect extends Packet
{

    public const ID = 70;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $soundId;
    public $category;
    public $position;
    public $volume;
    public $pitch;

    public function __constructor() {}

    public function __constructor($soundId, $category, $position, $volume, $pitch)
    {
        $this->soundId = $soundId;
        $this->category = $category;
        $this->position = $position;
        $this->volume = $volume;
        $this->pitch = $pitch;
    }

}

