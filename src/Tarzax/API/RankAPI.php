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
        return $this->cfg ->exists($name);
    }

    public function createAccount($name): void {
        if ($this->playerHasAccount($name)) {
            $this->cfg->set($name, self::DEFAULT_RANK);
            $this->cfg->save();
        }
    }

    public function getRank($name): string {
        if ($this->playerHasAccount($name)) {
            return $this->cfg->get($name);
        }
    }

    public function setRank(string $name, string $rank): bool {
        if ($this->playerHasAccount($name)) {
            $this->cfg->set($name, $rank);
            $this->cfg->save();
            return true;
        }
        return false;
    }
}