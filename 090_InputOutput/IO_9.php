<?php
header("Content-Type: image/png");
// 必須跟瀏覽器說明要傳送的檔案類型

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>

<!-- fread 讀檔案進來 後面接要讀的檔案大小 -->