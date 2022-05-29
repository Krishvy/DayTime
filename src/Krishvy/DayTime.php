<?php

declare(strict_types=1);

namespace Krishvy;

use pocketmine\plugin\PluginBase;
use pocketmine\world\World;

class DayTime extends PluginBase
{

    public function onEnable(): void
    {
        foreach($this->getServer()->getWorldManager()->getWorlds() as $worlds){
         $worlds->setTime(World::TIME_FULL);   
         $worlds->stopTime();
        }
    }

}
