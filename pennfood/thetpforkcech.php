<?php $pageTitle="KCECH - The TP"; 
include('header.php') ?>

<?php 
function getDirArray($dir){
	$dir2 = opendir($dir);
	while ($fileName = readdir($dir2)){
		if(substr("$fileName", 0, 1) != "."){
			$dirArray[] = $fileName;	
		}
	} 
	closedir($dir2);
	return $dirArray;
}

function printDir($dir, $sort, $frame){
	$dirArray = getDirArray($dir);
	array_pop($dirArray);
	if($sort == "r"){ rsort($dirArray); } else {}
	$revCount = $count = count($dirArray);
	for($index = 0; $index < $count; $index++){ ?>
		<li>
		<a href="#TheTP" onclick="print.location.href='<?php echo $dir . "/" . $dirArray[$index]; ?>',digital.location.href='http://bit.ly/tp2012f<?php echo $revCount--; ?>'" style="padding-left: 2%;">
		<?php echo substr(str_replace(" - ","<br />",$dirArray[$index]), 0, -4); ?>
		</a>
		</li>
<?php }
	return $dirArray;
}
?>
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
