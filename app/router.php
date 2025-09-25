<?php
class router{ // روتر نباید extends کند
    private $request = null;
    public function takingRequests(){
        // آبجکت از کلاس ریکوئست باید داشته باشم
        return $this -> request = request::get();
    }
    private function perform(){
        $rout = $this -> takingRequests();
        echo 'rout : ';
        var_dump($rout);
        echo '<br>';
        var_dump($this -> arrayInParsedURI);
        $rout[0]::{$rout[1]}($rout);
    }
    public static function get(){
        (new (static::class)) -> perform();
        // $thiss -> captureRequest();
        // $thiss;
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
    