<?php

namespace Tarzax\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Vecnavium\FormsUI\SimpleForm;

class TForm extends Command
{

    public function __construct() {
        parent::__construct("tform", "custom form", "/tform", []);
        $this->setPermissions(["TForm.use"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if($sender instanceof Player)
        {
            $this->TForm($sender);
        } else {
            $sender->sendMessage("you are not player");
        }
    }

    public function TForm($sender) {
        $form = new SimpleForm(function (Player $sender, $data)
        {
            if($data = null){
                return;
            }
            switch($data)
            {
                case 0:
                    break;
                case 1:
                    break;
		        case 2:
                    break;
		        case 3:
                    break;
		        case 4:
                    break;
		        case 5:
                    break;
            }
        });
        $form->setTitle("OBUI");
        $form->setContent("content");
        $form->addButton("leave");
        $form->addButton("leave");
        $form->addButton("leave");
        $form->addButton("leave");
        $form->addButton("leave");
        $form->addButton("leave");
        $form->sendToPlayer($sender);
    }
}