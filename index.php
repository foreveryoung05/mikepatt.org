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
						$currCourses = mysql_query("SELECT DISTINCT * 
												   FROM course, term 
												   WHERE cnum=num AND term='" . $currSem . "' ORDER BY num");
						while($row = mysql_fetch_array($currCourses)){ ?>
							<li>
								<a href=<?php echo "courses.php#" . $row["cnum"]; ?>>
								<?php echo $row["cnum"] . " - " . $row["name"]; ?>
								</a>
							</li>
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
							Find out more <a href="http://themerlinventure.mikepatt.org/2012/12/what-is-merlin-venture.html">here</a>
						</p>
					</div>
				</div>
				<div class="ym-g33 ym-gr">
					<div class="ym-gbox-right">
						<h3>Skills <span class="subh">Languages and Technologies</span></h3>
						<table class="narrow">
							<tbody>
							<?php
							$skills = mysql_query("SELECT DISTINCT * 
												  FROM skills ORDER BY top LIMIT 10");
							while($skill = mysql_fetch_array($skills)){ 
								$sid = $skill["id"]; $name = $skill["name"]; $image = $skill["image"];
							?>
							<tr>
								<td>
									<img src=<?php echo $image . " "; size(21,21); ?> />
									<?php echo $name; ?>
								</td>
								<td>via</td>
								<td>
									<?php $vias = mysql_query("SELECT DISTINCT * 
															  FROM skills_via 
															  WHERE sid='" . $sid . "'"); 
									$numVias = mysql_num_rows($vias); $numVia = 1; $c = ",";
									while($via = mysql_fetch_array($vias)){
										$cnum = $via["cnum"]; $siteid = $via["siteid"];
										if(strcmp($cnum, "NONUM")){ ?>
											<a href="courses.php#<?php echo $cnum; ?>">
												<?php echo $cnum; ?></a><?php 
										}
										if($siteid != 99){
											$site = mysql_fetch_array(mysql_query("SELECT DISTINCT * 
																				  FROM sites 
																				  WHERE id='" . $siteid . "'")); 
											$name = $site["name"]; $url = $site["url"]; ?>
											<a href=<?php echo $url; ?>><?php echo $name; ?></a><?php
										}
										if($numVia == $numVias) $c = ""; echo $c; 
										if($numVia == $numVias - 1) echo " and";
									$numVia += 1; 
									} ?>							
								</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include('footer.php') ?>