<?php

namespace hannespries\config;

class Config
{
    private $config = [];
    private $name;

    public function __construct($name = '', $config = [])
    {
        $this->config = $config;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function get($key, $default = null)
    {
        return $this->config[$key] ?? $default;
    }
}
