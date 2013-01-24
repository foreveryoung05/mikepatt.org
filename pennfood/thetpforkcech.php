<?php $pageTitle="KCECH - The TP"; include('../functions.php'); 
include('header.php'); ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-grid ym-equalize">
		<div class="ym-g19 ym-gl">
			<h4 class="ym-vtitle">Editions</h4>
			<div class="nav-wrapper no-top-mar">
				<nav class="ym-vlist" style="height: 500px; overflow-y: scroll; margin-bottom: 0px;">
					<ul >
						<?php $dirArray = printDir("../tps", "r", "print") ?>		
					</ul>
				</nav>
			</div>
		</div>
		<style>
			body {
				background: white;
			}
			.jquery_tabs ul.tabs-list li a {
				padding: 4% 12% 4% 12%;
			}
			.ym-vlist li a {
				width: 100%;
			}
		</style>
		<div class="ym-g80 ym-gl" style="padding: 0% .5% 0% .5%;">
			<div class="jquery_tabs no-top-mar">
				<h5 id="printTab" class="tabhead" tabindex="-1">Print</h5>
				<div class="tab-content">
	    			<iframe name="print" width="100%" height="500px" src="<?php echo "../tps/" . $dirArray[0]; ?>"></iframe>								
				</div>						
				<h5 id="digitalTab" class="tabhead" tabindex="-1">Digital</h5>
				<div class="tab-content">
	    			<iframe name="digital" width="100%" height="500px" src="http://bit.ly/tp2012f<?php echo count($dirArray) ?>"></iframe>								
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>
