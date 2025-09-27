<?php
class router{ // روتر نباید extends کند // مسیر یاب
    // private $request = null; // این رو کامنت کردم چون از طریق آبجکت ریکوئست بهش توی آبجکتش دسترسی دارم
    public static request $objAppRequest;
    
    public $route =  null;

    private function __construct(){
        static::$objAppRequest = request::getUserRequest($this);
    }


    // این متد وب باید در کلاس دیگه ای باشه
    private function web(){ 
        return [
            'User/{id}' => ['userControler' , 'show'],
            "{id}/User" => ['userControler' , 'test']
            // 'User/update/{id}' => ['userControler' , 'update'],
            // '{id}/User/update' => ['userControler' , 'update']
        ];
    }

    private function routeDesignator(array $request){
        $routs = $this -> web();
        foreach ($routs as $key => $route) {
            $routArray = explode("/" , $key);
            
            for ($i=0; $i < count($request); $i++) { 
                if (str_contains($routArray[$i] , "{")){
                    $routArray[$i] = $request[$i];
                    if ($request == $routArray) {
                        static::$objAppRequest -> requestValue = [$request[$i]];
                        $this -> route = $route;
                    }
                }
            }
        }  
    }

    // ---------------------------------------------------------
    
    public static function get(){
        (new (static::class)) -> routeDesignator(static::$objAppRequest -> request);
    }
}




























// public function parsURIToPerform(){
//     $this -> arrayInParsURIToPerform = $this -> explode(',', $arrayInParsedURI[2]);

// }  

// توی کدوم متد باید  یوآر ال برسی بشه
    // و بر اساس یو آر ال کدوم کنترلر و ویو باید اینکلود بشه
    // و اگه پارامتر داشت بهش فرستاده بشه
    
    // در یکی ازمتد ها کنترلر مورد نظر برسی میشود

    // وقتی که یو آر ال مابه صورت localhost/testMVC/user,5 باشد :
    // اولامعلوم میشود که ویوی یوزر اینکلود میشود
    // دوم معلوم میشود که کنترولر یوزر اینکلود میشود
    // سسوم معلوم میشود که در کنترلر باید متد شو فراخوانی شود
    // چهارم معلوم میشود که عدد 5 باید بهش فرستاده شود
    