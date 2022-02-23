<?php

namespace SkulZTeams\Join_Ui_X;

/*

This plugin is still in the development stage, if there is a bug, immediately report it to the issue to be fixed immediately, And for this release, it's version 1.0

*/

use pocketmine\server;

use pocketmine\PLayer;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\command;

use pocketmine\commnad\CommandSender;

class main extends PluginBase {

    

    public function onEnable():void {

        $this->getLogger()->info"Plugin Active"

    }

    

    public function onDisable():void {

        $this->getLogger()->info"Plugin Not Active"

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

        $form->setTitle("Join Ui X");

        $form->setContent("change in config.yml");

        $form->addButton("Ok");

        $form->sendToPlayer($sender);

        return $form;

    } 

}
