<?php

namespace Tarzax\API;

use pocketmine\utils\Config;
use Tarzax\Core;
use Tarzax\Utils;

class RankAPI {
    const WOOD_RANK = "Wood";
    const STONE_RANK = "Stone";
    const IRON_RANK = "Iron";
    const GOLDEN_RANK = "Golden";
    const DIAMOND_RANK = "Diamond";
    const DEFAULT_RANK = "Player";

    public static function cfg(): Config {
        return Utils::getConfigYML("rank.yml");
    }

    public static function existsPlayer(string $player): bool {
        return self::cfg()->exists($player);
    }

    public static function initPlayer(string $player): void {
        $cfg = new Config(Core::getInstance()->getDataFolder() . "rank.yml", Config::YAML);
        $cfg->set($player, self::DEFAULT_RANK);
        $cfg->save();
    }

    public static function getRank(string $player) {
        return self::cfg()->get(Utils::getPlayerName($player));
    }

    public static function setRank(string $player, $rank): void {
        $rank = self::DEFAULT_RANK or $rank = self::WOOD_RANK or $rank = self::STONE_RANK or $rank = self::IRON_RANK or $rank = self::GOLDEN_RANK or $rank = self::DIAMOND_RANK;
        self::cfg()->set($player, $rank);
        self::cfg()->save();
    }
}