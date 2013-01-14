<?php $pageTitle="Projects"; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>
<?php include('requestform.php'); ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			
			<div class="ym-grid ym-equalize linearize-level-1">
				<div class="ym-g30 ym-gl">&nbsp;</div>
				<div class="ym-g40 ym-gl box">
					<p>
					Due to the collegiate nature of these projects, some source code cannot be made available for direct download. If you are a company looking to view my work, use the request links below or the form <a href="#" class="activator" id="activator">here</a>.
					</p>
				</div>
				<div class="ym-g30 ym-gl">&nbsp;</div>
			</div>
			
		<?php
		$projects = mysql_query("SELECT DISTINCT * 
								FROM projects ORDER BY start DESC");
		$colCount = 1; $rowCount = 1; $color = "";
		while($project = mysql_fetch_array($projects)){ $oddCol = $colCount % 2; $oddRow = $rowCount % 2;
			$id = $project["id"]; $name = $project["name"]; $sName = $project["sname"];
			$desc = $project["desc"]; $source = $project["source"]; $view = $project["view"];
			$start = sqlDate($project["start"]); $end = sqlDate($project["end"]);
			$side = $oddCol ? "ym-gl" : "ym-gr"; $boxSide = $oddCol ? "ym-gbox-left " : "ym-gbox-right"; 
			if($oddCol){ $color = $oddRow ? "" : "info"; ?>
			<div class="ym-grid ym-equalize linearize-level-1"><?php } else { $color = !$oddRow ? "" : "info"; } ?>
				<div class="ym-g50 <?php echo $side; ?>">
					<div class="<?php echo $boxSide; ?> center-text">
						<span class="anchor" id="<?php echo $sName; ?>"></span>
						<h3 tabindex="-1" >
							<?php echo $name; 
							if(strcmp($view, "NOVIEW")){ ?>
							<span class="label">
								<a href=<?php echo $view; ?> target="_blank">Website</a>
							</span>
							<?php }
							if(strcmp($source, "REQUEST")){ ?>
							<span class="label">
								<a href=<?php echo $source; ?> target="_blank">Source Code</a>
							</span>
							<?php } ?>							
						</h3>
						<div class="box <?php echo $color; ?>">
							
						<?php $course = mysql_fetch_array(
										mysql_query("SELECT DISTINCT *
													FROM projects_course
													WHERE pid='" . $id . "'"));
						if(strcmp($course["cnum"], "NONUM")){
							$cnum = $course["cnum"];
							$termArray = mysql_fetch_array(
										 mysql_query("SELECT DISTINCT *
												     FROM course
													 WHERE num='" . $cnum . "'"));
							$termDict = convertSem($termArray["term"]);
							$term = $termDict["season"] . " '" . $termDict["year"]; 
						} else {
							$cnum = "Indep.";
							$term = $start["mdsy"] . " - " . $end["mdsy"];
						} ?>
						
						<div class="ym-grid ym-equalize linearize-level-1">
							<div class = "ym-g50 ym-gl">						
								<h4 class="left-text no-top-mar">
								<?php if(strcmp($cnum, "Indep.")){ ?>
								<a href="courses.php#<?php echo $cnum; ?>"><?php echo $cnum; ?></a>,	
								<?php } else { ?> 
								<?php echo $cnum . ","; } ?>
								<?php echo $term; ?>
								</h4>
							</div>
							
							<div class = "ym-g50 ym-gr">
								<h4 class="right-text no-top-mar">Skills
								<?php
								$skills = mysql_query("SELECT DISTINCT * 
													  FROM projects_skills, skills
													  WHERE sid = id AND pid = '" . $id . "'");
								while($skill = mysql_fetch_array($skills)){
									$skName = $skill["name"]; $image = $skill["image"]; ?>
									<img src=<?php echo $image . " "; size(16.5, 16.5); ?> alt="<?php echo $skName; ?>" title="<?php echo $skName; ?>" />
								<?php } ?>
								</h4>
							</div>
						</div>
							
						<p>
						<?php echo $desc; ?>
						</p>
						
						<?php if(strcmp($source, "REQUEST")){ ?>
						<a href=<?php echo $source . "/archive/master.zip"; ?> class="ym-button ym-next" target="_blank">Download</a>
						<a href=<?php echo $source . "/fork"; ?> class="ym-button ym-edit"  target="_blank">Fork</a>		
						<?php } else { ?>
						<a href="#" class="ym-button ym-next activator" id="activator">Request</a>
						<?php } ?>
						</div>
					</div>
				</div>
			<?php if(!$oddCol){ $rowCount += 1; ?>
			</div><?php } ?>
		<?php $colCount += 1;
		} ?>

		</div>
	</div>
</div>

<?php include('footer.php') ?>