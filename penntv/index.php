<html>
<head>
<title>Penn TV</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style>
</style>
</head>

<?php
date_default_timezone_set("America/New_York");
function mvURL($channel){
$date = getdate();
print_r($date);
$day = $date["mday"]; $month = $date["mon"]; $md = $month . "/" . $day;
$year = $date["year"]; $sYear = substr($year, 2);
$monthName = $date["month"]; $sMonth = substr(strtolower($monthName), 0, 3);
$hour = $date["hours"];
$minute = $date["minutes"];
if($month < 8){ $acYear = ($sYear - 1) . "_" . $sYear; }
else { $acYear = $sYear . "_" . ($sYear + 1); }
echo "'" . $md . "'  ";
$ROOT_URL = "http://www.upenn.edu/video/mc";
$c11 = "11/";
$c22 = "22/";
$mvURL = $ROOT_URL;
if($channel == 11){
	$mvURL = $mvURL . "11/";	
}
else {
	$mvURL = $mvURL . "22/";
}
$mvURL = $mvURL . $sMonth . $sYear . ".html";
return $mvURL;
}
echo mvURL(11);
echo mvURL(22);

?>

<body>
	
</body>
</html>