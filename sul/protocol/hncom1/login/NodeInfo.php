<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\login\hncom1;

use utils\Packet;

class NodeInfo extends Packet
{

    public const ID = 4;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // max
    public const UNLIMITED = 0;

    public $time;
    public $max;
    public $acceptedGames;
    public $plugins;
    public $additionalJson;

    public function __constructor() {}

    public function __constructor($time, $max, $acceptedGames, $plugins, $additionalJson)
    {
        $this->time = $time;
        $this->max = $max;
        $this->acceptedGames = $acceptedGames;
        $this->plugins = $plugins;
        $this->additionalJson = $additionalJson;
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

