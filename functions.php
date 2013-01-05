<?php
function convertSem($sem){
	$seasDict = array("A" => "Spring", "B" => "Summer", "C" => "Fall");
	return array("season" => $seasDict[substr($sem, -1)], "year" => substr($sem, -3, 2));  
}

function size($width, $height){
	echo "width=" . $width . " height=" . $height;
}
?>