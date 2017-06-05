<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft316.xml
 */
namespace sul\protocol\clientbound\minecraft;

use utils\Packet;

class Effect extends Packet
{

    public const ID = 33;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // effect id
    public const DISPENSER_DISPENSE = 1000;
    public const DISPENSER_FAIL_DISPENSE = 1001;
    public const DISPENSER_SHOOT = 1002;
    public const ENDER_EYE_LAUNCH = 1003;
    public const FIREWORK_SHOT = 1004;
    public const IRON_DOOR_OPEN = 1005;
    public const WOODEN_DOOR_OPEN = 1006;
    public const WOODEN_TRAPDOOR_OPEN = 1007;
    public const FENCE_GATE_OPEN = 1008;
    public const FIRE_EXTINGUISH = 1009;
    public const PLAY_RECORD = 1010;
    public const IRON_DOOR_CLOSE = 1011;
    public const WOODEN_DOOR_CLOSE = 1012;
    public const WOODEN_TRAPDOOR_CLOSE = 1013;
    public const FENCE_GATE_CLOSE = 1014;
    public const GHAST_WARN = 1015;
    public const GHAST_SHOOT = 1016;
    public const ENDERDRAGON_SHOOT = 1017;
    public const BLAZE_SHOOT = 1018;
    public const ZOMBIE_ATTACK_WOOD_DOOR = 1019;
    public const ZOMBIE_ATTACK_IRON_DOOR = 1020;
    public const ZOMBIE_BREAK_WOOD_DOOR = 1021;
    public const WITHER_BREAK_BLOCK = 1022;
    public const WITHER_SPAWN = 1023;
    public const WITHER_SHOOT = 1024;
    public const BAT_TAKE_OFF = 1025;
    public const ZOMBIE_INFECT_VILLAGER = 1026;
    public const ZOMBIE_VILLAGER_CONVERT = 1027;
    public const ENDER_DRAGON_BREATH = 1028;
    public const ANVIL_BREAK = 1029;
    public const ANVIL_USE = 1030;
    public const ANVIL_LAND = 1031;
    public const PORTAL_TRAVEL = 1032;
    public const CHORUS_FLOWER_GROW = 1033;
    public const CHORUS_FLOWER_DIE = 1034;
    public const BREWING_STAND_BREW = 1035;
    public const IRON_TRAPDOOR_OPEN = 1036;
    public const IRON_TRAPDOOR_CLOSE = 1037;
    public const SPAWN_10_SMOKE_PARTICLES = 2000;
    public const BREAK_BREAK_PARTICLES_AND_SOUND = 2001;
    public const SPLASH_POTION_PARTICLES_AND_SOUND = 2002;
    public const ENDER_EYE_BREAK_PARTICLES_AND_SOUND = 2003;
    public const MOB_SPAWN_PARTICLES = 2004;
    public const BONEMEAL_PARTICLES = 2005;
    public const DRAGON_BREATH = 2006;
    public const END_GATEWAY_SPAWN = 3000;
    public const ENDERDRAGON_GROWL = 3001;

    public $effectId;
    public $position;
    public $data;
    public $disableVolume;

    public function __constructor() {}

    public function __constructor($effectId, $position, $data, $disableVolume)
    {
        $this->effectId = $effectId;
        $this->position = $position;
        $this->data = $data;
        $this->disableVolume = $disableVolume;
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

