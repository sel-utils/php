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

class SetEntityLink extends Packet
{

    public const ID = 41;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const ADD = 0;
    public const RIDE = 1;
    public const REMOVE = 2;

    public $from;
    public $to;
    public $action;

    public function __constructor() {}

    public function __constructor($from, $to, $action)
    {
        $this->from = $from;
        $this->to = $to;
        $this->action = $action;
    }

}
