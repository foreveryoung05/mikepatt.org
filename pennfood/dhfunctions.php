<?php
$H = "hill/";
$E = "kings/";
$C = "commons/";
$B = "weekly_menu2.html";
$L = "weekly_menu.html";
$D = "weekly_menu3.html";

function getDay(){
	date_default_timezone_set("America/New_York");
	$date = getdate();
	return $date["weekday"];
}

function dhURL($place, $time){
	$ROOT = "http://www.diningatpenn.com/penn/cafes/residential/";
	$dhURL = $ROOT . $place . $time;
	return $dhURL;
}

function dhTable($place, $time){
	$weekday = getDay();
	
	$file = file(dhURL($place, $time));
	
	$tableStart = 0;
	while(!strstr($file[$tableStart++], "<table>")){
		if(strstr($file[$tableStart], "</html>")){ return; }
	}
	$tableStart--;
	
	$tableSize = 0;
	$tableArray = array();
	$bad = array("<td width=\"15px\"></td>");
	while(!strstr($file[$tableStart + $tableSize], "</table>")){
		array_push($tableArray, str_replace($bad, "", $file[$tableStart + $tableSize])); $tableSize++;
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
			echo ($tableArray[$i]);		
		}
	}

	return $tableArray;
}
?>
