<?php

class request{
    private $arrayInParsedURI =             null;
    private $requestAndRequestValue =       null;
    private function __construct()
    {
        $this -> captureRequest();
        $this -> routeDesignator();
    }
    public static function __callStatic($name, $arguments){
        return (static::class)::$name($arguments);
    }
    private static function get(array $array){
        return (new (static::class)) -> requestAndRequestValue;
    }
    private function web(){ 
        return include('web.php'); 
    }
    private function arraySorter(){
        unset($this -> arrayInParsedURI[0] , $this -> arrayInParsedURI[1]);
        return array_values($this -> arrayInParsedURI);
    }
    private function routeDesignator(){
        $routs = $this -> web();
        $request = $this -> arraySorter();

        var_dump($request);
        die();

        foreach ($routs as $key => $route) {
            $routArray = explode("/" , $key);
            
            for ($i=0; $i < count($request); $i++) { 
                if (str_contains($routArray[$i] , "{")){
                    $defaultVariable = $routArray[$i];
                    $routArray[$i] = $request[$i];
                    if ($request == $routArray) {
                        $variableValueInTheRoute = [rtrim(ltrim($defaultVariable , "{") , "}") => $request[$i]];
                        
                        $routArray[$i] = $defaultVariable;
                        $this -> requestAndRequestValue = [$routs[implode('/' , $routArray)] , $variableValueInTheRoute];
                    }
                }
            }
        }  
    }
    
    private function captureRequest(){
        $this -> arrayInParsedURI = explode('/' , $_SERVER['REQUEST_URI']);
    }
}