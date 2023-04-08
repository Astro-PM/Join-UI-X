
<?php

namespace SkulZTeams\Join_Ui_X;

/*
This plugin is still in the development stage, if there is a bug, immediately report it to the issue to be fixed immediately, And for this release, it's version 1.0
*/

use pocketmine\Server;

use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\Command;

use pocketmine\Command\CommandSender;

use jojoe77777\FormAPI\SimpleForm;

use pocketmine\utils\Config;



class main extends PluginBase  {

    

    public function onEnable():void {

        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }

    


    

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{

        switch($cmd->getName()){

            case "joinui":

                if($sender instanceof Player){

                    $this->openMyForm($sender);

                    return true;

                }else{

                    $sender->sendMessage("Active Command in server :)");

                }

            break;    

        }

        return true;

    }

    

    public function openMyForm($sender){

        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");

        $form = $api->createSimpleForm(function(Player $sender, int $data = null) {

            $result = $data;

            if($result == null){

                return true;

            }

            switch($result){

                case 0:

                    

                break;    

                

            }

        });

        $form->setTitle($this->getConfig()->get("title"));

        $form->setContent($this->getConfig()->get("content"));

        $form->addButton($this->getConfig()->get("Ok"));

        $form->sendToPlayer($sender);

        return $form;

    } 

}

