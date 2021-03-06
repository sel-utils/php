<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/bedrock141.xml
 */
namespace sul\protocol\play\bedrock141;

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
    public const ATTACK_STRONG = 42;
    public const WARN = 43;
    public const SHEAR = 44;
    public const MILK = 45;
    public const THUNDER = 46;
    public const EXPLODE = 47;
    public const FIRE = 48;
    public const IGNITE = 49;
    public const FUSE = 50;
    public const STARE = 51;
    public const SPAWN = 52;
    public const SHOOT = 53;
    public const BREAK_BLOCK = 54;
    public const LAUNCH = 55;
    public const BLAST = 56;
    public const LARGE_BLAST = 57;
    public const TWINKLE = 58;
    public const REMEDY = 59;
    public const UNFECT = 60;
    public const LEVELUP = 61;
    public const BOW_HIT = 62;
    public const BULLET_HIT = 63;
    public const EXTINGUISH_FIRE = 64;
    public const ITEM_FIZZ = 65;
    public const CHEST_OPEN = 66;
    public const CHEST_CLOSED = 67;
    public const SHULKER_BOX_OPEN = 68;
    public const SHULKER_BOX_CLOSE = 69;
    public const POWER_ON = 70;
    public const POWER_OFF = 71;
    public const ATTACH = 72;
    public const DETACH = 73;
    public const DENY = 74;
    public const TRIPOD = 75;
    public const POP = 76;
    public const DROP_SLOT = 77;
    public const NOTE = 78;
    public const THORNS = 79;
    public const PISTON_IN = 80;
    public const PISTON_OUT = 81;
    public const PORTAL = 82;
    public const WATER = 83;
    public const LAVA_POP = 84;
    public const LAVA = 85;
    public const BURP = 86;
    public const BUCKET_FILL_WATER = 87;
    public const BUCKET_FILL_LAVA = 88;
    public const BUCKET_EMPTY_WATER = 89;
    public const BUCKET_EMPTY_LAVA = 90;
    public const RECORD_13 = 91;
    public const RECORD_CAT = 92;
    public const RECORD_BLOCKS = 93;
    public const RECORD_CHIRP = 94;
    public const RECORD_FAR = 95;
    public const RECORD_MALL = 96;
    public const RECORD_MELLOHI = 97;
    public const RECORD_STAL = 98;
    public const RECORD_STRAD = 99;
    public const RECORD_WARD = 100;
    public const RECORD_11 = 101;
    public const RECORD_WAIT = 102;
    public const GUARDIAN_FLOP = 104;
    public const ELDERGUARDIAN_CURSE = 105;
    public const MOB_WARNING = 106;
    public const MOB_WARNING_BABY = 107;
    public const TELEPORT = 108;
    public const SHULKER_OPEN = 109;
    public const SHULKER_CLOSE = 110;
    public const HAGGLE = 111;
    public const HAGGLE_YES = 112;
    public const HAGGLE_NO = 113;
    public const HAGGLE_IDLE = 114;
    public const CHORUS_GROW = 115;
    public const CHORUS_DEATH = 116;
    public const GLASS = 117;
    public const CAST_SPELL = 118;
    public const PREPARE_ATTACK = 119;
    public const PREPARE_SUMMON = 120;
    public const PREPARE_WOLOLO = 121;
    public const FANG = 122;
    public const CHARGE = 123;
    public const CAMERA_TAKE_PICTURE = 124;
    public const LEASHKNOT_PLACE = 125;
    public const LEASHKNOT_BREAK = 126;
    public const GROWL = 127;
    public const WHINE = 128;
    public const PANT = 129;
    public const PURR = 130;
    public const PURREOW = 131;
    public const DEATH_MIN_VOLUME = 132;
    public const DEATH_MID_VOLUME = 133;
    public const INITIATE_BLAZE = 134;
    public const INITIATE_CAVE_SPIDER = 135;
    public const INITIATE_CREEPER = 136;
    public const INITIATE_ELDER_GUARDIAN = 137;
    public const INITIATE_ENDER_DRAGON = 138;
    public const INITIATE_ENDERMAN = 139;
    public const INITIATE_EVOCATION_ILLAGER = 141;
    public const INITIATE_GHAST = 142;
    public const INITIATE_HUSK = 143;
    public const INITIATE_ILLUSION_ILLAGER = 144;
    public const INITIATE_MAGMA_CUBE = 145;
    public const INITIATE_POLAR_BEAR = 146;
    public const INITIATE_SHULKER = 147;
    public const INITIATE_SILVERFISH = 148;
    public const INITIATE_SKELETON = 149;
    public const INITIATE_SLIME = 150;
    public const INITIATE_SPIDER = 151;
    public const INITIATE_STRAY = 152;
    public const INITIATE_VEX = 153;
    public const INITIATE_VINDICATION_ILLAGER = 154;
    public const INITIATE_WITCH = 155;
    public const INITIATE_WITHER = 156;
    public const INITIATE_WITHER_SKELETON = 157;
    public const INITIATE_WOLF = 158;
    public const INITIATE_ZOMBIE = 159;
    public const INITIATE_ZOMBIE_PIGMAN = 160;
    public const INITIATE_ZOMBIE_VILLAGER = 161;
    public const BLOCK_END_PORTAL_FRAME_FILL = 162;
    public const BLOCK_END_PORTAL_SPAWN = 163;
    public const RANDOM_ANVIL_USE = 164;
    public const BOTTLE_DRAGONBREATH = 165;
    public const DEFAULT = 166;
    public const UNDEFINED = 167;

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

