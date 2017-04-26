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

class CraftingEvent extends Packet
{

    public const ID = 54;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    public $window;
    public $type;
    public $uuid;
    public $input;
    public $output;

    public function __constructor() {}

    public function __constructor($window, $type, $uuid, $input, $output)
    {
        $this->window = $window;
        $this->type = $type;
        $this->uuid = $uuid;
        $this->input = $input;
        $this->output = $output;
    }

}

