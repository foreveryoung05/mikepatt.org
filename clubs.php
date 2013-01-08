<?php $pageTitle="Clubs"; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">

		<?php $clubs = mysql_query("SELECT DISTINCT *
								   FROM clubs
								   ORDER BY end DESC, start ASC");
		$count = 1;
		while($club = mysql_fetch_array($clubs)){ $newRow = $count % 2;
			$id = $club["id"]; $name = $club["name"]; $sName = $club["sname"]; $desc = $club["desc"]; $link = $club["link"]; 
			$start = sqlDate($club["start"]); $sString = $start["month"] . " " . $start["year"];
			$end = sqlDate($club["end"]); $eString = is_array($end) ? $end["month"] . " " . $end["year"] : "Present"; 
			$side = $newRow ? "ym-gl" : "ym-gr"; $boxSide = $newRow ? "ym-gbox-left" : "ym-gbox-right";
			$status = strcmp($sName, "WiCS") ? "Member" : "Honorary Member";
			if($newRow){ ?>
			<div class="ym-grid linearize-level-1"><?php } ?>
				<div class="ym-g50 <?php echo $side; ?>">
					<div class=<?php echo $boxSide; ?> style="padding-bottom: 43px;>
						<span class="anchor" id="<?php echo $sName; ?>"></span>
						<h3 tabindex="-1">
							<?php echo $name; ?>
							<span class="label">
								<a href=<?php echo $link; ?> target="_blank">Website</a>
							</span>
						</h3>
						<h3><span class="subh"><?php echo $status . " (" . $sString . " - " . $eString . ")"; ?></span></h3>
						<p>
						<?php echo $desc; ?>
						</p>
						<dl>
							<?php $roles = mysql_query("SELECT DISTINCT *
													  FROM clubs_roles, roles
													  WHERE rid=id AND cid='" . $id . "'");
							while($role = mysql_fetch_array($roles)){
								$rName = $role["name"]; $rDesc = $role["desc"]; ?>
								<dt><?php echo $rName; ?></dt><dd><?php echo $rDesc; ?></dd>
							<?php
							} ?>
						</dl>
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