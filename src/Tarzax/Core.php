<?php

namespace Tarzax;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;
use Tarzax\API\RankAPI;
use Tarzax\Commands\CForm;
use Tarzax\Commands\Kit;
use Tarzax\Commands\TForm;
use Tarzax\Listeners\PlayerEvents;

class Core extends PluginBase
{
    use SingletonTrait;

    public RankAPI $rankAPI;

    protected function onEnable(): void
    {
        $this::setInstance($this);
        $this->saveResource("rank.yml");
        Server::getInstance()->getCommandMap()->registerAll("", [
            new TForm(),
            new CForm(),
            new Kit(),
        ]);
        Server::getInstance()->getPluginManager()->registerEvents(new PlayerEvents, $this);
    }
}