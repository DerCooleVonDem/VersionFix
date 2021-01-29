<?php

namespace derc\fix;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class main extends PluginBase{
    //mehr macht das Plugin nicht
    public function onEnable()
    {
        Server::getInstance()->getCommandMap()->unregister(Server::getInstance()->getCommandMap()->getCommand("version"));
        $this->getLogger()->notice("Version wurde endladen");
    }


}