<?php
class controler{
    private $rout = ['user/5' => ['controler']];
    private static $request = null;
    public static function __callStatic($name, $arguments){
        static::$request = $arguments;
        return static::$name($arguments);
    }
    private static function controler(array $requests){
        return (new $requests[0][0]) -> show($requests[0][1]);
    }
}
