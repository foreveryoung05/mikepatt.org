<?php $pageTitle="Interests"; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>
<!-- get the TP files -->
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

			<h2 id="ReadingList" tabindex="-1">My Reading List</h2>
			<div class="ym-grid linearize-level-1">
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						<h3>&nbsp;</h3>
					</div>
				</div>
				<div class="ym-g75 ym-gl">
					<div class="ym-gbox-right">
						<br />
						<iframe width="100%" height="500" name="content" id="content" frameborder="0" src="https://spreadsheets.google.com/spreadsheet/pub?hl=en_US&amp;hl=en_US&amp;key=0AlqFou7Q8rk2dDlZRUh0NV80eUpkQ05XbHdsdGVqOHc&amp;single=true&amp;gid=7&amp;output=html&amp;widget=true">
						<p>
						<a href="https://spreadsheets.google.com/spreadsheet/pub?hl=en_US&amp;amp;hl=en_US&amp;amp;key=0AlqFou7Q8rk2dDlZRUh0NV80eUpkQ05XbHdsdGVqOHc&amp;amp;single=true&amp;amp;gid=7&amp;amp;output=html">
						Your browser does not support iframes. Click to view.
						</a>
						</p>
						</iframe>
					</div>
				</div>
			</div>

			<h2 id="Writing" tabindex="-1">Writing</h2>
			<div class="ym-grid linearize-level-1">
				<h3 id="TheAvatars" tabindex="-1">The Avatars</h3>
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						&nbsp;
					</div>
				</div>
				<div class="ym-g75 ym-gl">
					<div class="ym-gbox-right">
						<br />
						<iframe width="100%" height="500" name="content" id="content" frameborder="0" src="./docs/Book1-Chapter00-Prelude.pdf">
						<p>
						<a href="">
						Your browser does not support iframes. Click to view.
						</a>
						</p>
						</iframe>
					</div>
				</div>
			</div>

			<div class="ym-grid linearize-level-1">
				<h3 id="TheTP" tabindex="-1">The Toilet Paper</h3>
				<div class="ym-g25 ym-gl">
					<div class="ym-gbox-left">
						<div class="nav-wrapper">
							<nav class="ym-vlist">
								<h4 class="ym-vtitle">Editions</h4>
								<ul>
									<?php $dirArray = printDir("./tps/editions", "r", "print") ?>		
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
				    			<iframe name="print" width="100%" height="500" src="<?php echo RT . "tps/editions/" . $dirArray[0]; ?>"></iframe>								
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

<?php include('footer.php') ?>