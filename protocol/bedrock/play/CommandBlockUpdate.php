<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock;

use utils\Packet;

class CommandBlockUpdate extends Packet
{

    public const ID = 78;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    public $updateBlock;
    public $position;
    public $mode;
    public $redstoneMode;
    public $conditional;
    public $minecart;
    public $command;
    public $lastOutput;
    public $hover;
    public $trackOutput;

    public function __constructor() {}

    public function __constructor($updateBlock, \sul\protocol\bedrock\types\BlockPosition $position, $mode, $redstoneMode, $conditional, $minecart, $command, $lastOutput, $hover, $trackOutput)
    {
        $this->updateBlock = $updateBlock;
        $this->position = $position;
        $this->mode = $mode;
        $this->redstoneMode = $redstoneMode;
        $this->conditional = $conditional;
        $this->minecart = $minecart;
        $this->command = $command;
        $this->lastOutput = $lastOutput;
        $this->hover = $hover;
        $this->trackOutput = $trackOutput;
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

