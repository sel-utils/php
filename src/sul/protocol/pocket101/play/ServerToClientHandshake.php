<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket101.xml
 */
namespace sul\protocol\play\pocket101;

use utils\Packet;

class ServerToClientHandshake extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $serverPublicKey;
    public $token;

    public function __constructor() {}

    public function __constructor($serverPublicKey, $token)
    {
        $this->serverPublicKey = $serverPublicKey;
        $this->token = $token;
    }

}

