<?php
class userControler extends controler
{
    
    protected function show(array $value){

        loadFile::loadFile('viewUser' , modelUser::find($value[0]['id']));
    }

    public function test(){
        echo "test";

        die();
    }
}
