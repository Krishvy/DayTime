<?php

declare(strict_types=1);

namespace Krishvy;

use pocketmine\plugin\PluginBase;
use Krishvy\DayTimeTask;

class DayTime extends PluginBase
{

    public function onEnable(): void
    {
        $this->getScheduler()->scheduleRepeatingTask(new DayTimeTask($this), 40);
    }

}