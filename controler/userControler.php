<?php
class userControler extends controler
{
    protected function show(string $id){
        return ['className' => 'modelUser' ,'method' => 'find' , 'value' => $id];
    }
}
