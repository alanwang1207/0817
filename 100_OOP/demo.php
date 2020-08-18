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
    public function makeNoise($wg=5){
        echo "test makenoise and weight is $wg";
    }
}

$obj = new animal(30);
echo "<br>0-------------------<br>";
$obj = new animal();
echo "<br>1-------------------<br>";
$obj->wg = 10; //沒有$符號
$obj->makeNoise($obj->wg);
echo "<br>2-------------------<br>";
$obj2 = $obj;
echo "<br>3-------------------<br>";
$obj->location = "taichu";
echo "<br>4-------------------<br>";
echo $obj->location. "x";
echo "<br>5-------------------<br>";


?>
