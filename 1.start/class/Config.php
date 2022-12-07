<?php

final class Config 
{
    private static $instance = null;
    private static $values = [];

    private function __clone() {}
    
    private function __construct()
    {
        $config["host"] = "localhost";
        $config["db"] = "code_review1";
        $config["username"] = "root";
        $config["password"] = "";

        self::$values = $config;   
    }

    private static function init() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    public static function getValue($key) {
        self::init();

        return self::$values[$key] ?? '';
    }
}