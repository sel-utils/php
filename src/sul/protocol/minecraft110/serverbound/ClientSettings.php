<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft110.xml
 */
namespace sul\protocol\serverbound\minecraft110;

use utils\Packet;

class ClientSettings extends Packet
{

    public const ID = 4;

    public const CLIENTBOUND = false;
    public const SERVERBOUND = true;

    // chat mode
    public const ENABLED = 0;
    public const COMMANDS_ONLY = 1;
    public const DISABLED = 2;

    // displayed skin parts
    public const CAPE = 1;
    public const JACKET = 2;
    public const LEFT_SLEEVE = 4;
    public const RIGHT_SLEEVE = 8;
    public const LEFT_PANTS = 16;
    public const RIGHT_PANTS = 32;
    public const HAT = 64;

    // main hand
    public const RIGHT = 0;
    public const LEFT = 1;

    public $language;
    public $viewDistance;
    public $chatMode;
    public $chatColors;
    public $displayedSkinParts;
    public $mainHand;

    public function __constructor() {}

    public function __constructor($language, $viewDistance, $chatMode, $chatColors, $displayedSkinParts, $mainHand)
    {
        $this->language = $language;
        $this->viewDistance = $viewDistance;
        $this->chatMode = $chatMode;
        $this->chatColors = $chatColors;
        $this->displayedSkinParts = $displayedSkinParts;
        $this->mainHand = $mainHand;
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

