<?php
class userControler extends controler
{
    
    public function show(array $value){
        var_dump($value);
        loadFile::loadFile('viewUser' , modelUser::find($value[0]));
    }

    public function test(){
        echo "test";

        die();
    }
}
