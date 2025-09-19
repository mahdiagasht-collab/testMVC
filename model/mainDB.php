<?php
class mainDB
{
    protected $connection;

    public function __construct(){
        $this -> connection = new mysqli('localhost','root','','ecommerce');
    }
    protected function sendQuery($query){
        echo '<br>';
        echo $query;
        echo '<br>';
        return $this -> connection -> query($query);
    }
}
