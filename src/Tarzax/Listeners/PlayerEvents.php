<?php

namespace Tarzax\Listeners;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Server;
use Tarzax\API\RankAPI;

class PlayerEvents implements Listener {

    public function onJoin(PlayerJoinEvent $e) {
        $player = $e->getPlayer();
        $playerName = $player->getName();
        if (!$player->hasPlayedBefore()) {
            Server::getInstance()->broadcastMessage("Welcome {$playerName}");
        } else {
            Server::getInstance()->broadcastPopup("§a+{$playerName}");
        }
        if (!RankAPI::existsPlayer($playerName)) {
            RankAPI::initPlayer($playerName);
        }
    }

    public function onQuit(PlayerQuitEvent $e) {
        $player = $e->getPlayer();
        $playerName = $player->getName();
        $e->setQuitMessage("§4{$playerName}");
    }
}