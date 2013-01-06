<?php $navBar = 'nav/' . $pageTitle . 'bar.php'; ?>
<?php include('mysql.php'); define('RT', '/mikepatt.org/'); $rt = "/mikepatt.org/"; function rt(){ return "/mikepatt.org/"; } ?>
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mike Patterson &mdash; <?php echo $pageTitle; ?></title>

	<!-- JavaScript Detection -->
	<script>document.documentElement.className += " js";</script>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="keywords" content="Mike Patterson, Mike, Patterson, University of Pennsylvania, UPenn, Penn, CIS, Computer Science, resume, mikepatt, mikepatt77, projects, courses, activities">
	<meta name="description" content="The projects, courses, activities, and contact info of a science fiction writer with a knack for computer science.">
	<meta name="publisher" content="Mike Patterson">
	<meta name="content-language" content="en">
	<meta name="revisit-after" content="2 days">
	<meta name="robots" content="index,nofollow">

	<link href="<?php RT; ?>img/favicon.png" rel="icon" type="image/png">
	<link href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700&amp;text=YAML4%20CSS%20Framework" rel="stylesheet" type="text/css"/>
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700|Droid+Sans:700" rel="stylesheet" type="text/css">
	<link href="<?php RT; ?>css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="<?php RT; ?>js/snippet/snippet.css" rel="stylesheet" type="text/css"/>
</head>

<body id="yaml-top" class="doc">

<div itemscope itemtype="http://data-vocabulary.org/Person" id="intro" role="contentinfo">
	Mike '<span itemprop="nickname">Merlin</span>' Patterson - comp sci, sci fi, fyi
</div>

<?php include('topnavbar.php') ?>

<header role="banner">
	<div itemscope itemtype="http://data-vocabulary.org/Person" class="ym-wrapper">
		<div class="ym-wbox">
			<hgroup>
				<h1 style="color:#FFFFFF;">Mike Patterson</h1>
				<h2><span itemprop="role">Computer Scientist</span></h2>
			</hgroup>
			<p>A passionate coder with an interest in <em>startups</em>, <em>search</em> and <em>security</em></p>
			<p>This website is 60% complete.</p>
			<div class="ym-grid linearize-level-1">
				<div class="ym-g20 ym-gl">&nbsp;</div>
				<div class="meter ym-g60 ym-gl">
					<span style="width: 60%"></span>
				</div>
				<div class="ym-g20 ym-gr">&nbsp;</div>
			</div>
		</div>
	</div>
</header>