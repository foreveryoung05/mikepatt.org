<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
		
			<div class="ym-hlist">
				<ul> <?php
				$clubs = getClubs();
				while($club = mysql_fetch_array($clubs)){ 
					$name = $club["name"];
					$sName = $club["sname"]; ?>
					<li><?php
						inPageLink($sName, $name); ?>
					</li><?php
				} ?>
				</ul>
			</div>
		
		</div>
	</div>
</nav>