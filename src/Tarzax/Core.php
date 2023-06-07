<?php

namespace Tarzax;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;
use Tarzax\API\RankAPI;
use Tarzax\Commands\CForm;
use Tarzax\Commands\Kit;
use Tarzax\Commands\TForm;

class Core extends PluginBase
{
    use SingletonTrait;

    public RankAPI $rankAPI;

    protected function onEnable(): void
    {
        @mkdir($this->getDataFolder());
        $this->saveResource("rank.json");
        $this->rankAPI = new RankAPI(new Config($this->getDataFolder() . "rank.json", Config::JSON));
        Server::getInstance()->getCommandMap()->registerAll("", [
            new TForm(),
            new CForm(),
            new Kit(),
        ]);
    }
}