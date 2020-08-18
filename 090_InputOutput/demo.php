<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color:red;
        }
    </style>
</head>
<body>


<!--
    <ul>
    <?php for ($i = 1; $i <= 3; $i++) {?>
        <li><?=$i?></li>
        <?php echo "$i" ?>
    <?php }?>
    </ul> -->




<!-- <?php
$scorelist = array(50, 100, 200, 35);
sort($scorelist);
?>
<ul>
<?php foreach ($scorelist as $value) {?>
    <?php if($value>=60){ ?>
       <li><?=$value?></li>
    <?php } else{?>
        <li class = "fail"><?=$value?></li>
    <?php }?>
<?php }?>
</ul>
 -->



<ul>
<?php foreach ($scorelist as $score) { ?>
    <li class ="<?= (($score < 60) ? "fail": "") ?> ">
        <?= $score ?>
    </li>
<?php }?>
</ul>



</body>
</html>
