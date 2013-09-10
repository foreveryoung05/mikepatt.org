<?php
$pageTitle="Home"; 
include('header.php'); 

beginMainWrapper(); ?>
		
<div class="ym-grid linearize-level-1">
	<!-- begin current courses -->
	<div class="ym-g33 ym-gl">
		<div class="ym-gbox-left"> <?php
			$term = mysql_fetch_array(getTerms()); $term = $term["term"]; ?>
			<h3 class="center-text">
				Current Courses <span class="subh"><?php echo readableTerm($term); ?></span>
			</h3>
			<div class="box info">
			<ul> <?php
			$currCourses = getCourses($term);
			while($course = mysql_fetch_array($currCourses)){ ?>
				<li class="left-text"> <?php
					courseLink($course["num"]);
					echo " - " . $course["name"]; ?>
				</li> <?php
			} ?>
			</ul>
			</div>
		</div>
	</div>
	<!-- end current courses -->
	
	<!-- begin merlin venture --> <?php
	$post = blogPost(0); ?>
	<div class="ym-g33 ym-gl">
		<div class="ym-gbox-left">
			<h3 class="center-text">The Merlin Venture <span class="subh">Blog</span></h3>
			<div class="box">
			<p>
			<a href="<?php echo $post["url"]; ?>"><?php echo $post["title"]; ?></a>
			</p>
			<p class="justified">
			<?php echo $post["intro"] . ".."; ?>
			</p>
			<p>
			Read more <a href="http://themerlinventure.mikepatt.org">here</a>
			</p>
			</div>
		</div>
	</div>
	<!-- end merlin venture -->
	
	<!-- begin skills -->
	<div class="ym-g33 ym-gl">
		<div class="ym-gbox-left">
			<h3 class="center-text">Skills <span class="subh">Languages and Technologies</span></h3>
			<div class="box info">
			<table class="narrow no-table-border">
				<thead>
					<tr>
					<th style="border-bottom-width: 0px;">Skill</th>
					<th style="border-bottom-width: 0px;">Learned From</th>
					</tr>
				</thead>
				
				<tbody>	<?php
				$skills = getSkills();
				while($skill = mysql_fetch_array($skills)){ 
					$sid = $skill["id"];
					$name = $skill["name"]; ?>
					<tr>
						<!-- image -->
						<td class="no-td-border"> <?php 
							skillImage($skill, 21);
							echo $name; ?>
						</td>
						<!-- learned from -->
						<td class="no-td-border"><?php
							$vias = getSkillVias($sid); 
							$numVias = mysql_num_rows($vias); 
							$numVia = 1; 
							$c = ",";
							while($via = mysql_fetch_array($vias)){
								$cnum = $via["cnum"]; 
								$siteid = $via["siteid"];
								if($cnum !== "NONUM")
									courseLink($cnum);
								if($siteid != 99)
									siteLink($siteid);
								if($numVia == $numVias) 
									$c = ""; 
								echo $c;
								$numVia += 1; 
							} ?>							
						</td>
					</tr> <?php 
				} ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<!-- end skills -->
</div> <?php
			
endMainWrapper();
include('footer.php') ?>