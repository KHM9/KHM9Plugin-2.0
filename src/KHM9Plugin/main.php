<?php

namespace KHM9Plugin;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class main extends PluginBase {

	public function onEnable(){
		$this->getLogger()->info("Plugin Enabled!!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "KHM9":
				$sender->sendMessage("WOW!! KHM9 MADE A PLUGIN YOWZERS! https://github.com/KHM9/KHM9Plugin-2.0");
				return true;
			default:
				return false;
		}
	}

	public function onDisable(){
		$this->getLogger()->info("PLUGIN ERR. Please contact the developer! https://github.com/KHM9");
	}
}
