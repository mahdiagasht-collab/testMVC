<?php
class controler{
    protected static $objectControler = null;
    protected static $request = null;
    protected static $route = null;
    public static function __callStatic($name, $arguments){
        // static::$request = explode(',' , $arguments[0]);
        // return static::$name(static::$request);
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'request : ';
        var_dump($arguments[0]);
        echo '<br>';
        echo 'route : ';
        var_dump($arguments[1]);
        echo '<br>';
        // var_dump($name);
        // echo '<br>';

        
        static::$objectControler = new ($arguments[1][0]);
        static::$request = $arguments[0];
        static::$route = $arguments[1];


        return static::$objectControler -> {$arguments[1][1]}($arguments[0]);
    }
}
