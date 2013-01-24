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
						<h3 class="center-text">Current Courses <span class="subh"><?php echo $seas . " '" . $year; ?></span></h3>
						<div class="box info">
						<ul>
						<?php
						$currCourses = mysql_query("SELECT DISTINCT * 
												   FROM course
												   WHERE term='" . $currSem . "' ORDER BY num");
						while($row = mysql_fetch_array($currCourses)){ ?>
							<li class="left-text">
								<a href=<?php echo "courses.php#" . $row["num"]; ?>>
								<?php echo $row["num"] . " - " . $row["name"]; ?>
								</a>
							</li>
						<?php
						} ?>
						</ul>
						</div>
					</div>
				</div>
				
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox-left">
						<h3 class="center-text">The Merlin Venture <span class="subh">Blog</span></h3>
						<div class="box">
						<p>
						What is "The Merlin Venture"?
						</p>
						<p class="justified">
						The Merlin Venture is about me. It is my chronicle of me trying to become a better person, a better computer scientist, a better reader, a better writer,  etc. It is the start of me taking things more seriously that I haven't been: my career, my fitness, my academics, so on and so forth.
						</p>
						<p>
							Find out more <a href="http://themerlinventure.mikepatt.org/2012/12/what-is-merlin-venture.html">here</a>
						</p>
						</div>
					</div>
				</div>
				
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox-left">
						<h3 class="center-text">Skills <span class="subh">Languages and Technologies</span></h3>
						<div class="box info">
						<table class="narrow no-table-border">
							<thead>
								<th style="border-bottom-width: 0px;">Skill</th>
								<th style="border-bottom-width: 0px;">Learned From</th>
							</thead>
							<tbody>
							<?php
							$skills = mysql_query("SELECT DISTINCT * 
												  FROM skills ORDER BY top LIMIT 10");
							while($skill = mysql_fetch_array($skills)){ 
								$sid = $skill["id"]; $name = $skill["name"]; $image = $skill["image"];
							?>
							<tr>
								<td class="no-td-border">
									<img src=<?php echo $image . " "; size(21,21); ?> />
									<?php echo $name; ?>
								</td>
								<!--td class="no-td-border">via</td-->
								<td class="no-td-border">
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
</div>

<?php include('footer.php') ?>