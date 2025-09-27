<?php
class request{
    // private $arrayInParsedURI =             null;
    // private $requestAndRequestValue =       null;

    public  $request =                      null;
    public  $requestValue =                      null;

    private static router $objAppRouter;

    private function __construct(router $objAppRouter)
    {
        // $this -> requestSpecifier();
        // $this -> routeDesignator();

        static::$objAppRouter = $objAppRouter;
    }
    // public static function __callStatic($name, $arguments){
    //     return (static::class)::$name($arguments);
    // }
    // public static function get(){
    //     return (new (static::class)) -> requestAndRequestValue;
    // }

    // ---------------------------------------------------
    
    // private function arraySorter(){
    // }
    // private function captureURL(){
    //     return ;
    // }

    private function captureRequest(){
        $urlArray = explode('/' , $_SERVER['REQUEST_URI']);
        
        unset($urlArray[0] , $urlArray[1]);
        $this -> request = array_values($urlArray);

        return $this;
    }

    // ---------------------------------------------------
    
    private function requestSpecifier(){
        $arrayInParsedURI = $this -> captureRequest();
        unset($arrayInParsedURI[0] , $arrayInParsedURI[1]);
        
    }
    
    // ---------------------------------------------------
    
    
    
    private function perform(){
        // $this -> takingRequests();
        $this -> request[0][0]::{$this -> request[0][1]}($this -> request[1]);
    }
    
    
    // ---------------------------------------------------
    // ---------------------------------------------------
    
    public static function getUserRequest(router $objAppRouter){
        return (new (static::class)($objAppRouter)) -> captureRequest();
    }
    
    // ---------------------------------------------------
    // ---------------------------------------------------


    public static function get(){
        factory::factory(static::$objAppRouter -> route[0]) -> {static::$objAppRouter -> route[1]}(router::$objAppRequest -> requestValue);
    }

}