<?php

namespace Tarzax;

use pocketmine\player\Player;
use pocketmine\utils\Config;

class Utils {

    public static function messageError(): string {
        return "§4ERROR";
    }

    public static function getPlayerName($player): string {
        if ($player instanceof Player) {
            return $player->getName();
        }
    }

    public static function getConfigYML(string $filename) {
        return new Config(Core::getInstance()->getDataFolder() . $filename, Config::YAML);
    }
}