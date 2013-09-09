<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
		
			<div class="ym-hlist">
				<ul> <?php
				$projects = getProjects();
				while($project = mysql_fetch_array($projects)){
					$name = $project["name"];
					$sName = $project["sname"]; ?>
					<li> <?php
						inPageLink($sName, $name); ?>
					</li> <?php
				} ?>
				</ul>
			</div>
			
		</div>
	</div>
</nav>