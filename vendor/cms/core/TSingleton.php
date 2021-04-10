<?php


namespace cms;


trait TSingleton
{
    private static self|null $instance = null;

    public static function instance()
    {
        if(static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct(){}

}