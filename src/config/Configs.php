<?php

namespace hannespries\config;

use hannespries\events\EventHandler;

class Configs
{
    private static $instance = null;

    private $configs = [];
    private $instances = [];

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function add($moduleName, $values = [])
    {
        $values = EventHandler::getInstance()->fireFilterEvent('config_loading_preadd', $values, ['moduleName' => $moduleName]);
        $this->configs[$moduleName] = $values;
    }

    public function getConfig($moduleName): Config
    {
        if (!isset($this->instances[$moduleName])) {
            $this->instances[$moduleName] = new Config($moduleName, $this->configs[$moduleName] ?? []);
        }
        return $this->instances[$moduleName];
    }
}
