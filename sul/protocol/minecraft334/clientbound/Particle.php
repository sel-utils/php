<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft334.xml
 */
namespace sul\protocol\clientbound\minecraft334;

use utils\Packet;

class Particle extends Packet
{

    public const ID = 34;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // particle id
    public const EXPLODE = 0;
    public const LARGE_EXPLOSION = 1;
    public const HUGE_EXPLOSION = 2;
    public const FIREWORK_SPARK = 3;
    public const BUBBLE = 4;
    public const SPLASH = 5;
    public const WAKE = 6;
    public const SUSPENDED = 7;
    public const DEPTH_SUSPEND = 8;
    public const CRIT = 9;
    public const MAGIC_CRIT = 10;
    public const SMOKE = 11;
    public const LARGE_SMOKE = 12;
    public const SPELL = 13;
    public const INSTANT_SPELL = 14;
    public const MOB_SPELL = 15;
    public const MOB_SPELL_AMBIENT = 16;
    public const WITCH_MAGIC = 17;
    public const DRIP_WATER = 18;
    public const DRIP_LAVA = 19;
    public const ANGRY_VILLAGER = 20;
    public const HAPPY_VILLAGER = 21;
    public const TOWN_AURA = 22;
    public const NOTE = 23;
    public const PORTAL = 24;
    public const ENCHANTMENT_TABLE = 25;
    public const FLAME = 26;
    public const LAVA = 27;
    public const FOOTSTEP = 28;
    public const CLOUD = 29;
    public const RED_DUST = 30;
    public const SNOWBALL_POOF = 31;
    public const SNOW_SHOVEL = 32;
    public const SLIME = 33;
    public const HEART = 34;
    public const BARRIER = 35;
    public const ITEM_CRACK = 36;
    public const BLOCK_CRACK = 37;
    public const BLOCK_DUST = 38;
    public const DROPLET = 39;
    public const TAKE = 40;
    public const MOB_APPEARANCE = 41;
    public const DRAGON_BREATH = 42;
    public const ENDROD = 43;
    public const DAMAGE_INDICATOR = 44;
    public const SWEEP_ATTACK = 45;
    public const FALLING_DUST = 46;

    public $particleId;
    public $longDistance;
    public $position;
    public $offset;
    public $data;
    public $count;
    public $additionalData;

    public function __constructor() {}

    public function __constructor($particleId, $longDistance, $position, $offset, $data, $count, $additionalData)
    {
        $this->particleId = $particleId;
        $this->longDistance = $longDistance;
        $this->position = $position;
        $this->offset = $offset;
        $this->data = $data;
        $this->count = $count;
        $this->additionalData = $additionalData;
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

