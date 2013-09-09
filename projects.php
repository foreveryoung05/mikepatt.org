<?php
$pageTitle="Projects";
include('header.php');
include($navBar);
include('requestform.php');

beginMainWrapper(); ?>
			
<div class="ym-grid ym-equalize linearize-level-1">
	<div class="ym-g30 ym-gl">&nbsp;</div>
	<div class="ym-g40 ym-gl box">
		<p>
		Due to the collegiate nature of these projects, some source code cannot be made available for direct download. If you are a company looking to view my work, use the request links below or the form <a href="#" class="activator" id="activator">here</a>.
		</p>
	</div>
	<div class="ym-g30 ym-gl">&nbsp;</div>
</div> <?php


// initialize while loop over projects
$projects = getProjects();
$colCount = 1;
$rowCount = 1; 
$color = "";

while($project = mysql_fetch_array($projects)){
	$leftCol 	= $colCount % 2; 
	$oddRow 	= $rowCount % 2;
	
	// get project data
	$id 		= $project["id"];
	$name 		= $project["name"];
	$sName 		= $project["sname"];
	$desc 		= $project["desc"];
	$source 	= $project["source"]; 
	$view 		= $project["view"];
	$start 		= getDateArray($project["start"]); 
	$end 		= getDateArray($project["end"]);

	// set project course and term
	$cnum 		= getProjectCourse($id);
	if($cnum !== "NONUM"){
		$term = readableTerm($cnum);
	} else {
		$cnum = "Indep.";
		$term = $start["mdsy"] . " - " . $end["mdsy"];
	}
	
	// set css div classes
	$side 		= $leftCol ? "ym-gl" : "ym-gr"; 
	$boxSide 	= $leftCol ? "ym-gbox-left " : "ym-gbox-right"; 
	
	// alternate colors, info is grey
	$color = ($leftCol XOR $oddRow) ? "info" : "";
	// begin row
	if($leftCol){ ?>
		<div class="ym-grid linearize-level-1"> <?php
	} ?>
			<!-- begin project region -->
			<div class="ym-g50 <?php echo $side; ?>">
				<div class="<?php echo $boxSide; ?> center-text"> <?php
				anchor($sName); ?>

					<!-- project header -->
					<h3 tabindex="-1" > <?php 
						echo $name; 
						projectSite($view);
						projectCode($source); ?>
					</h3>

					<!-- begin project box -->
					<div class="box <?php echo $color; ?>">	
						<div class="ym-grid ym-equalize linearize-level-1">
							<!-- course and term -->
							<div class = "ym-g50 ym-gl">
								<h4 class="left-text no-top-mar"> <?php
								if($cnum !== "Indep."){
									courseLink($cnum);
								} else { 
									echo $cnum; 
								}
								echo ", " . $term; ?>
								</h4>
							</div>
							
							<!-- skills -->
							<div class = "ym-g50 ym-gr">
								<h4 class="right-text no-top-mar">Skills <?php
								$skills = getProjectSkills($id);
								while($skill = mysql_fetch_array($skills)){
									skillImage($skill, 16.5);
								} ?>
								</h4>
							</div>
						</div>
						
						<!-- description -->
						<ul> <?php
							echo $desc; ?>
						</ul> <?php
					
						// download links
						if($source !== "REQUEST"){
							projectDownload($source);
							projectFork($source);
						} else {
							projectRequest();
						} ?>
					
					</div>
					<!-- end project box -->
				</div>
			</div>
			<!-- end project region --><?php
	// end row
	if(!$leftCol){
		$rowCount += 1; ?>
		</div><?php 
	}
	$colCount += 1;
}

endMainWrapper();
include('footer.php'); 
?>