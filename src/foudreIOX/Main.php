<?php

namespace foudreIOX;

use foudreIOX\Events\JoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public static string $prefix = "§f[§eJoinMesaage§f]";
    public function onEnable(): void
    {
        $this->getLogger()->info("plugin JoinMessageFR onEnable");
        $this->getServer()->getPluginManager()->registerEvents(new JoinEvent(), $this);
    }
}