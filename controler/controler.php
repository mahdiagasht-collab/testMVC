<?php
class controler{
    protected static $objectControler = null;
    protected static $request = null;
    protected static $route = null;
    public static function __callStatic($name , $arguments){
        (new (static::class)) -> $name($arguments);
    }
}
