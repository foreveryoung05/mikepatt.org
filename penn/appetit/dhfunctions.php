<?php
include("simple_html_dom.php");
define("ACC", "accordion");

define("BREAKFAST", 0);
define("LUNCH", 1);
define("DINNER", 2);

define("HILL", "hill-house"); // 3 x M-F
define("KCECH", "kings-court-english-house"); // 3 x M-F, 2 x S-S
define("COMMONS", "1920-commons"); // 2 x M-S


function hallURL($hall){
	return "http://cms.business-services.upenn.edu/" .
		"dining/hours-locations-a-menus/residential-dining/" . $hall .
		"/weekly-menu.html";
}

function isWeekend(){
	date_default_timezone_set("America/New_York");
	$date = getdate();
	$day = $date["weekday"];
	
	return (($day === "Sunday") || ($day === "Saturday"));
}

function getDayID(){
	date_default_timezone_set("America/New_York");
	$date = getdate();
	return $date["wday"] + 1;
}

function getDayHTML($hall){
	$html = file_get_html(hallURL($hall));
	$id = "#" . ACC . getDayID();
	$dayHTML = $html->find($id);
	
	return $dayHTML[0];
}

function getMealHTML($hall, $meal){
	if($hall === "1920-commons")
		$meal--;
	$html = getDayHTML($hall);
	$tag = "div";
	$mealHTML = $html->find($tag);
	
	echo $mealHTML[$meal];	
}
?>
