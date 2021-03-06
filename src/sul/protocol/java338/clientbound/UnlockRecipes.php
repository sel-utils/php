<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/java338.xml
 */
namespace sul\protocol\clientbound\java338;

use utils\Packet;

class UnlockRecipes extends Packet
{

    public const ID = 49;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // action
    public const ADD = 1;
    public const REMOVE = 2;
    public const ADD_WITHOUT_NOTIFICATION = 3;

    public $action;
    public $openBook;
    public $filtering;
    public $recipes;
    public $bookRecipes;

    public function __constructor() {}

    public function __constructor($action, $openBook, $filtering, $recipes, $bookRecipes)
    {
        $this->action = $action;
        $this->openBook = $openBook;
        $this->filtering = $filtering;
        $this->recipes = $recipes;
        $this->bookRecipes = $bookRecipes;
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

