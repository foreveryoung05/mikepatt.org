<?php
$pageTitle = "KCECH - TP";
include("mysql.php"); 
include("0.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title><?php echo $pageTitle; ?></title>

	<!-- JavaScript Detection -->
	<script>document.documentElement.className += " js";</script>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="author" content="Mike Patterson">
	<meta name="publisher" content="Mike Patterson">
	<meta name="revisit-after" content="2 days">
	<meta name="robots" content="index,nofollow">
	
	<link href="/img/favicon.png" rel="icon" type="image/png"><?php
	cssLink("layout");
	insertStyle(); ?>
</head>

<body id="yaml-top" class="doc">

<div itemscope itemtype="http://data-vocabulary.org/Person" role="contentinfo" style="display: none;">
	<span itemprop="name">Mike 'Merlin' Patterson</span>
	<span itemprop="nickname">Merlin</span>
	<span itemprop="role">Computer Scientist</span>
	<span itemprop="affiliation">University of Pennsylvania</span>
	<span itemprop="address">Philadelphia</span>
</div>

<div class="ym-grid linearize-level-1"> <?php
	if($withHeader){ ?>
		<h2>
			<a href="http://kcech.house.upenn.edu/">Kings Court English College House</a> - 
			The Toilet Paper (The TP)
		</h2> <?php
	}
	tpContent("pdf/", $lSize, $rSize); ?>
</div> <?php

// jQuery & Plugins
jsLink("jquery-1.7.1.min");
jsLink("jquery.gridbuilder");
jsLink("jquery.syncheight");
jsLink("jquery.tabs");
jsLink("domscript");
jsLink("googleanalytics");
jsLink("overlay");
jsLink("yaml-focusfix"); ?>

</body>
</html>

