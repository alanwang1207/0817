<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);
    foreach ($myArray as $key => $value){
        echo $key. "=>". $value. "<br>";
    }
?>