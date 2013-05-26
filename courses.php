<?php $pageTitle="Courses"; ?>
<?php include('header.php') ?>
<?php include($navBar) ?>

<?php 
function isCourse($string){
	for($i = 0; $i < 10; $i++){
		if(substr($string, -1) == $i . "") return true;
	}
	return false;
}

function printSem($sem){
	$semDict = convertSem($sem);
	$seas = $semDict["season"]; $year = $semDict["year"]; ?>
	<h2 id="<?php echo $seas . $year; ?>" tabindex="-1"><?php echo $seas . " '" . $year; ?></h2>
	
	<?php $courses = mysql_query("SELECT DISTINCT * 
								 FROM course
								 WHERE term='" . $sem . "' ORDER BY num ASC");
	$colCount = 1; $rowCount = 1; $color = "";
	$numCourses = mysql_num_rows($courses);
	while($course = mysql_fetch_array($courses)) { $oddCol = $colCount % 2; $oddRow = $rowCount % 2;
		$num = $course["num"]; $name = $course["name"]; $desc = $course["desc"];
		$side = $oddCol ? "ym-gl" : "ym-gr"; $boxSide = $oddCol ? "ym-gbox-left " : "ym-gbox-right"; 

		if($oddCol){ $color = $oddRow ? "" : "info"; ?>
		<div class="ym-grid linearize-level-1"><?php } else { $color = !$oddRow ? "" : "info"; } ?>
			<div class="ym-g50 <?php echo $side; ?>">
				<div class="<?php echo $boxSide; ?> center-text">
					<span class="anchor" id="<?php echo $num; ?>"></span>
					<h3 tabindex="-1"><?php echo $name; ?> <span class="subh"><?php echo $num; ?></span></h3> 
					
					<div class="box <?php echo $color; ?>">

						<div class="ym-grid ym-equalize linearize-level-1">
							<div class = "ym-g50 ym-gl">
								<p class="no-top-mar">
								<span class="label left-text">pre-reqs: <br />
								<?php $prereqs = mysql_query("SELECT DISTINCT * 
										                     FROM prereqs 
										                     WHERE cnum='" . $num . "' ORDER BY prereq");
								while($prereq = mysql_fetch_array($prereqs)) { $prname = $prereq['prereq']; ?>
									<?php if(isCourse($prname)){ ?>
										&nbsp;&nbsp;<a href="#<?php echo $prname; ?>"><?php echo $prname; ?></a><br />
									<?php } else{ ?>
										&nbsp;&nbsp;<?php echo $prname; ?><br />
								<?php }
								} ?>
								</span>
								</p> 
							</div>

							<div class = "ym-g50 ym-gr">
								<?php $skills = mysql_query("SELECT DISTINCT * 
														  FROM skills_via, skills
														  WHERE sid=id AND cnum='" . $num . "'"); 
								if(mysql_num_rows($skills) != 0){ ?>
								<h4 class="right-text no-top-mar">Skills
								<?php while($skill = mysql_fetch_array($skills)){
									$skName = $skill["name"]; $image = $skill["image"]; ?>
									<img src=<?php echo $image . " "; size(21, 21); ?> alt="<?php echo $skName; ?>" title="<?php echo $skName; ?>" />
								<?php } ?>
								</h4><?php } ?>
							</div>
						</div>
					
						<ul>
						<?php echo $desc; ?>
						</ul>

					</div>
				</div>
			</div>
		<?php if(!$oddCol || $colCount == $numCourses){ $rowCount += 1; ?>
		</div><?php } ?>
	<?php $colCount += 1;
	} ?>

			<!--span class="anchor" id="<?php echo $num; ?>"></span>
			<h3  tabindex="-1"><?php echo $name; ?></h3>
			<div class="ym-g25 ym-gl">
				<div class="ym-gbox-left">
					<h3><span class="subh"><?php echo $num; ?></span></h3>
					<span class="label">pre-reqs: <br />
						<?php $prereqs = mysql_query("SELECT DISTINCT * 
								                     FROM prereqs 
								                     WHERE cnum='" . $num . "' ORDER BY prereq");
						while($prereq = mysql_fetch_array($prereqs)) { $prname = $prereq['prereq']; ?>
							<?php if(isCourse($prname)){ ?>
								&nbsp;&nbsp;<a href="#<?php echo $prname; ?>"><?php echo $prname; ?></a><br />
							<?php } else{ ?>
								&nbsp;&nbsp;<?php echo $prname; ?><br />
						<?php }
						} ?>
					</span> 
					<?php $skills = mysql_query("SELECT DISTINCT * 
											  FROM skills_via, skills
											  WHERE sid=id AND cnum='" . $num . "'"); 
					if(mysql_num_rows($skills) != 0){ ?>
					<h4>Skills
					<?php while($skill = mysql_fetch_array($skills)){
						$skName = $skill["name"]; $image = $skill["image"]; ?>
						<img src=<?php echo $image . " "; size(21, 21); ?> alt="<?php echo $skName; ?>" title="<?php echo $skName; ?>" />
					<?php } 
					} ?>
					</h4>
				</div>
			</div>
			<div class="ym-g75 ym-gr">
				<div class="ym-gbox-right">
					<p>
					<?php echo $desc; ?>	
					</p>
				</div>
			</div>
		</div-->
	<?php 
} ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
		
		<?php
		for($i = 2013; $i > 2008; $i--){ 
			if($i < 2013)  printSem($i . "C");
			if($i == 2010) printSem($i . "B");
			if($i != 2009) printSem($i . "A");
		}
		?>

		</div>
	</div>
</div>

<?php include('footer.php') ?>