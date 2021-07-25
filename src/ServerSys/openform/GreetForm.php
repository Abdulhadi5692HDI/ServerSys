<?php

declare(strict_types=1);

namespace abdulhadi5692\ServerSys\openform;
 
 use pocketmine\Player;
 use pocketmine\Server;
 use pocketmine\command\Command;
 use pocketmine\command\CommandSender;
 
 //Use PluginBase
 use pocketmine\plugin\PluginBase;
 
 class main extends PluginBase{
 	public function onEnable(){
 	$this->getLogger()->info("Registered GreetForm");
 }
 public function onDisable(){
$this->getLogger()->info("Disabling GreetForm");

                     
       }
 public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
 	switch($cmd->getName()){
 	case "opengreet":
 if($sender instanceof Player){
 	$this->form($sender);
  } else {
  	$sender->sendMessage("Your not a player and forms can only be IN-GAME (are you a ne4d)");
      
}

}
  return true;   }

            }
  public function  form($player){
  	$api = $this->getServer()->getPluginManager->getPlugin("FormAPI")
  $form = $api->createSimpleForm(function (Player $player, int $data = null ){
  $result 	= $data;
  if($result === null){
  	
  switch($result){
  	case 0;
  $player->sendMessage("Link: www.abdulhadishahzad.xp3.biz/servers/5692MC1/about");
}
  	});
  $form->setTitle("§2Welcome to !Abdulhadi5692MC§3 :) :D ");
  $form->setContent("§4§l§o------------------------My server is made in php with pmmp plugins Hope enjoy------------------");
  $form->addButton("§2More Details");
 $form->sendToPlayer($player);
 return $form;
  }
