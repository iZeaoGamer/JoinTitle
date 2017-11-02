<?php

namespace JoinTitle;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\PluginTask;
use pocketmine\Player;
use pocketmine\Server;

class SendTitleTask extends PluginTask{
    
    private $plugin;
    
    public function __construct(Main $plugin, Player $player){
		    parent::__construct($plugin, $player);
		    $this->plugin = $plugin;
	  }
    
    public function onRun(int $currentTick){
        $title = $this->plugin->getConfig()->get("Title");
        $subtitle = $this->plugin->getConfig()->get("Subtitle");
        $fadein = $this->plugin->getConfig()->get("Fade-In");
        $lenght = $this->plugin->getConfig()->get("Lenght");
        $fadeout = $this->plugin->getConfig()->get("Fade-Out");
        $player->addTitle($this->plugin->translateColors($title, $subtitle, $fadein, $lenght, $fadeout));
    }
}
