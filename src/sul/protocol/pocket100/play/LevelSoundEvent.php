<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class LevelSoundEvent extends Packet
{

    public const ID = 26;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // sound
    public const ITEM_USE_ON = 0;
    public const HIT = 1;
    public const STEP = 2;
    public const JUMP = 3;
    public const BREAK = 4;
    public const PLACE = 5;
    public const HEAVY_STEP = 6;
    public const GALLOP = 7;
    public const FALL = 8;
    public const AMBIENT = 9;
    public const AMBIENT_BABY = 10;
    public const AMBIENT_IN_WATER = 11;
    public const BREATHE = 12;
    public const DEATH = 13;
    public const DEATH_IN_WATER = 14;
    public const DEATH_TO_ZOMBIE = 15;
    public const HURT = 16;
    public const HURT_IN_WATER = 17;
    public const MAD = 18;
    public const BOOST = 19;
    public const BOW = 20;
    public const SQUISH_BIG = 21;
    public const SQUISH_SMALL = 22;
    public const FALL_BIG = 23;
    public const FALL_SMALL = 24;
    public const SPLASH = 25;
    public const FIZZ = 26;
    public const FLAP = 27;
    public const SWIM = 28;
    public const DRINK = 29;
    public const EAT = 30;
    public const TAKEOFF = 31;
    public const SHAKE = 32;
    public const PLOP = 33;
    public const LAND = 34;
    public const SADDLE = 35;
    public const ARMOR = 36;
    public const ADD_CHEST = 37;
    public const THROW = 38;
    public const ATTACK = 39;
    public const ATTACK_NODAMAGE = 40;
    public const WARN = 41;
    public const SHEAR = 42;
    public const MILK = 43;
    public const THUNDER = 44;
    public const EXPLODE = 45;
    public const FIRE = 46;
    public const IGNITE = 47;
    public const FUSE = 48;
    public const STARE = 49;
    public const SPAWN = 50;
    public const SHOOT = 51;
    public const BREAK_BLOCK = 52;
    public const REMEDY = 53;
    public const UNFECT = 54;
    public const LEVELUP = 55;
    public const BOW_HIT = 56;
    public const BULLET_HIT = 57;
    public const EXTINGUISH_FIRE = 58;
    public const ITEM_FIZZ = 59;
    public const CHEST_OPEN = 60;
    public const CHEST_CLOSED = 61;
    public const POWER_ON = 62;
    public const POWER_OFF = 63;
    public const ATTACH = 64;
    public const DETACH = 65;
    public const DENY = 66;
    public const TRIPOD = 67;
    public const POP = 68;
    public const DROP_SLOT = 69;
    public const NOTE = 70;
    public const THORNS = 71;
    public const PISTON_IN = 72;
    public const PISTON_OUT = 73;
    public const PORTAL = 74;
    public const WATER = 75;
    public const LAVA_POP = 76;
    public const LAVA = 77;
    public const BURP = 78;
    public const BUCKET_FILL_WATER = 79;
    public const BUCKET_FILL_LAVA = 80;
    public const BUCKET_EMPTY_WATER = 81;
    public const BUCKET_EMPTY_LAVA = 82;
    public const GUARDIAN_FLOP = 83;
    public const ELDERGUARDIAN_CURSE = 84;
    public const MOB_WARNING = 85;
    public const MOB_WARNING_BABY = 86;
    public const TELEPORT = 87;
    public const SHULKER_OPEN = 88;
    public const SHULKER_CLOSE = 89;
    public const DEFAULT = 90;
    public const UNDEFINED = 91;

    public $sound;
    public $position;
    public $volume;
    public $pitch;
    public $unknown4;

    public function __constructor() {}

    public function __constructor($sound, $position, $volume, $pitch, $unknown4)
    {
        $this->sound = $sound;
        $this->position = $position;
        $this->volume = $volume;
        $this->pitch = $pitch;
        $this->unknown4 = $unknown4;
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

