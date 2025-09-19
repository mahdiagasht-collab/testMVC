<?php
class userControler extends controler
{
    protected function show($value){
        $result = ('Model' . static::$request[0] )::find(static::$request[1]);

        // include ('../view' . static::$request[0] . '.php');

        var_dump(loadFile::loadFile('view' . static::$request[0]));
        echo '👍';
        die();
    }
}
