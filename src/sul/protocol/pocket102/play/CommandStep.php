<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket102.xml
 */
namespace sul\protocol\play\pocket102;

use utils\Packet;

class CommandStep extends Packet
{

    public const ID = 78;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $command;
    public $overload;
    public $unknown2;
    public $currentStep;
    public $done;
    public $clientId;
    public $input;
    public $output;

    public function __constructor() {}

    public function __constructor($command, $overload, $unknown2, $currentStep, $done, $clientId, $input, $output)
    {
        $this->command = $command;
        $this->overload = $overload;
        $this->unknown2 = $unknown2;
        $this->currentStep = $currentStep;
        $this->done = $done;
        $this->clientId = $clientId;
        $this->input = $input;
        $this->output = $output;
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

