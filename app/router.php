<?php

class executionRequest{
    protected $arrayInParsedURI =             null;

    public function web(){ 
        return include('web.php'); 
    }

    private function routeDesignator(){
        
        $Route = $this -> web();

        unset($this -> arrayInParsedURI[0] , $this -> arrayInParsedURI[1]);
        $this -> arrayInParsedURI = array_values($this -> arrayInParsedURI);

        $requestText = implode('/' , $this -> arrayInParsedURI);

        return $Route[$requestText];        
    }
    
    protected function perform(){
        $rout = $this -> routeDesignator();
        $rout[0]::{$rout[1]}($this -> arrayInParsedURI , $rout);
    }
}

class router extends executionRequest{
    public function parsUrl(){
        $this -> arrayInParsedURI = explode('/' , $_SERVER['REQUEST_URI']);
    }
    public static function get(){
        $thiss = (new static());
        $thiss -> parsUrl();
        $thiss -> perform();
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
    