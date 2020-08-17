<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hello, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    嗨嗨～
    <?php
    echo $_SESSION["who"];
    ?>
</body>
</html>