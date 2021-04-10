<?php


namespace cms;


class Registry
{
    use TSingleton;

    protected static array $properties = [];

    public function setPropety($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) return self::$properties[$name];
        else return null;
    }

    public function getProperties(){
        return self::$properties;
    }

}