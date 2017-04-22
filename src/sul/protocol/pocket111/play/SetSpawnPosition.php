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

class SetSpawnPosition extends Packet
{

    public const ID = 43;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $?;
    public $position;
    public $?;

    public function __constructor() {}

    public function __constructor($?, \sul\protocol\pocket111\types\BlockPosition $position, $?)
    {
        $this->? = $?;
        $this->position = $position;
        $this->? = $?;
    }

}
