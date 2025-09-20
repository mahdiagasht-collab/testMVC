<?php
class userControler extends controler
{
    
    protected function show($value){
        $result = ('Model' . static::$request[0] )::find(static::$request[1]);

        // include ('view' . static::$request[0] . '.php');
        echo 'view/viewUser.php -> ';
        echo '<br>';
        $addres = loadFile::loadFile('view' . static::$request[0]);
        include($addres);
        // include('testAddres.php');
        // var_dump();
        echo '👍';
        die();
    }
}
