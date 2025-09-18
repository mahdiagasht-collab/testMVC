<?php
class controler{
    protected static $request = null;
    public static function __callStatic($name, $arguments){
        static::$request = explode(',' , $arguments[0]);
        return static::$name(static::$request);
    }
    private static function controler(array $requests){
        return (new ($requests[0] .'Controler')) -> show($requests[0]);
    }
}
