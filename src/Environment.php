<?php

namespace app;

class Environment
{
    /** @var array */
    protected static $environmentConfig;

    /**
     * @return array
     */
    public static function get()
    {
        if (!static::$environmentConfig) {
            static::$environmentConfig = require(__DIR__ . '/config/env.php');
        }
        return static::$environmentConfig;
    }
}
