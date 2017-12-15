<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock150.xml
 */
namespace sul\protocol\play\bedrock150;

use utils\Packet;

class ContainerOpen extends Packet
{

    public const ID = 46;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $type;
    public $position;
    public $entityId;

    public function __constructor() {}

    public function __constructor($window, $type, \sul\protocol\bedrock150\types\BlockPosition $position, $entityId)
    {
        $this->window = $window;
        $this->type = $type;
        $this->position = $position;
        $this->entityId = $entityId;
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

