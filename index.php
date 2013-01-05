<?php $pageTitle="Home"; 
$navBar = 'nav/' . $pageTitle . 'bar.php'; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>


<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			
			<div class="ym-grid linearize-level-1">
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox-left">
						<?php $currSem = "2013A"; $semDict = convertSem($currSem);
						$seas = $semDict["season"]; $year = $semDict["year"]; ?>
						<h3>Current Courses <span class="subh"><?php echo $seas . " '" . $year; ?></span></h3>
						<ul>
						<?php
						$currCourses = mysql_query("SELECT DISTINCT * FROM course, term WHERE cnum=num AND term='" . $currSem . "' ORDER BY name");
						while($row = mysql_fetch_array($currCourses)){ ?>
							<li><?php echo $row["cnum"] . " - " . $row["name"]; ?></li>
						<?php
						} ?>
						</ul>
					</div>
				</div>
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox">
						<h3>The Merlin Venture <span class="subh">Blog</span></h3>
						<p>
						What is "The Merlin Venture"?
						</p>
						<p>
The Merlin Venture is about me. It is my chronicle of me trying to become a better person, a better computer scientist, a better reader, a better writer,  etc. It is the start of me taking things more seriously that I haven't been: my career, my fitness, my academics, so on and so forth.
						</p>
						<p>
							Find out more <a href="http://themerlinventure.blogspot.com/2012/12/what-is-merlin-venture.html">here</a>
						</p>
						<!--script src="http://feeds.feedburner.com/TheMerlinVenture?format=sigpro" type="text/javascript" >
						</script>
						<noscript><p>Subscribe to RSS headline updates from: 
							<a href="http://feeds.feedburner.com/TheMerlinVenture"></a><br/>Powered by FeedBurner</p> 
						</noscript-->
					</div>
				</div>
				<div class="ym-g33 ym-gr">
					<div class="ym-gbox-right">
						<h3>Skills</h3>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include('footer.php') ?>