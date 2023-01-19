<?php

namespace Task\Event;

use pocketmine\Server;
use pocketmine\player\Player;
use pocketmine\scheduler\Task;
use Task\Event\Base;
use onebone\economyapi\EconomyAPI;

class TaskEvent extends Task{
	
	public function onRun(): void{
		foreach(Server::getInstance()->getOnlinePlayers() as $player){
			EconomyAPI::getInstance()->addMoney($player->getName(), 200);
		}
	}
}
