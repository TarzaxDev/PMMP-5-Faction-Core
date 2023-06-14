<?php

namespace Tarzax\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Tarzax\Core;
use Tarzax\Inventories\OneLineInventory;
use Tarzax\Utils;
use Vecnavium\FormsUI\SimpleForm;

class Kit extends Command {

    public function __construct() {
        parent::__construct("kit", "Kit command", "/kit", ["Kit", "kIt", "kiT", "KIt", "kIT", "KIT"]);
        $this->setPermissions(["kit.use"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player) {
            $sender->setCurrentWindow(new OneLineInventory());
        } else {
            $sender->sendMessage(Utils::messageError());
        }
    }

    public function kitForm(Player $sender) {
        $form = new SimpleForm(function (Player $sender)
        {
            if($data = null){
                return;
            }
            switch($data)
            {
                case 0:
                    break;
            }
        });
        $form->setTitle("Kit form");
        $form->setContent("List of all kits");
        $form->addButton("Back");
        $sender->sendForm($form);
    }
}