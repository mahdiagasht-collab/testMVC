<?php
class modelFesade extends mainDB{
    public static function __callStatic($name, $arguments){
        var_dump($arguments);
        echo '<br>';
        return (new Static) -> $name($arguments);
    }
    public function __call($name, $arguments){
        // $this;
        return $this -> $name($arguments);
    }
}
