<?php

namespace mcpeMMO;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use McMMO-PE\api\exceptions\InvalidPlayerException;
use McMMO-PE\api\exceptions\InvalidSkillException;
use McMMO-PE\api\exceptions\InvalidXPGainReasonException;
use McMMO-PE\api\AbilityAPI;
use McMMO-PE\api\ChatAPI;
use McMMO-PE\api\ExperienceAPI;
use McMMO-PE\api\PartyAPI;
use McMMO-PE\chat\AdminChatManager; 
use McMMO-PE\chat\ChatManager;
use McMMO-PE\chat\ChatManagerFactory;
use McMMO-PE\chat\PartyChatManager;
use McMMO-PE\database\DatabaseManager;
use McMMO-PE\database\DatabaseManagerFactory; 
use McMMO-PE\database\FlatfileDatabaseManager;
use McMMO-PE\database\SQLDatabaseManager;
use McMMO-PE\listeners\BlockListener;
use McMMO-PE\listeners\EntityListener;
use McMMO-PE\listeners\InventoryListener;
use McMMO-PE\listeners\PlayerListener;
use McMMO-PE\listeners\SelfListener;
use McMMO-PE\listeners\WorldListener;
use McMMO-PE\metrics\MetricsManager;
use McMMO-PE\party\PartyManager;
use McMMO-PE\party\ShareHandler;
use McMMO-PE\skills\SkillManager; /* in the Skill Manager links all the other skills */

class McMMO-PE extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("McMMO-PE has been enabled.");
    }

    
    public function onDisable(){
        $this->getLogger()->info("McMMO-PE has been disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
	switch($command->getName()){ 
		case "McMMO-PE": /*mcpemmo*/
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
