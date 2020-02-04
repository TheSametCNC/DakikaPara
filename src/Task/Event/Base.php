<?php

/**
 *Pluginin Satılması ve Editlenmesi Yasaktır
 * 
 * @name: TaskEvent
 * @version: 0.1
 * @api: 3.00
 * @author: SametCNC 
 *
 *  ____    _    __  __ _____ _____ 
 * / ___|  / \  |  \/  | ____|_   _|
 * \___ \ / _ \ | |\/| |  _|   | |  
 *  ___) / ___ \| |  | | |___  | |  
 * |____/_/   \_\_|  |_|_____| |_|  
 *                                                                  
 **/
namespace Task\Event;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent as GirisEvent;
use pocketmine\event\Listener;
use Task\Event\TaskEvent;
use onebone\economyapi\EconomyAPI;

class Base extends PluginBase implements Listener{
	public function onEnable(){
		$this->getLogger()->info("DakikaPara Aktif");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function giris(GirisEvent $event){
		$player = $event->getPlayer();
		$this->getScheduler()->scheduleRepeatingTask(new TaskEvent(), 20 * 600);
	}
}
