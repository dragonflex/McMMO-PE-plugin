<?php
namespace mcmmo-PE;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use mcmmo-PE\api\exceptions\InvalidPlayerException;
use mcmmo-PE\api\exceptions\InvalidSkillException;
use mcmmo-PE\api\exceptions\InvalidXPGainReasonException;
use mcmmo-PE\api\AbilityAPI;
use mcmmo-PE\api\ChatAPI;
use mcmmo-PE\api\ExperienceAPI;
use mcmmo-PE\api\PartyAPI;
use mcmmo-PE\chat\AdminChatManager; 
use mcmmo-PE\chat\ChatManager;
use mcmmo-PE\chat\ChatManagerFactory;
use mcmmo-PE\chat\PartyChatManager;
use mcmmo-PE\database\DatabaseManager;
use mcmmo-PE\database\DatabaseManagerFactory; 
use mcmmo-PE\database\FlatfileDatabaseManager;
use mcmmo-PE\database\SQLDatabaseManager;
use mcmmo-PE\listeners\BlockListener;
use mcmmo-PE\listeners\EntityListener;
use mcmmo-PE\listeners\InventoryListener;
use mcmmo-PE\listeners\PlayerListener;
use mcmmo-PE\listeners\SelfListener;
use mcmmo-PE\listeners\WorldListener;
use mcmmo-PE\metrics\MetricsManager;
use mcmmo-PE\party\PartyManager;
use mcmmo-PE\party\ShareHandler;
use mcmmo-PE\skills\SkillManager; /* in the Skill Manager links all the other skills */

class mcmmo-PE extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("mcmmo-PE has been enabled.");
    }

    
    public function onDisable(){
        $this->getLogger()->info("mcmmo-PE has been disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
	switch($command->getName()){ 
		case "mcmmo-PE":
			if ($sender instanceof Player){
		            	$sender->sendMessage("This plugin is still in the works");
		            	return true;
		            	break;
			}
	        	else{
	        		$sender->sendMessage("Please run this command in-game.");
	        		return true;
	        		break;
	        	}
		default:
		  	return false;
	}
    }
}
