<?php
function setActive($pageTitle, $index){
	if($index == 1 && $pageTitle == "Home"){ echo "active"; }
	if($index == 2 && $pageTitle == "Courses"){ echo "active"; }
	if($index == 3 && $pageTitle == "Projects"){ echo "active"; }	
	if($index == 4 && $pageTitle == "Clubs"){ echo "active"; }
	if($index == 5 && $pageTitle == "Interests"){ echo "active"; }
}
?>

<div id="sitenav" role="banner">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div class="mnav">
				<ul class="ym-grid ym-equalize linearize-level-2">
					<li class="ym-g20 ym-gl <?php setActive($pageTitle, 1); ?>">
						<a href="./"><!--"http://www.mikepatt.org"-->
						Home
						</a>
					</li>
					<li class="ym-g20 ym-gl <?php setActive($pageTitle, 2); ?>">
						<a href="./courses.php">
						Courses 
						<span>Current &amp; Past</span>
						</a>
					</li>
					<li class="ym-g20 ym-gl <?php setActive($pageTitle, 3); ?>">
						<a href="./projects.php">
						Projects 
						<span>Coursework &amp; Self Interest</span>
						</a>
					</li>
					<li class="ym-g20 ym-gl <?php setActive($pageTitle, 4); ?>">
						<a href="./clubs.php">Clubs 
						<span>VSA, WiCS, PLBD, STWing</span>
						</a>
					</li>
					<li class="ym-g20 ym-gr <?php setActive($pageTitle, 5); ?>">
						<a href="./interests.php">Interests 
						<span>Reading, Writing</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>