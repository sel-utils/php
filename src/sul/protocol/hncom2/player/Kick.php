<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\player\hncom2;

use utils\Packet;

class Kick extends Packet
{

    public const ID = 19;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $hubId;
    public $reason;
    public $translation;
    public $parameters;

    public function __constructor() {}

    public function __constructor($hubId, $reason, $translation, $parameters)
    {
        $this->hubId = $hubId;
        $this->reason = $reason;
        $this->translation = $translation;
        $this->parameters = $parameters;
    }

}

