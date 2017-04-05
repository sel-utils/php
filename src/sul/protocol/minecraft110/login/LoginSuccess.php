<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\login\minecraft110;

use utils\Packet;

class LoginSuccess extends Packet
{

    public const ID = 2;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $uuid;
    public $username;

    public function __constructor() {}

    public function __constructor($uuid, $username)
    {
        $this->uuid = $uuid;
        $this->username = $username;
    }

}

