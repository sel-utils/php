<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft315.xml
 */
namespace sul\protocol\clientbound\minecraft315;

use utils\Packet;

class SetExperience extends Packet
{

    public const ID = 61;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $experience;
    public $level;
    public $totalExperience;

    public function __constructor() {}

    public function __constructor($experience, $level, $totalExperience)
    {
        $this->experience = $experience;
        $this->level = $level;
        $this->totalExperience = $totalExperience;
    }

}

