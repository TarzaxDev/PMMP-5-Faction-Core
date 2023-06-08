<?php

namespace Tarzax\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;
use Tarzax\API\RankAPI;
use Tarzax\Utils;

class RankCMD extends Command {

    public function __construct() {
        parent::__construct("rank", "Rank commands", "/rank", ["RANK", "Rank", "rAnk", "raNk", "ranK", "RAnk", "RaNk", "RanK", "rANk", "rAnK", "raNK"]);
        $this->setPermissions(["rank.use"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        $player = $sender->getName();
        if ($sender instanceof Player) {
            /*if (RankAPI::getRank($player)) {
                $sender->sendMessage("a");
            }*/
            $sender->sendMessage("a");
        } else {
            $sender->sendMessage(Utils::messageError());
        }
    }
}