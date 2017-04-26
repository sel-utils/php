<?php

/*
 * This file was automatically generated by sel-utils and
 * released under the MIT License.
 * 
 * License: https://github.com/sel-project/sel-utils/blob/master/LICENSE
 * Repository: https://github.com/sel-project/sel-utils
 * Generated from https://github.com/sel-project/sel-utils/blob/master/xml/protocol/hncom1.xml
 */
namespace sul\protocol\login\hncom1;

use utils\Packet;

class HubInfo extends Packet
{

    public const ID = 3;

    public const CLIENTBOUND = true;
    public const SERVERBOUND = false;

    // max
    public const UNLIMITED = -1;

    public $time;
    public $serverId;
    public $reservedUuids;
    public $displayName;
    public $onlineMode;
    public $gamesInfo;
    public $online;
    public $max;
    public $language;
    public $acceptedLanguages;
    public $additionalJson;

    public function __constructor() {}

    public function __constructor($time, $serverId, $reservedUuids, $displayName, $onlineMode, $gamesInfo, $online, $max, $language, $acceptedLanguages, $additionalJson)
    {
        $this->time = $time;
        $this->serverId = $serverId;
        $this->reservedUuids = $reservedUuids;
        $this->displayName = $displayName;
        $this->onlineMode = $onlineMode;
        $this->gamesInfo = $gamesInfo;
        $this->online = $online;
        $this->max = $max;
        $this->language = $language;
        $this->acceptedLanguages = $acceptedLanguages;
        $this->additionalJson = $additionalJson;
    }

}

