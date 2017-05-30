<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/minecraft333.xml
 */
namespace sul\protocol\clientbound\minecraft333;

use utils\Packet;

class EntityStatus extends Packet
{

    public const ID = 27;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // status
    public const SPAWN_TIPPED_ARROW_PARTICLE_EFFECTS = 0;
    public const PLAY_JUMPING_ANIMATION_AND_PARTICLES = 1;
    public const RESET_SPAWNER_DELAY = 1;
    public const PLAY_HURT_ANIMATION_AND_SOUND = 2;
    public const PLAY_DEATH_ANIMATION_AND_SOUND = 3;
    public const PLAY_ATTACK_ANIMATION_AND_SOUND = 4;
    public const SPAWN_SMOKE_PARTICLES = 6;
    public const SPAWN_HEART_PARTICLES = 7;
    public const PLAY_SHAKING_WATER_ANIMATION = 8;
    public const FINISHED_CONSUMING = 9;
    public const PLAY_EATING_GRASS_ANIMATION = 10;
    public const IGNITE_MINECART_TNT = 10;
    public const HOLD_POPPY = 11;
    public const SPAWN_VILLAGER_MATING_HEART_PARTICLES = 12;
    public const SPAWN_VILLAGER_ANGRY_PARTICLES = 13;
    public const SPAWN_VILLAGER_HAPPY_PARTICLES = 14;
    public const SPAWN_WITCH_MAGIC_PARTICLES = 15;
    public const PLAY_ZOMBIE_CURE_FINISHED_SOUND = 16;
    public const SPAWN_FIREWORK_EXPLOSION_EFFECT = 17;
    public const SPAWN_LOVE_PARTICLES = 18;
    public const RESET_SQUID_ROTATION = 19;
    public const SPAWN_EXPLOSION_PARTICLES = 20;
    public const PLAY_GUARDIAN_SOUND_EFFECT = 21;
    public const ENABLE_REDUCED_DEBUG_SCREEN = 22;
    public const DISABLE_REDUCED_DEBUG_SCREEN = 23;
    public const SET_OP_PERMISSION_LEVEL_0 = 24;
    public const SET_OP_PERMISSION_LEVEL_1 = 25;
    public const SET_OP_PERMISSION_LEVEL_2 = 26;
    public const SET_OP_PERMISSION_LEVEL_3 = 27;
    public const SET_OP_PERMISSION_LEVEL_4 = 28;
    public const PLAY_SHIELD_BLOCK_SOUND = 29;
    public const PLAY_SHIELD_BREAK_SOUND = 30;
    public const HOOK_KNOCKBACK = 31;
    public const PLAY_HIT_SOUND = 32;
    public const PLAY_THORNS_HURT_ANIMATION_AND_SOUND = 33;
    public const REMOVE_POPPY = 34;
    public const PLAY_TOTEM_UNDYING_ANIMATION = 35;

    public $entityId;
    public $status;

    public function __constructor() {}

    public function __constructor($entityId, $status)
    {
        $this->entityId = $entityId;
        $this->status = $status;
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

