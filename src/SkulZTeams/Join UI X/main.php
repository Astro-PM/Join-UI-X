<?php

namespace SkulZDev;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{

    

    public function onEnable(){

        $this->getLogger()->info("Plugin Active!");

    }

    

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{

        switch($cmd->getName()){

            case "Join UI X":

                if($sender instanceof Player){

                    $this->openMyForm($sender);

                    return true;

                }else{

                    $sender->sendMessage("Command Aktif Jika Main Di Serper");

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

        $form->setTitle("Join Ui X");

        $form->setContent("Plugin Join Ui X By SkulZDev");

        $form->addButton("Ok");

        $form->sendToPlayer($sender);

        return $form;

    } 

}        

        
