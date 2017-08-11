<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java316.xml
 */
namespace sul\protocol\clientbound\java316;

use utils\Packet;

class ResourcePackSend extends Packet
{

    public const ID = 50;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $url;
    public $hash;

    public function __constructor() {}

    public function __constructor($url, $hash)
    {
        $this->url = $url;
        $this->hash = $hash;
    }

    public function getId()
    {
        return self::ID;
    }

    public function encode()
    {


    }

    public function decode()
    {}

}

