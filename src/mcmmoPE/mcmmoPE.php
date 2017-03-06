<?php
namespace mcmmoPE;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use mcmmoPE\api\exceptions\InvalidPlayerException;
use mcmmoPE\api\exceptions\InvalidSkillException;
use mcmmoPE\api\exceptions\InvalidXPGainReasonException;
use mcmmoPE\api\AbilityAPI;
use mcmmoPE\api\ChatAPI;
use mcmmoPE\api\ExperienceAPI;
use mcmmoPE\api\PartyAPI;
use mcmmoPE\chat\AdminChatManager;
use mcmmoPE\chat\ChatManager;
use mcmmoPE\chat\ChatManagerFactory;
use mcmmoPE\chat\PartyChatManager;
use mcmmoPE\database\DatabaseManager;
use mcmmoPE\database\DatabaseManagerFactory;
use mcmmoPE\database\FlatfileDatabaseManager;
use mcmmoPE\database\SQLDatabaseManager;
use mcmmoPE\listeners\BlockListener;
use mcmmoPE\listeners\EntityListener;
use mcmmoPE\listeners\InventoryListener;
use mcmmoPE\listeners\PlayerListener;
use mcmmoPE\listeners\SelfListener;
use mcmmoPE\listeners\WorldListener;
use mcmmoPE\metrics\MetricsManager;
use mcmmoPE\party\PartyManager;
use mcmmoPE\party\ShareHandler;
use mcmmoPE\skills\skillManager; /* in the Skill Manager links all the other skills */

class mcmmoPE extends PluginBase
{
    
    public function onEnable()
    {
        $this->getLogger()->info("mcmmo-PE has been enabled.");
    }

    
    public function onDisable()
    {
        $this->getLogger()->info("mcmmo-PE has been disabled.");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
    switch($command->getName())
    {
        case "mcmmo-PE":
            if ($sender instanceof Player)
            {
                        $sender->sendMessage("This plugin is still in the works");
                        return true;
                        break;
            }
                else
                {
                    $sender->sendMessage("Please run this command in-game.");
                    return true;
                    break;
                }
        default:
            return false;
    }
}

