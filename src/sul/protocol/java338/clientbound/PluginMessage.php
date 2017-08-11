<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java338;

use utils\Packet;

class PluginMessage extends Packet
{

    public const ID = 24;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $channel;
    public $data;

    public function __constructor() {}

    public function __constructor($channel, $data)
    {
        $this->channel = $channel;
        $this->data = $data;
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

