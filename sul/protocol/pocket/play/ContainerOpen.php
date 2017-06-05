<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket113.xml
 */
namespace sul\protocol\play\pocket;

use utils\Packet;

class ContainerOpen extends Packet
{

    public const ID = 48;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    public $window;
    public $type;
    public $position;
    public $entityId;

    public function __constructor() {}

    public function __constructor($window, $type, \sul\protocol\pocket\types\BlockPosition $position, $entityId)
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

