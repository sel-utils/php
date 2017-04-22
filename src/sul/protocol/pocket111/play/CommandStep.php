<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket111.xml
 */
namespace sul\protocol\play\pocket111;

use utils\Packet;

class CommandStep extends Packet
{

    public const ID = 79;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $command;
    public $overload;
    public $?;
    public $currentStep;
    public $done;
    public $clientId;
    public $input;
    public $output;

    public function __constructor() {}

    public function __constructor($command, $overload, $?, $currentStep, $done, $clientId, $input, $output)
    {
        $this->command = $command;
        $this->overload = $overload;
        $this->? = $?;
        $this->currentStep = $currentStep;
        $this->done = $done;
        $this->clientId = $clientId;
        $this->input = $input;
        $this->output = $output;
    }

}
