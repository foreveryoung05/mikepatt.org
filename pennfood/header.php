<html>
<head>
<title>Penn Dining Halls</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style>
	body {
		text-align: center;
	}
	
	table {
		margin-left: auto;
		margin-right: auto;
	}
	
	.english {
		border-style: none;
		border-color: black;
		float:  left; 
		overflow: auto;
		width:  33%; 
		height: 100%;
	}
	
	.other {
		border-style: none none none solid;
		border-color: black;
		float:  left; 
		overflow: auto;
		width:  33%; 
		height: 100%;
	}
	
	.menu {
		border-style: none none solid none;
		border-color: black;
		text-align: center;
		float:  none;
		width:  ;
		height: 3%;
	}
	
	.content {
		float:  left;
		width:  99%;
		height: 97%;
	}
</style>
</head>

<?php
$H = "hill/";
$E = "kings/";
$C = "commons/";
$B = "weekly_menu2.html";
$L = "weekly_menu.html";
$D = "weekly_menu3.html";

function dhURL($place, $time){
	$ROOT = "http://www.diningatpenn.com/penn/cafes/residential/";
	$dhURL = $ROOT . $place . $time;
	return $dhURL;
}

function dhTable($place, $time){
	date_default_timezone_set("America/New_York");
	$date = getdate();
	$weekday = $date["weekday"];
	
	$file = file(dhURL($place, $time));
	
	$tableStart = 0;
	while(!strstr($file[$tableStart++], "<table>")){
		if(strstr($file[$tableStart], "</html>")){ return; }
	}
	$tableStart--;
	
	$tableSize = 0;
	$tableArray = array();
	while(!strstr($file[$tableStart + $tableSize], "</table>")){
		if(!strstr($file[$tableSize],"15px") && 
			!strstr($file[$tableSize],"75px")){
			array_push($tableArray, $file[$tableStart + $tableSize]); $tableSize++;
		}
	}
	array_push($tableArray, $file[$tableStart + $tableSize++]);
	
	$currDayFound = 0;
	$stopPrinting = 0;
	for($i = 0; $i < $tableSize; $i++){
		if(strstr($tableArray[$i], "day") && !strstr($tableArray[$i], "days")){
			$stopPrinting = 1;
			if(strstr($tableArray[$i], $weekday)){
				$stopPrinting = 0;
			}
		}
		if(!$stopPrinting || strstr($tableArray[$i], "table>")){
			echo $tableArray[$i];		
		}
	}

	return $tableArray;
}
?>
