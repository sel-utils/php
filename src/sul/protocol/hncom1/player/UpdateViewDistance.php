<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\player\hncom1;

use utils\Packet;

class UpdateViewDistance extends Packet
{

    public const ID = 21;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $hubId;
    public $viewDistance;

    public function __constructor() {}

    public function __constructor($hubId, $viewDistance)
    {
        $this->hubId = $hubId;
        $this->viewDistance = $viewDistance;
    }

}

