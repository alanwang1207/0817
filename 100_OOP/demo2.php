<?php

class ctest{
    public $price = 10;
    private $databag;

    public function __set($k,$v) //設定屬性質 k屬性名 v屬性職
{
    echo "set is run $k,$v<br>";
    $databag[$k] = $v;
}
public function __get($k) //
{
    echo "get is run $k<br>";
    return $this->databag[$k];
}

}

$obj = new ctest();
echo $obj->price,"<br>";
$obj->location = 'taichu';
echo $obj->location,"<br>";
//echo $obj->fff,"<br>";

?>