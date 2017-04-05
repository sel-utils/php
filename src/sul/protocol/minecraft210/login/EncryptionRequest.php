<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft210.xml
 */
namespace sul\protocol\login\minecraft210;

use utils\Packet;

class EncryptionRequest extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $serverId;
    public $publicKey;
    public $verifyToken;

    public function __constructor() {}

    public function __constructor($serverId, $publicKey, $verifyToken)
    {
        $this->serverId = $serverId;
        $this->publicKey = $publicKey;
        $this->verifyToken = $verifyToken;
    }

}

