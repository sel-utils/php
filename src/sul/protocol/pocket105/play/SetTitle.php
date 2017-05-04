<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket105.xml
 */
namespace sul\protocol\play\pocket105;

use utils\Packet;

class SetTitle extends Packet
{

    public const ID = 88;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const HIDE = 0;
    public const RESET = 1;
    public const SET_TITLE = 2;
    public const SET_SUBTITLE = 3;
    public const SET_ACTION_BAR = 4;
    public const SET_TIMINGS = 5;

    public $action;
    public $text;
    public $fadeIn;
    public $stay;
    public $fadeOut;

    public function __constructor() {}

    public function __constructor($action, $text, $fadeIn, $stay, $fadeOut)
    {
        $this->action = $action;
        $this->text = $text;
        $this->fadeIn = $fadeIn;
        $this->stay = $stay;
        $this->fadeOut = $fadeOut;
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

