<?php

class request{
    private $arrayInParsedURI = null;
    public $request =           null;
    private function __construct()
    {
        $this -> captureRequest();
        $this -> routeDesignator();
    }
    public static function __callStatic($name, $arguments){
        return (static::class)::$name($arguments);
    }
    private static function get(array $array){
        return (new (static::class)) -> request;
    }
    private function web(){ 
        return include('web.php'); 
    }
    private function arraySorter(){
        unset($this -> arrayInParsedURI[0] , $this -> arrayInParsedURI[1]);
        return array_values($this -> arrayInParsedURI);
    }
    private function routeDesignator(){
        
        // $this -> request = $this -> web()[implode('/' , $this -> arraySorter())];        
    }
    
    private function captureRequest(){
        $this -> arrayInParsedURI = explode('/' , $_SERVER['REQUEST_URI']);
    }
}