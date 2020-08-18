<?php
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O15451';

print_r($bloodType);

echo '<br>';
for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>