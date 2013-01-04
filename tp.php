<?php $pageTitle = "TP" ?>
<?php include('header.php'); ?>
<?php #include($navBar) ?>

<!-- get the TP files -->
<?php 
function getDirArray($dir){
$dir = opendir("./tps");
while ($fileName = readdir($dir)){
	if(substr("$fileName", 0, 1) != "."){
		$dirArray[] = $fileName;	
	}
} 
closedir($dir);
return $dirArray;
}

function printDir($dir, $sort, $frame){
	$dirArray = getDirArray($dir);
	if($sort == "r"){ rsort($dirArray); } else {}
	$revCount = $count = count($dirArray);
	for($index = 0; $index < $count; $index++){
		echo "<li>";
		#echo "<a href='" . $dir . "/" . $dirArray[$index] . "' target='" . $frame . "'>";		
		#echo "<a href='http://bit.ly/tp2012f" . $revCount-- . "' target='digital'>";
		echo "<a href=\"#TheTP\" onclick=\"print.location.href='" . $dir . "/" . $dirArray[$index] . "',digital.location.href='http://bit.ly/tp2012f" . $revCount-- . "'\">";
		echo substr($dirArray[$index], 0, -4);
		echo "</a>";
		#echo "</a>";
		echo "</li>";
	}
	return $dirArray;
}
?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			
			<h2 id="TheTP" tabindex="-1">The TP</h2>
			<div class="ym-grid linearize-level-1">
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						<h3>Editions</h3>
						<div class="nav-wrapper">
							<nav class="ym-vlist">
								<ul>
									<?php $dirArray = printDir("./tps", "r", "print") ?>		
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="ym-g75 ym-gr">
					<div class="ym-gbox-right">
						<div class="jquery_tabs">
							<h5 id="printTab" class="tabhead" tabindex="-1">Print</h5>
							<div class="tab-content">
				    			<iframe name="print" width="100%" height="500" src="<?php echo "./tps/" . $dirArray[0]; ?>"></iframe>								
							</div>						
							<h5 id="digitalTab" class="tabhead" tabindex="-1">Digital</h5>
							<div class="tab-content">
				    			<iframe name="digital" width="100%" height="100%" src="http://bit.ly/tp2012f1"></iframe>								
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include('footer.php'); ?>