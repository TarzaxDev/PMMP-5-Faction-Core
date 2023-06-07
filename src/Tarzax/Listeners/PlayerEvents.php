<?php

namespace Tarzax\Listeners;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Server;

class PlayerEvents implements Listener {

    public function onJoin(PlayerJoinEvent $e) {
        $player = $e->getPlayer();
        if (!$player->hasPlayedBefore()) {
            Server::getInstance()->broadcastMessage("Welcome {$player->getName()}");
        } else {
            Server::getInstance()->broadcastPopup("§a+{$player->getName()}");
        }
    }

    public function onQuit(PlayerQuitEvent $e) {
        $player = $e->getPlayer();
        $e->setQuitMessage("§4{$player->getName()}");
    }
}