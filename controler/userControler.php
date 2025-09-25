<?php
class userControler extends controler
{
    
    protected function show(array $value){
        echo '<br>';
        echo 'eeee : ';
        print_r($value[0]['id']);
        echo '<br>';
        $result = modelUser::find($value[0]['id']);

        echo '👍';
        // die();
        // include ('view' . static::$request[0] . '.php');
        echo 'view/viewUser.php -> ';
        echo '<br>';
        $addres = loadFile::loadFile('viewUser');
        include($addres);
        // include('testAddres.php');
        // var_dump();
    }
}
