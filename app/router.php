<?php

class executionRequest{
    protected $arrayInParsURIToPerform =      null;
    protected function parsURIToPerform(){
        $this -> arrayInParsURIToPerform = $this -> explode(',', $arrayInParsedURI[2]);
        $arrayInReturnedControler = controler::controler($this -> arrayInParsURIToPerform);
        
    }
}
class router extends executionRequest{
    private $arrayInParsedURI =             null;

    // $this -> arrayInParsedURI = 'localhost/testMVC/user,5'; 
    public function __construct(){
        $this -> arrayInParsedURI = explode('/', $_SERVER['REQUEST_URI']);
        $this -> parsURIToPerform();
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
    