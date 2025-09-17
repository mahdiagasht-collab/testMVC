<?php
class mainDB
{
    protected function __construct()
    {
        $this ->connection = new mysqli('localhost','root','','ecommerce');
    }
    protected function sendQuery(string $query){
        echo '<br>';
        echo $query;
        echo '<br>';
        $this -> connection -> query($query);
    }
}
