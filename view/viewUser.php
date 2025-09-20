<?php
// var_dump($result);
foreach ($result as $key => $value) {
    echo $value['id'];
    echo '<br>';
    echo $value['name'];
    echo '<br>';
    echo $value['family'];
    echo '<br>';
    echo $value['phonNumber'];
    echo '<br>';
}