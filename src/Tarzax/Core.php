<?php

namespace Tarzax;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;
use Tarzax\Commands\Kit;
use Tarzax\Commands\RankCMD;
use Tarzax\Commands\TForm;
use Tarzax\Listeners\PlayerEvents;

class Core extends PluginBase
{
    use SingletonTrait;

    protected function onEnable(): void
    {
        $this::setInstance($this);
        $this->saveResource("rank.yml");
        Server::getInstance()->getCommandMap()->registerAll("", [
            new TForm(),
            new Kit(),
            new RankCMD(),
        ]);
        Server::getInstance()->getPluginManager()->registerEvents(new PlayerEvents, $this);
    }
}