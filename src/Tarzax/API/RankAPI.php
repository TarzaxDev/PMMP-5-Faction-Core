<?php

namespace Tarzax\API;

use pocketmine\utils\Config;
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

    public static function initPlayer($player): void {
        if (self::existsPlayer($player)) {
            self::cfg()->set($player, self::DEFAULT_RANK);
            self::cfg()->save();
        }
    }

    public static function getRank(string $player) {
        return self::cfg()->get(Utils::getPlayerName($player));
    }
}