<?php

namespace Tarzax\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Vecnavium\FormsUI\SimpleForm;

class CForm extends Command
{

    public function __construct()
    {
        parent::__construct("cform", "classic form", "/cform", []);
        $this->setPermissions(["TForm.use"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player)
        {
            $this->CForm($sender);
        } else {
            $sender->sendMessage("you are not player");
        }
    }

    public function CForm($sender)
    {
        $form = new SimpleForm(function (Player $sender, $data)
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
        $form->setTitle("CForm");
        $form->setContent("content");
        $form->addButton("leave");
        $form->sendToPlayer($sender);
    }
}