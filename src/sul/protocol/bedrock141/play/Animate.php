<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock141.xml
 */
namespace sul\protocol\play\bedrock141;

use utils\Packet;

class Animate extends Packet
{

    public const ID = 44;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // action
    public const BREAKING = 1;
    public const WAKE_UP = 3;

    public $action;
    public $entityId;
    public $unknown2;

    public function __constructor() {}

    public function __constructor($action, $entityId, $unknown2)
    {
        $this->action = $action;
        $this->entityId = $entityId;
        $this->unknown2 = $unknown2;
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

