<?php 
$navBar = "nav/" . $pageTitle . "bar.php"; 
include("mysql.php"); 
include("0.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="alexaVerifyID" content="8GpsXUcaXho1gDud4VqiNKsv0ow" />
	<meta name="bitly-verification" content="766d2d9c73e6"/>
	
	<title>Mike Patterson &mdash; <?php echo $pageTitle; ?></title>

	<!-- JavaScript Detection -->
	<script>document.documentElement.className += " js";</script>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="keywords" content="Mike Patterson, Mike, Patterson, Merlin, University of Pennsylvania, UPenn, Penn, CIS, Computer Science, resume, mikepatt, mikepatt77, projects, courses, activities">
	<meta name="description" content="The <?php echo $pageTitle; ?> page of a science fiction writer with a knack for computer science.">
	<meta name="author" content="Mike Patterson">
	<meta name="publisher" content="Mike Patterson">
	<meta name="revisit-after" content="2 days">
	<meta name="robots" content="index,nofollow">

	<link href="/img/favicon.png" rel="icon" type="image/png"> <?php
	cssLink("layout"); ?>
</head>

<body id="yaml-top" class="doc">

<div itemscope itemtype="http://data-vocabulary.org/Person" role="contentinfo" style="display: none;">
	<span itemprop="name">Mike 'Merlin' Patterson</span>
	<span itemprop="nickname">Merlin</span>
	<span itemprop="role">Computer Scientist</span>
	<span itemprop="affiliation">University of Pennsylvania</span>
	<span itemprop="address">Philadelphia</span>
</div>

<div id="intro">
	Mike 'Merlin' Patterson - comp sci, sci fi, fyi
</div> <?php

include("topnavbar.php"); ?>

<header role="banner"> <?php // header tag is needed for sticky menus
	if($pageTitle === "Home"){ ?>
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<hgroup>
				<h1 style="color:#FFFFFF;">Mike Patterson</h1>
				<h2>COMPUTER SCIENTIST</h2>
			</hgroup>
			<p>A passionate coder with an interest in <em>startups</em>, <em>search</em> and <em>security</em></p>
		</div>
	</div> <?php
	} ?>
</header>