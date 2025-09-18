<?php
class userControler extends controler
{
    private function modelSpecifier(){
        return new (static::$request[0] . 'Model');
    }
    protected function show($value){
        $this -> modelSpecifier();
        var_dump(static::$request);
        echo '👍';
        die();

        // return ['className' => 'modelUser' ,'method' => 'find' , 'value' => $value];
    }
}
