<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\status\hncom2;

use utils\Packet;

class RemoteCommand extends Packet
{

    public const ID = 14;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // origin
    public const HUB = 0;
    public const EXTERNAL_CONSOLE = 1;
    public const RCON = 2;

    public $origin;
    public $sender;
    public $command;
    public $commandId;

    public function __constructor() {}

    public function __constructor($origin, \sul\protocol\hncom2\types\Address $sender, $command, $commandId)
    {
        $this->origin = $origin;
        $this->sender = $sender;
        $this->command = $command;
        $this->commandId = $commandId;
    }

}

