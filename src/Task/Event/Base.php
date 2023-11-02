<?php

/**
 *Pluginin Satılması ve Editlenmesi Yasaktır
 * 
 * @name: TaskEvent
 * @version: 0.1
 * @api: 5.0.0
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
use pocketmine\player\Player;
use pocketmine\event\player\PlayerJoinEvent as GirisEvent;
use pocketmine\event\Listener;
use Task\Event\TaskEvent;

class Base extends PluginBase implements Listener{
	public function onEnable(): void {
		$this->getLogger()->info("§aDakikaPara Aktif");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onJoin(GirisEvent $event): void {
		$player = $event->getPlayer();
		$this->getScheduler()->scheduleRepeatingTask(new TaskEvent(), 20 * 600);
	}
}
