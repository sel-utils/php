<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock137.xml
 */
namespace sul\protocol\play\bedrock137;

use utils\Packet;

class LevelEvent extends Packet
{

    public const ID = 25;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // event id
    public const START_RAIN = 3001;
    public const START_THUNDER = 3002;
    public const STOP_RAIN = 3003;
    public const STOP_THUNDER = 3004;
    public const START_BLOCK_BREAK = 3600;
    public const STOP_BLOCK_BREAK = 3601;
    public const SET_DATA = 4000;
    public const PLAYERS_SLEEPING = 9800;
    public const PARTICLE_BUBBLE = 16385;
    public const PARTICLE_CRITICAL = 16386;
    public const PARTICLE_BLOCK_FORCE_FIELD = 16387;
    public const PARTICLE_SMOKE = 16388;
    public const PARTICLE_EXPLODE = 16389;
    public const PARTICLE_EVAPORATION = 16390;
    public const PARTICLE_FLAME = 16391;
    public const PARTICLE_LAVA = 16392;
    public const PARTICLE_LARGE_SMOKE = 16393;
    public const PARTICLE_REDSTONE = 16394;
    public const PARTICLE_RISING_RED_DUST = 16395;
    public const PARTICLE_ITEM_BREAK = 16396;
    public const PARTICLE_SNOWBALL_POOF = 16397;
    public const PARTICLE_HUGE_EXPLODE = 16398;
    public const PARTICLE_HUGE_EXPLODE_SEED = 16399;
    public const PARTICLE_MOB_FLAME = 16400;
    public const PARTICLE_HEART = 16401;
    public const PARTICLE_TERRAIN = 16402;
    public const PARTICLE_TOWN_AURA = 16403;
    public const PARTICLE_PORTAL = 16404;
    public const PARTICLE_WATER_SPLASH = 16405;
    public const PARTICLE_WATER_WAKE = 16406;
    public const PARTICLE_DRIP_WATER = 16407;
    public const PARTICLE_DRIP_LAVA = 16408;
    public const PARTICLE_FALLING_DUST = 16409;
    public const PARTICLE_MOB_SPELL = 16410;
    public const PARTICLE_MOB_SPELL_AMBIENT = 16411;
    public const PARTICLE_MOB_SPELL_INSTANTANEOUS = 16412;
    public const PARTICLE_INK = 16413;
    public const PARTICLE_SLIME = 16414;
    public const PARTICLE_RAIN_SPLASH = 16415;
    public const PARTICLE_VILLAGER_ANGRY = 16416;
    public const PARTICLE_VILLAGER_HAPPY = 16417;
    public const PARTICLE_ENCHANTMENT_TABLE = 16418;
    public const PARTICLE_TRACKING_EMITTER = 16419;
    public const PARTICLE_NOTE = 16420;
    public const PARTICLE_WITCH_SPELL = 16421;
    public const PARTICLE_CARROT = 16422;
    public const PARTICLE_END_ROD = 16424;
    public const PARTICLE_DRAGON_BREATH = 16425;
    public const PARTICLE_SHOOT = 2000;
    public const PARTICLE_DESTROY = 2001;
    public const PARTICLE_SPLASH = 2002;
    public const PARTICLE_EYE_DESPAWN = 2003;
    public const PARTICLE_SPAWN = 2004;

    public $eventId;
    public $position;
    public $data;

    public function __constructor() {}

    public function __constructor($eventId, $position, $data)
    {
        $this->eventId = $eventId;
        $this->position = $position;
        $this->data = $data;
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

