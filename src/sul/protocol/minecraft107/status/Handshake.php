<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft107.xml
 */
namespace sul\protocol\status\minecraft107;

use utils\Packet;

class Handshake extends Packet
{

    public const ID = 0;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // next
    public const STATUS = 1;
    public const LOGIN = 2;

    public $protocol;
    public $serverAddress;
    public $serverPort;
    public $next;

    public function __constructor() {}

    public function __constructor($protocol, $serverAddress, $serverPort, $next)
    {
        $this->protocol = $protocol;
        $this->serverAddress = $serverAddress;
        $this->serverPort = $serverPort;
        $this->next = $next;
    }

}

