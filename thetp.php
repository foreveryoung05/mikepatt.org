<?php $pageTitle="KCECH - The TP"; ?>
<?php include('pennfood/header.php') ?>

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
	for($index = 0; $index < $count; $index++){
		echo "<li>";
		echo "<a href=\"#TheTP\" onclick=\"print.location.href='" . $dir . "/" . 		$dirArray[$index] . "',digital.location.href='http://bit.ly/tp2012f" . $revCount-- . "'\">";
		echo substr($dirArray[$index], 0, -4);
		echo "</a>";
		echo "</li>";
	}
	return $dirArray;
}
?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">

			<div class="ym-grid linearize-level-1">
				<h2>
				<a href="http://kcech.house.upenn.edu/">Kings Court English College House</a> - 
				The Toilet Paper (The TP)
				</h2>
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						<div class="nav-wrapper no-top-mar">
							<nav class="ym-vlist">
								<h4 class="ym-vtitle">Editions</h4>
								<ul>
									<?php $dirArray = printDir("./tps", "r", "print") ?>		
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="ym-g75 ym-gr">
					<div class="ym-gbox-right">
						<div class="jquery_tabs no-top-mar">
							<h5 id="printTab" class="tabhead" tabindex="-1">Print</h5>
							<div class="tab-content">
				    			<iframe name="print" width="100%" height="500" src="<?php echo "tps/" . $dirArray[0]; ?>"></iframe>								
							</div>						
							<h5 id="digitalTab" class="tabhead" tabindex="-1">Digital</h5>
							<div class="tab-content">
				    			<iframe name="digital" width="100%" height="500" src="http://bit.ly/tp2012f<?php echo count($dirArray) ?>"></iframe>								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include('pennfood/footer.php'); ?>
