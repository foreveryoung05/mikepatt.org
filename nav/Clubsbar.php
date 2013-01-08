<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div class="ym-hlist">
				<ul>
				<?php $clubs = mysql_query("SELECT DISTINCT *
										   FROM clubs
										   ORDER BY end DESC, start ASC");
				while($club = mysql_fetch_array($clubs)){ 
					$name = $club["name"]; $sName = $club["sname"]; ?>
					<li><a href="#<?php echo $sName; ?>"><?php echo $name; ?></a></li>
				<?php
				} ?>
				</ul>
			</div>
		</div>
	</div>
</nav>