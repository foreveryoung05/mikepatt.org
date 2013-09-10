<?php 
$pageTitle = "Penn Appetit";
echo get_include_path();
if(RT === "/")
	set_include_path(get_include_path() . ":/home/bripef/public_html:/");
echo get_include_path();
include("dhfunctions.php");
include("header.php");
$size = "ym-g50"; ?>

<style>
.ym-g33 div {
	padding: 10px 20px;
}
ul {
	margin: 0px 0px 5px 10px;
}
</style>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="jquery_tabs no-top-mar">
				
			<h5 id="lunchTab" class="tabhead" tabindex="-1">Lunch</h5>
			<div class="tab-content ym-grid ym-equalize linearize-level-1"> <?php
				if(!isWeekend()){ ?>
					<div class="ym-g33 ym-gl"> <?php
						getMealHTML(KCECH, LUNCH); ?>
					</div> <?php
					$size = "ym-g33";
				} ?>
				<div class="<?php echo $size; ?> ym-gl"> <?php
					getMealHTML(HILL, LUNCH); ?>
				</div>
				<div class="<?php echo $size; ?> ym-gl"> <?php
					getMealHTML(COMMONS, LUNCH); ?>
				</div>
			</div>
			
			<h5 id="dinnerTab" class="tabhead" tabindex="-1">Dinner</h5>
			<div class="tab-content ym-grid ym-equalize linearize-level-1"> <?php
				if(!isWeekend()){ ?>
					<div class="ym-g33 ym-gl"> <?php
						getMealHTML(KCECH, DINNER); ?>
					</div> <?php
				} ?>
				<div class="<?php echo $size; ?> ym-gl"> <?php
					getMealHTML(HILL, DINNER); ?>
				</div>
				<div class="<?php echo $size; ?> ym-gl"> <?php
					getMealHTML(COMMONS, DINNER); ?>
				</div>
			</div>

		</div>
	</div>
</div> <?php

include("footer.php"); ?>
