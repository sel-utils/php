<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom2.xml
 */
namespace sul\protocol\player\hncom2;

use utils\Packet;

class Add extends Packet
{

    public const ID = 17;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // reason
    public const FIRST_JOIN = 0;
    public const TRANSFERRED = 1;
    public const FORCIBLY_TRANSFERRED = 2;

    // dimension
    public const OVERWORLD = 0;
    public const NETHER = 1;
    public const END = 2;

    // input mode
    public const KEYBOARD = 0;
    public const TOUCH = 1;
    public const CONTROLLER = 2;

    public $hubId;
    public $reason;
    public $type;
    public $protocol;
    public $version;
    public $username;
    public $displayName;
    public $dimension;
    public $viewDistance;
    public $clientAddress;
    public $serverAddress;
    public $serverPort;
    public $uuid;
    public $skin;
    public $language;
    public $inputMode;
    public $latency;

    public function __constructor() {}

    public function __constructor($hubId, $reason, $type, $protocol, $version, $username, $displayName, $dimension, $viewDistance, \sul\protocol\hncom2\types\Address $clientAddress, $serverAddress, $serverPort, $uuid, \sul\protocol\hncom2\types\Skin $skin, $language, $inputMode, $latency)
    {
        $this->hubId = $hubId;
        $this->reason = $reason;
        $this->type = $type;
        $this->protocol = $protocol;
        $this->version = $version;
        $this->username = $username;
        $this->displayName = $displayName;
        $this->dimension = $dimension;
        $this->viewDistance = $viewDistance;
        $this->clientAddress = $clientAddress;
        $this->serverAddress = $serverAddress;
        $this->serverPort = $serverPort;
        $this->uuid = $uuid;
        $this->skin = $skin;
        $this->language = $language;
        $this->inputMode = $inputMode;
        $this->latency = $latency;
    }

}

