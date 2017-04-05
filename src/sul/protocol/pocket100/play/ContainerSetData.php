<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the GNU General Public License version 3.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/pocket100.xml
 */
namespace sul\protocol\play\pocket100;

use utils\Packet;

class ContainerSetData extends Packet
{

    public const ID = 51;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

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

}

