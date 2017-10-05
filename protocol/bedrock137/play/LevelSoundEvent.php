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

class LevelSoundEvent extends Packet
{

    public const ID = 24;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = true;

    // sound
    public const ITEM_USE_ON = 0;
    public const HIT = 1;
    public const STEP = 2;
    public const FLY = 3;
    public const JUMP = 4;
    public const BREAK = 5;
    public const PLACE = 6;
    public const HEAVY_STEP = 7;
    public const GALLOP = 8;
    public const FALL = 9;
    public const AMBIENT = 10;
    public const AMBIENT_BABY = 11;
    public const AMBIENT_IN_WATER = 12;
    public const BREATHE = 13;
    public const DEATH = 14;
    public const DEATH_IN_WATER = 15;
    public const DEATH_TO_ZOMBIE = 16;
    public const HURT = 17;
    public const HURT_IN_WATER = 18;
    public const MAD = 19;
    public const BOOST = 20;
    public const BOW = 21;
    public const SQUISH_BIG = 22;
    public const SQUISH_SMALL = 23;
    public const FALL_BIG = 24;
    public const FALL_SMALL = 25;
    public const SPLASH = 26;
    public const FIZZ = 27;
    public const FLAP = 28;
    public const SWIM = 29;
    public const DRINK = 30;
    public const EAT = 31;
    public const TAKEOFF = 32;
    public const SHAKE = 33;
    public const PLOP = 34;
    public const LAND = 35;
    public const SADDLE = 36;
    public const ARMOR = 37;
    public const ADD_CHEST = 38;
    public const THROW = 39;
    public const ATTACK = 40;
    public const ATTACK_NODAMAGE = 41;
    public const WARN = 42;
    public const SHEAR = 43;
    public const MILK = 44;
    public const THUNDER = 45;
    public const EXPLODE = 46;
    public const FIRE = 47;
    public const IGNITE = 48;
    public const FUSE = 49;
    public const STARE = 50;
    public const SPAWN = 51;
    public const SHOOT = 52;
    public const BREAK_BLOCK = 53;
    public const LAUNCH = 54;
    public const BLAST = 55;
    public const LARGE_BLAST = 56;
    public const TWINKLE = 57;
    public const REMEDY = 58;
    public const UNFECT = 59;
    public const LEVELUP = 60;
    public const BOW_HIT = 61;
    public const BULLET_HIT = 62;
    public const EXTINGUISH_FIRE = 63;
    public const ITEM_FIZZ = 64;
    public const CHEST_OPEN = 65;
    public const CHEST_CLOSED = 66;
    public const SHULKER_BOX_OPEN = 67;
    public const SHULKER_BOX_CLOSE = 68;
    public const POWER_ON = 69;
    public const POWER_OFF = 70;
    public const ATTACH = 71;
    public const DETACH = 72;
    public const DENY = 73;
    public const TRIPOD = 74;
    public const POP = 75;
    public const DROP_SLOT = 76;
    public const NOTE = 77;
    public const THORNS = 78;
    public const PISTON_IN = 79;
    public const PISTON_OUT = 80;
    public const PORTAL = 81;
    public const WATER = 82;
    public const LAVA_POP = 83;
    public const LAVA = 84;
    public const BURP = 85;
    public const BUCKET_FILL_WATER = 86;
    public const BUCKET_FILL_LAVA = 87;
    public const BUCKET_EMPTY_WATER = 88;
    public const BUCKET_EMPTY_LAVA = 89;
    public const RECORD_13 = 90;
    public const RECORD_CAT = 91;
    public const RECORD_BLOCKS = 92;
    public const RECORD_CHIRP = 93;
    public const RECORD_FAR = 94;
    public const RECORD_MALL = 95;
    public const RECORD_MELLOHI = 96;
    public const RECORD_STAL = 97;
    public const RECORD_STRAD = 98;
    public const RECORD_WARD = 99;
    public const RECORD_11 = 100;
    public const RECORD_WAIT = 101;
    public const GUARDIAN_FLOP = 103;
    public const ELDERGUARDIAN_CURSE = 104;
    public const MOB_WARNING = 105;
    public const MOB_WARNING_BABY = 106;
    public const TELEPORT = 107;
    public const SHULKER_OPEN = 108;
    public const SHULKER_CLOSE = 109;
    public const HAGGLE = 110;
    public const HAGGLE_YES = 111;
    public const HAGGLE_NO = 112;
    public const HAGGLE_IDLE = 113;
    public const CHORUS_GROW = 114;
    public const CHORUS_DEATH = 115;
    public const GLASS = 116;
    public const CAST_SPELL = 117;
    public const PREPARE_ATTACK = 118;
    public const PREPARE_SUMMON = 119;
    public const PREPARE_WOLOLO = 120;
    public const FANG = 121;
    public const CHARGE = 122;
    public const CAMERA_TAKE_PICTURE = 123;
    public const LEASHKNOT_PLACE = 124;
    public const LEASHKNOT_BREAK = 125;
    public const GROWL = 126;
    public const WHINE = 127;
    public const PANT = 128;
    public const PURR = 129;
    public const PURREOW = 130;
    public const DEATH_MIN_VOLUME = 131;
    public const DEATH_MID_VOLUME = 132;
    public const INITIATE_BLAZE = 133;
    public const INITIATE_CAVE_SPIDER = 134;
    public const INITIATE_CREEPER = 135;
    public const INITIATE_ELDER_GUARDIAN = 136;
    public const INITIATE_ENDER_DRAGON = 137;
    public const INITIATE_ENDERMAN = 138;
    public const INITIATE_EVOCATION_ILLAGER = 140;
    public const INITIATE_GHAST = 141;
    public const INITIATE_HUSK = 142;
    public const INITIATE_ILLUSION_ILLAGER = 143;
    public const INITIATE_MAGMA_CUBE = 144;
    public const INITIATE_POLAR_BEAR = 145;
    public const INITIATE_SHULKER = 146;
    public const INITIATE_SILVERFISH = 147;
    public const INITIATE_SKELETON = 148;
    public const INITIATE_SLIME = 149;
    public const INITIATE_SPIDER = 150;
    public const INITIATE_STRAY = 151;
    public const INITIATE_VEX = 152;
    public const INITIATE_VINDICATION_ILLAGER = 153;
    public const INITIATE_WITCH = 154;
    public const INITIATE_WITHER = 155;
    public const INITIATE_WITHER_SKELETON = 156;
    public const INITIATE_WOLF = 157;
    public const INITIATE_ZOMBIE = 158;
    public const INITIATE_ZOMBIE_PIGMAN = 159;
    public const INITIATE_ZOMBIE_VILLAGER = 160;
    public const DEFAULT = 161;
    public const UNDEFINED = 162;

    public $sound;
    public $position;
    public $volume;
    public $pitch;
    public $unknown4;
    public $disableRelativeVolume;

    public function __constructor() {}

    public function __constructor($sound, $position, $volume, $pitch, $unknown4, $disableRelativeVolume)
    {
        $this->sound = $sound;
        $this->position = $position;
        $this->volume = $volume;
        $this->pitch = $pitch;
        $this->unknown4 = $unknown4;
        $this->disableRelativeVolume = $disableRelativeVolume;
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

