<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/externalconsole1.xml
 */
namespace sul\protocol\status\externalconsole1;

use utils\Packet;

class UpdateStats extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $onlinePlayers;
    public $maxPlayers;
    public $uptime;
    public $upload;
    public $download;
    public $nodes;

    public function __constructor() {}

    public function __constructor($onlinePlayers, $maxPlayers, $uptime, $upload, $download, $nodes)
    {
        $this->onlinePlayers = $onlinePlayers;
        $this->maxPlayers = $maxPlayers;
        $this->uptime = $uptime;
        $this->upload = $upload;
        $this->download = $download;
        $this->nodes = $nodes;
    }

}

