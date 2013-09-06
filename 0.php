<?php
// general functions
//$srvRoot = $_SERVER["DOCUMENT_ROOT"];
//$retRoot = ($srvRoot !== "C:/Users/mikepatt/Code") ? "/" : "/mikepatt.org/"; 
//define("RT", $retRoot);

function RoT(){
	global $retRoot;
	echo $retRoot;
}

function anchor($sName){ ?>
	<span class="anchor" id="<?php echo $sName; ?>"></span> <?php
}

function cssLink($name){ 
	$path = RT . "css/" . $name . ".css"; ?>
	<link href="<?php echo $path; ?>" rel="stylesheet" type="text/css"> <?php
}

function jsLink($name){
	$path = RT . "js/" . $name . ".js"; ?>
	<script src="<?php echo $path; ?>"></script> <?php
}

function beginMainWrapper(){ ?>
	<div id="main" class="ym-clearfix" role="main">
		<div class="ym-wrapper">
			<div class="ym-wbox"> <?php
}

function endMainWrapper(){ ?>
			</div>
		</div>
	</div> <?php
}

function getYear($date){
	$yearArray = mysql_fetch_array(
				 mysql_query(
				 "SELECT YEAR('" . $date . "')"));
	if($yearArray[0] == 9999) return "Present";

	return $yearArray[0];
}

function getMonth($date){
	$monthDict = array(
				"January"	=> "Jan."	, "February" 	=> "Feb.",
				"March"		=> "Mar."	, "April" 		=> "Apr.",
				"May"		=> "May"	, "June" 		=> "Jun.",
				"July"		=> "Jul."	, "August"		=> "Aug.",
				"September"	=> "Sep."	, "October"		=> "Oct.",
				"November"	=> "Nov."	, "December"	=> "Dec.");
	$monthArray = mysql_fetch_array(
				  mysql_query(
				  "SELECT MONTHNAME('" . $date . "')"));
				  
	return $monthDict[$monthArray[0]];
}

function getDay($date){
	$dayArray = mysql_fetch_array(
				mysql_query(
				"SELECT DAY('" . $date . "')"));
	
	return $dayArray[0];
}

function getDateArray($date){
	$year = getYear($date);
	$sYear = " '" . substr($year, 2); // shortYear
	$month = getMonth($date);
	$day = getDay($date);

	$dateArray =  array(
		"year"	=> $year, "sYear" => $sYear,
		"month" => $month, "day" => $day,
		"mdy"	=> $month . " " . $day . " " . $year,	// Jan. 01 2000
		"my"	=> $month . " " . $year,				// Jan. 2000
		"mdsy"	=> $month . " " . $day . " " . $sYear,	// Jan. 01 '00
		"msy"	=> $month . " " . $sYear);				// Jan. '00

	if ($year === "Present")
		$dateArray = array_fill_keys(array_keys($dateArray), "Present");
	
	return $dateArray;
}

function siteLink($id){
	$site = mysql_fetch_array(
			mysql_query(
			"SELECT DISTINCT * 
			FROM sites 
			WHERE id='" . $id . "'")); 
	$name = $site["name"];
	$url = $site["url"]; ?>
	<a href=<?php echo $url; ?>><?php echo $name; ?></a> <?php
}

function blogPost($num){
	$xmlSource = file_get_contents(
	"http://themerlinventure.mikepatt.org/feeds/posts/default");
	$xmlObject = simplexml_load_string($xmlSource);
	
	$title = $xmlObject->entry[$num]->title;
	$content = $xmlObject->entry[$num]->content;
	$intro = strstr($content, "<br /><br />", true);
	$url = $xmlObject->entry[$num]->link[4][@href];
	
	return array(
			"title" => $title,
			"content" => $content,
			"intro" => $intro,
			"url" => $url);
}

// skill functions
function getSkills(){
	return mysql_query(
			"SELECT DISTINCT * 
			FROM skills ORDER BY top LIMIT 10");
}

function skillImage($skill, $size){
	$name = $skill["name"]; 
	$image = $skill["image"]; ?>
	<img src="<?php echo $image ?>"
	alt="<?php echo $name; ?>"
	title="<?php echo $name; ?>" 
	width="<?php echo $size; ?>"
	height="<?php echo $size; ?>" /><?php 
}

function getSkillVias($id){
	return mysql_query(
			"SELECT DISTINCT * 
			FROM skills_via 
			WHERE sid='" . $id . "'");
}

// project functions
function getProjects(){
	return mysql_query(
		   "SELECT DISTINCT * 
		   FROM projects ORDER BY start DESC");
}

function getProjectCourse($id){
	$course = mysql_fetch_array(
			  mysql_query(
			  "SELECT DISTINCT *
			  FROM projects_course
			  WHERE pid='" . $id . "'"));
			  
	return $course["cnum"];
}

function getProjectSkills($id){
	return mysql_query(
		"SELECT DISTINCT * 
		FROM projects_skills, skills
		WHERE sid=id AND pid='" . $id . "'");
}

function projectSite($view){
	// enter if $view is a url
	if($view !== "NOVIEW"){ ?>
		<span class="label">
			<a href=<?php echo $view; ?> target="_blank">Website</a>
		</span> <?php
	}
}

function projectCode($source){
	// enter if $source is a url
	if($source !== "REQUEST"){ ?>
		<span class="label">
			<a href=<?php echo $source; ?> target="_blank">Source Code</a>
		</span> <?php
	}
}

function projectDownload($source){ ?>
	<a href=<?php echo $source . "/archive/master.zip"; ?> class="ym-button ym-next" target="_blank">Download</a> <?php
}

function projectFork($source){ ?>
	<a href=<?php echo $source . "/fork"; ?> class="ym-button ym-edit"  target="_blank">Fork</a> <?php
}

function projectRequest(){ ?>
	<a href="#" class="ym-button ym-next activator" id="activator">Request</a> <?php
}

// course functions
function courseLink($cnum){ ?>
	<a href="courses.php#<?php echo $cnum; ?>"><?php echo $cnum; ?></a><?php
}

function getCourses($term = NULL){
	$query = "SELECT DISTINCT * 
			FROM course ";
	if(isset($term)){
		$query .= "WHERE term='" . $term . "' ";
	}
	$query .= "ORDER BY term DESC, num ASC";
	
	return mysql_query($query);
}

function isCourse($string){
	for($i = 0; $i < 10; $i++){
		if(substr($string, -1) == $i . "")
			return true;
	}
	return false;
}

function getCourseTerm($cnum){
	$termArray = mysql_fetch_array(
				 mysql_query(
				 "SELECT DISTINCT *
				 FROM course
				 WHERE num='" . $cnum . "'"));
				 
	return $termArray["term"];
}

function readableTerm($cOrT){ // course or term
	$seasDict = array(
				"A" => "Spring", 
				"B" => "Summer", 
				"C" => "Fall");
	$term = isCourse($cOrT) ? getCourseTerm($cOrT) : $cOrT;
	$season = $seasDict[substr($term, -1)];
	$year = substr($term, -3, 2);
	
	return $season . " '" . $year; 
}

function termToID($term){

}

function termLink($term){ ?>
	<a href=""></a> <?php
}

function getCoursePrereqs($cnum){
	return mysql_query(
		"SELECT DISTINCT *
		FROM prereqs
		WHERE cnum='" . $cnum . "' ORDER BY prereq");
}

function getCourseSkills($cnum){
	return mysql_query(
		"SELECT DISTINCT * 
		FROM skills_via, skills
		WHERE sid=id AND cnum='" . $cnum . "'");
}

// club functions
function getClubs(){
	return mysql_query(
		"SELECT DISTINCT *
		FROM clubs
		ORDER BY end DESC, start ASC");
}

function getClubRoles($id){
	return mysql_query(
		"SELECT DISTINCT *
		FROM clubs_roles, roles
		WHERE rid=id AND cid='" . $id . "'");
}

// interest functions

?>