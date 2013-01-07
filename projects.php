<?php $pageTitle="Projects"; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">

			<p>
			Due to the collegiate nature of these projects, some source code cannot be made available for direct download. If you are a company looking to view my work, use the request links below or the form 
			<a href="#link">here</a>.
			</p>
			<?php
			$projects = mysql_query("SELECT DISTINCT * 
									FROM projects P, projects_course PC, term T 
									WHERE P.id=PC.pid AND PC.cnum=T.cnum ORDER BY term DESC");
			while($project = mysql_fetch_array($projects)){
				$id = $project["id"]; $name = $project["name"]; $desc = $project["desc"]; $link = $project["link"];
				$skills = mysql_query("SELECT DISTINCT * 
									  FROM projects P, projects_skills PS, skills S
									  WHERE P.id=PS.pid AND PS.sid = S.id");
				while($skill = mysql_fetch_array($skills)){
					
				}
			} ?>
Project
ID
Name
Desc
Download Link and View Source Link OR Request Link

Course
Term

Languages (Make a Top Skills)
			<h2 id="SuperScalar" tabindex="-1">SuperScalar Processor</h2>
			<div class="ym-grid linearize-level-1">
				<h3 id="coursenum" tabindex="-1">Class Name</h3>
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						<a href="#" class="ym-button ym-add">Download</a>
						<h3><span class="subh">coursenum</span></h3>
						<span class="label">pre-reqs: none</span>
					</div>
				</div>
				<div class="ym-g75 ym-gr">
					<div class="ym-gbox-right">
						<p>
						Class Description
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include('footer.php') ?>