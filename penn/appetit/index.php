<?php 
include('dhfunctions.php');
$size = "ym-g50";
$pageTitle = "Penn Dining"; 
include('header.php'); 
$day = getDay(); 
$isWeekend = (strcmp($day, "Sunday") && strcmp($day, "Saturday")) ? FALSE : TRUE; ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="jquery_tabs no-top-mar">
				
			<h5 id="lunchTab" class="tabhead" tabindex="-1">Lunch</h5>
			<div class="tab-content ym-grid ym-equalize linearize-level-1">
				<?php if(!$isWeekend){ ?>
				<div class="ym-g33 ym-gl">
					<?php dhTable($E, $L); ?>
				</div>
				<?php $size = "ym-g33"; } ?>
				<div class="<?php echo $size; ?> ym-gl">
					<?php dhTable($H, $L); ?>
				</div>
				<div class="<?php echo $size; ?> ym-gl">
					<?php dhTable($C, $L); ?>
				</div>
			</div>
			
			<h5 id="dinnerTab" class="tabhead" tabindex="-1">Dinner</h5>
			<div class="tab-content ym-grid ym-equalize linearize-level-1">
				<?php if(!$isWeekend){ ?>
				<div class="ym-g33 ym-gl">
					<?php dhTable($E, $D); ?>
				</div>
				<?php } ?>
				<div class="<?php echo $size; ?> ym-gl">
					<?php dhTable($H, $D); ?>
				</div>
				<div class="<?php echo $size; ?> ym-gl">
					<?php dhTable($C, $D); ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include('footer.php'); ?>
