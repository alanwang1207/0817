<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "rw");
while (!feof($f)) //end of file = eof 結尾且最後面
{
	$line = fgets($f);
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
