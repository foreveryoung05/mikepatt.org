<?php
$pageTitle="Courses";
include('header.php');
include($navBar);

beginMainWrapper();

$terms = getTerms();

while($term = mysql_fetch_array($terms)){
$term = $term["term"];
termH2($term);

$courses = getTermCourses($term);
$colCount = 1;
$rowCount = 1;
$color = "";
$numCourses = mysql_num_rows($courses);

while($course = mysql_fetch_array($courses)) {
	$leftCol	= $colCount % 2;
	$oddRow		= $rowCount % 2;
	
	// get course data
	$cnum		= $course["num"];
	$name		= $course["name"];
	$desc		= $course["desc"];
	
	// set css div classes
	$side		= $leftCol ? "ym-gl" : "ym-gr";
	$boxSide	= $leftCol ? "ym-gbox-left " : "ym-gbox-right";

	// alternate colors, info is grey
	$color = ($leftCol XOR $oddRow) ? "info" : "";
	// begin row
	if($leftCol){ ?>
		<div class="ym-grid linearize-level-1"> <?php
	} ?>
			<!-- begin course region -->
			<div class="ym-g50 <?php echo $side; ?>">
				<div class="<?php echo $boxSide; ?> center-text"> <?php
				anchor($cnum); ?>
					
					<!-- course header -->
					<h3 tabindex="-1"> <?php
						echo $name; ?>
						<span class="subh"> <?php
							echo $cnum; ?>
						</span>
					</h3>

					<!-- begin course box -->
					<div class="box <?php echo $color; ?>">
						<div class="ym-grid ym-equalize linearize-level-1">
							<!-- prereqs -->
							<div class = "ym-g50 ym-gl">
								<p class="no-top-mar">
								<span class="label left-text">pre-reqs: <br /> <?php
								$prereqs = getCoursePrereqs($cnum);
								while($prereq = mysql_fetch_array($prereqs)) {
									$prname = $prereq['prereq'];
									if(isCourse($prname)){ ?>
										&nbsp;&nbsp;<?php courseLink($prname); ?><br /> <?php
									} else{ ?>
										&nbsp;&nbsp;<?php echo $prname; ?><br /> <?php
									}
								} ?>
								</span>
								</p>
							</div>

							<!-- skills -->
							<div class = "ym-g50 ym-gr"> <?php
								$skills = getCourseSkills($cnum);
								if(mysql_num_rows($skills) != 0){ ?>
									<h4 class="right-text no-top-mar">Skills <?php
									while($skill = mysql_fetch_array($skills)){
										skillImage($skill, 21);
									} ?>
									</h4> <?php 
								} ?>
							</div>
						</div>
					
						<!-- description -->
						<ul><?php
							echo $desc; ?>
						</ul>

					</div>
					<!-- end course box -->
				</div>
			</div>
			<!-- end course region --> <?php
	// end row
	if(!$leftCol || $colCount == $numCourses){
		$rowCount += 1; ?>
		</div><?php
	}
	$colCount += 1;
}
}

endMainWrapper();
include('footer.php');
?>