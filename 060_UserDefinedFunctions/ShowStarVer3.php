<?php
function ShowStar($iCount, $sWhat = "*")
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
		// result = resule . swhat
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);
?>