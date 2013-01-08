<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div class="ym-hlist">
				<ul>
				<?php
				$projects = mysql_query("SELECT DISTINCT * 
										FROM projects AS p, projects_course AS pc, term AS t 
										WHERE p.id=pc.pid AND pc.cnum=t.cnum ORDER BY term DESC");
				while($project = mysql_fetch_array($projects)){
					$name = $project["name"]; $sName = $project["sname"]; ?>
					<li><a href="#<?php echo $sName; ?>"><?php echo $name; ?></a></li>
				<?php
				} ?>
				</ul>
			</div>
		</div>
	</div>
</nav>