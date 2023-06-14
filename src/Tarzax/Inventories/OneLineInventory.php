<?php

namespace Tarzax\Inventories;

use pocketmine\player\Player;
use tedo0627\inventoryui\CustomInventory;

class OneLineInventory extends CustomInventory {
    public function __construct() {
        parent::__construct(9, "Test");
    }

    public function open(Player $player): void {
        $player->sendMessage("Test");
    }

    public function close(Player $player): void {

    }
}