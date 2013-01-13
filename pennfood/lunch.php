<?php include('header.php'); ?>
<?php include('dhfunctions.php'); ?>
<?php include('menu.php'); ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div class="ym-grid ym-equalize linearize-level-1">
				<div class="ym-g33 ym-gl">
					<?php dhTable($E, $L); ?>
				</div>
				<div class="ym-g33 ym-gl">
					<?php dhTable($H, $L); ?>
				</div>
				<div class="ym-g33 ym-gl">
					<?php dhTable($C, $L); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>