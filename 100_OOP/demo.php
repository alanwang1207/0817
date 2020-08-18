<?php

class Animal{
    public function __construct($wgvalue= 50)//new的時候就執行
    {
        $this ->wg = $wgvalue;
        echo "object created. my wg is $wgvalue<br>";
    }
    public function __destruct()
    {
        echo "destroy .<br>";
    }

    public $wg = 1;
    public function makeNoise($wg){
        echo "test makenoise and weight is $wg";
    }
}

$obj = new animal(30);
$obj = new animal();
$obj->wg = 10; //沒有$符號
$obj->makeNoise($obj->wg);
$obj->location = "taichu";
echo $obj->location. "x";


?>
