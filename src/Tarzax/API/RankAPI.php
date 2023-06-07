<?php

namespace Tarzax\API;

use pocketmine\utils\Config;

class RankAPI {
    const WOOD_RANK = "Wood";
    const STONE_RANK = "Stone";
    const IRON_RANK = "Iron";
    const GOLDEN_RANK = "Golden";
    const DIAMOND_RANK = "Diamond";
    const DEFAULT_RANK = "Player";

    private Config $cfg;

    public function __construct(Config $cfg)
    {
        $this->cfg = $cfg;
    }

    public function playerHasAccount(string $name): bool {

    }

    public function addRank() {

    }

    public function getRank($player): string {

    }

    public function setRank() {

    }

    public function removeRank() {

    }
}