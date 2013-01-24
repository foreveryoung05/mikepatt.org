<?php
$srvRoot = $_SERVER["DOCUMENT_ROOT"]; 
$retRoot = strcmp($srvRoot, "C:/Code/") ? "/" : "/mikepatt.org/"; 
define("RT", $retRoot);

function RT(){
	global $retRoot;
	echo $retRoot;
}

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
	$dayArray = mysql_fetch_array(mysql_query("SELECT DAY('" . $date . "')"));
	$day = $dayArray[0]; $month = $monthDict[$monthArray[0]]; $year = $yearArray[0];
	$sYear = " '" . substr($year, 2);
	return array("day" => $day, "month" => $month, "year" => $year, "sYear" => $sYear,
				"mdy" => $month . " " . $day . " " . $year, "my" => $month . " " . $year,
				"mdsy" => $month . " " . $day . " " . $sYear, "msy" => $month . " " . $sYear,);
}


function getDirArray($dir){
	$dir2 = opendir($dir);
	while ($fileName = readdir($dir2)){
		if(substr("$fileName", 0, 1) != "."){
			$dirArray[] = $fileName;	
		}
	} 
	closedir($dir2);
	return $dirArray;
}

function printDir($dir, $sort, $frame){
	$dirArray = getDirArray($dir);
	array_pop($dirArray);
	if($sort == "r"){ rsort($dirArray); } else {}
	$revCount = $count = count($dirArray);
	for($index = 0; $index < $count; $index++){ ?>
		<li>
			<a href="#TheTP" onclick="print.location.href='<?php echo $dir . "/" . $dirArray[$index]; ?>',digital.location.href='http://bit.ly/tp2012f<?php echo $revCount--; ?>'">
				<?php echo substr(str_replace(" [","<br />[",$dirArray[$index]), 0, -4); ?>
			</a>
		</li>
	<?php
	}
	return $dirArray;
}

?>