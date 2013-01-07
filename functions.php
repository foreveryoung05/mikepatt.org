<?php
function convertSem($sem){
	$seasDict = array("A" => "Spring", "B" => "Summer", "C" => "Fall");
	return array("season" => $seasDict[substr($sem, -1)], "year" => substr($sem, -3, 2));  
}

function size($width, $height){
	echo "width=" . $width . " height=" . $height;
}

function sqlDate($date){
	$monthDict = array("January" => "Jan.", "February" => "Feb.", "March" => "Mar.",
					  "April" => "Apr.", "May" => "May", "June" => "Jun.",
					  "July" => "Jul.", "August" => "Aug.", "September" => "Sep.",
					  "October" => "Oct.", "November" => "Nov.", "December" => "Dec.");
	$yearArray = mysql_fetch_array(mysql_query("SELECT YEAR('" . $date . "')"));
	if($yearArray[0] == 9999) return "Present";
	$monthArray = mysql_fetch_array(mysql_query("SELECT MONTHNAME('" . $date . "')"));
	$month = $monthDict[$monthArray[0]]; $year = $yearArray[0];
	return array("month" => $month, "year" => $year);
}
?>