<?php

namespace Tarzax;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\SingletonTrait;
use Tarzax\Commands\CForm;
use Tarzax\Commands\TForm;

class Core extends PluginBase
{
    use SingletonTrait;

    protected function onEnable(): void
    {
        Server::getInstance()->getCommandMap()->registerAll("", [
            new TForm(),
            new CForm(),
        ]);
    }
}