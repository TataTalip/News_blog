<?php


namespace App\Blog\Core;


class Registry
{
    use TSingleTone;
    protected  static  $properties = [];

    /**
     * @param $name
     * @param $value
     */
    public  function  setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }
    public function getProperty($name){
        if (isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }

}
