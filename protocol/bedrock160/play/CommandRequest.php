<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock160.xml
 */
namespace sul\protocol\play\bedrock160;

use utils\Packet;

class CommandRequest extends Packet
{

    public const ID = 77;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // type
    public const PLAYER = 0;
    public const COMMAND_BLOCK = 1;
    public const MINECART_COMMAND_BLOCK = 2;
    public const DEV_CONSOLE = 3;

    public $command;
    public $type;
    public $uuid;
    public $requestId;
    public $playerId;
    public $internal;

    public function __constructor() {}

    public function __constructor($command, $type, \sul\protocol\bedrock160\types\McpeUuid $uuid, $requestId, $playerId, $internal)
    {
        $this->command = $command;
        $this->type = $type;
        $this->uuid = $uuid;
        $this->requestId = $requestId;
        $this->playerId = $playerId;
        $this->internal = $internal;
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

