<?php $pageTitle="Projects"; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>
<?php include('requestform.php'); ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			
			<div class="ym-grid linearize-level-1">
				<div class="ym-g30 ym-gl">&nbsp;</div>
				<div class="ym-g40 ym-gl" style="padding-bottom: 43px;">
				Due to the collegiate nature of these projects, some source code cannot be made available for direct download. If you are a company looking to view my work, use the request links below or the form <a href="#" class="activator" id="activator">here</a>.
				</div>
				<div class="ym-g30 ym-gl">&nbsp;</div>
			</div>
			
		<?php
		$projects = mysql_query("SELECT DISTINCT * 
								FROM projects ORDER BY start DESC");
		$count = 1;
		while($project = mysql_fetch_array($projects)){ $newRow = $count % 2;
			$id = $project["id"]; $name = $project["name"]; $sName = $project["sname"];
			$desc = $project["desc"]; $source = $project["source"]; $view = $project["view"];
			$start = $project["start"]; $end = $project["end"];
			$side = $newRow ? "ym-gl" : "ym-gr"; $boxSide = $newRow ? "ym-gbox-left" : "ym-gbox-right";
			if($newRow){ ?>
			<div class="ym-grid linearize-level-1"><?php } ?>
				<div class="ym-g50 <?php echo $side; ?>">
					<div class="<?php echo $boxSide; ?>" style="padding-bottom: 43px;">
						<span class="anchor" id="<?php echo $sName; ?>"></span>
						<h3 tabindex="-1">
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
						
						<?php $course = mysql_fetch_array(
										mysql_query("SELECT DISTINCT *
													FROM projects_course
													WHERE pid='" . $id . "'"));
						if(strcmp($course["cnum"], "NONUM")){
							$cnum = $course["cnum"];
							$termArray = mysql_fetch_array(
										 mysql_query("SELECT DISTINCT *
												     FROM term
													 WHERE cnum='" . $cnum . "'"));
							$termDict = convertSem($termArray["term"]);
							$term = $termDict["season"] . " '" . $termDict["year"]; 
						} else {
							$cnum = "Independent";
							$term = $start . " - " . $end;
						} ?>
						<h3><span class="subh">(<?php echo $cnum . ", " . $term; ?>)</span></h3>
						
						<p>
						<?php echo $desc; ?>
						</p>
						
						<h4>Skills</h4>
						<?php
						$skills = mysql_query("SELECT DISTINCT * 
											  FROM projects_skills, skills
											  WHERE sid = id AND pid = '" . $id . "'");
						while($skill = mysql_fetch_array($skills)){
							$skName = $skill["name"]; $image = $skill["image"]; ?>
							<img src=<?php echo $image . " "; size(21, 21); ?> alt="<?php echo $skName; ?>" title="<?php echo $skName; ?>" />
						<?php } ?>
						<br />
						<?php if(strcmp($source, "REQUEST")){ ?>
						<a href=<?php echo $source . "/archive/master.zip"; ?> class="ym-button ym-next" target="_blank">Download</a>
						<a href=<?php echo $source . "/fork"; ?> class="ym-button ym-edit"  target="_blank">Fork</a>		
						<?php } else { ?>
						<a href="#" class="ym-button ym-next activator" id="activator">Request</a>
						<?php } ?>
	
					</div>
				</div>
			<?php if(!$newRow){ ?>
			</div><?php } ?>
		<?php $count += 1;
		} ?>

		</div>
	</div>
</div>

<?php include('footer.php') ?>