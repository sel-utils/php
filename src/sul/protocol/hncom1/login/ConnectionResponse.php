<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\login\hncom1;

use utils\Packet;

class ConnectionResponse extends Packet
{

    public const ID = 2;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // status
    public const OK = 0;
    public const OUTDATED_HUB = 1;
    public const OUTDATED_NODE = 2;
    public const PASSWORD_REQUIRED = 3;
    public const WRONG_PASSWORD = 4;
    public const INVALID_NAME_LENGTH = 5;
    public const INVALID_NAME_CHARACTERS = 6;
    public const NAME_ALREADY_USED = 7;
    public const NAME_RESERVED = 8;

    public $status;
    public $protocol;

    public function __constructor() {}

    public function __constructor($status, $protocol)
    {
        $this->status = $status;
        $this->protocol = $protocol;
    }

}

