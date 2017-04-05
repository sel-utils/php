<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft109.xml
 */
namespace sul\protocol\login\minecraft109;

use utils\Packet;

class EncryptionResponse extends Packet
{

    public const ID = 1;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $sharedSecret;
    public $verifyToken;

    public function __constructor() {}

    public function __constructor($sharedSecret, $verifyToken)
    {
        $this->sharedSecret = $sharedSecret;
        $this->verifyToken = $verifyToken;
    }

}

