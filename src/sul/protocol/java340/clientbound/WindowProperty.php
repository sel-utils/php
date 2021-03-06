<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java340.xml
 */
namespace sul\protocol\clientbound\java340;

use utils\Packet;

class WindowProperty extends Packet
{

    public const ID = 21;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // property
    public const FURNANCE_FIRE_ICON = 0;
    public const FURNACE_MAX_FUEL_BURN_TIME = 1;
    public const FURNACE_PROGRESS_ARROW = 2;
    public const FURNCE_MAX_PROGRESS = 3;
    public const ENCHANTMENT_LEVEL_REQUIREMENT_TOP = 0;
    public const ENCHANTMENT_LEVEL_REQUIREMENT_MIDDLE = 1;
    public const ENCHANTMENT_LEVEL_REQUIREMENT_BOTTOM = 2;
    public const ENCHANTMENT_SEED = 3;
    public const ENCHANTMENT_ID_TOP = 4;
    public const ENCHANTMENT_ID_MIDDLE = 5;
    public const ENCHANTMENT_ID_BOTTOM = 6;
    public const ENCHANTMENT_LEVEL_TOP = 7;
    public const ENCHANTMENT_LEVEL_MIDDLE = 8;
    public const ENCHANTMENT_LEVEL_BOTTOM = 9;
    public const BEACON_POWER_LEVEL = 0;
    public const BEACON_FIRST_EFFECT = 1;
    public const BEACON_SECOND_EFFECT = 2;
    public const ANVIL_REPAIR_COST = 0;
    public const BREWING_STAND_BREW_TIME = 0;

    public $window;
    public $property;
    public $value;

    public function __constructor() {}

    public function __constructor($window, $property, $value)
    {
        $this->window = $window;
        $this->property = $property;
        $this->value = $value;
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

