<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\clientbound\minecraft107;

use utils\Packet;

class ConfirmTransaction extends Packet
{

    public const ID = 17;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $action;
    public $accepted;

    public function __constructor() {}

    public function __constructor($window, $action, $accepted)
    {
        $this->window = $window;
        $this->action = $action;
        $this->accepted = $accepted;
    }

}

