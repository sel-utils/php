<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\player\hncom2;

use utils\Packet;

class UpdateDisplayName extends Packet
{

    public const ID = 21;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $hubId;
    public $displayName;

    public function __constructor() {}

    public function __constructor($hubId, $displayName)
    {
        $this->hubId = $hubId;
        $this->displayName = $displayName;
    }

}

