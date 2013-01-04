<?php $pageTitle="Courses"; ?>
<?php include('header.php') ?>
<?php include($navBar) ?>

<?php 
function isCourse($string){
	for($i = 0; $i < 10; $i++){
		if(substr($string, -1) == $i . "") return true;
	}
	return false;
}

function printSem($sem){
	$semDict = array("A" => "Spring", "B" => "Summer", "C" => "Fall");
	$seas = $semDict[substr($sem, -1)]; $year = substr($sem, -3, 2);
	$courses = mysql_query("SELECT DISTINCT * FROM course, term WHERE num=cnum and term='" . $sem . "' ORDER BY term DESC"); ?>
	<h2 id="<?php echo $seas . $year; ?>" tabindex="-1"><?php echo $seas . " '" . $year; ?></h2>
	<?php while($row = mysql_fetch_array($courses)) { ?>
		<div class="ym-grid linearize-level-1">
			<h3 id="<?php echo $row['num']; ?>" tabindex="-1"><?php echo $row['name']; ?></h3>
			<div class="ym-g25 ym-gl">
				<div class="ym-gbox-left">
					<h3><span class="subh"><?php echo $row['num']; ?></span></h3>
					<span class="label">pre-reqs: <br />
						<?php $prereqs = mysql_query("SELECT DISTINCT * FROM prereqs WHERE cnum='" . $row['num'] . "' ORDER BY cnum");
						while($row2 = mysql_fetch_array($prereqs)) { $prereq = $row2['prereq']; ?>
							<?php if(isCourse($prereq)){ ?>
								&nbsp;&nbsp;<a href="#<?php echo $prereq; ?>"><?php echo $prereq; ?></a><br />
							<?php } else{ ?>
								&nbsp;&nbsp;<?php echo $prereq; ?><br />
						<?php }
						} ?>
					</span>
				</div>
			</div>
			<div class="ym-g75 ym-gr">
				<div class="ym-gbox-right">
					<p>
					<?php echo $row['desc']; ?>	
					</p>
				</div>
			</div>
		</div>
	<?php }	
} ?>

<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
		
		<?php
		for($i = 2013; $i > 2008; $i--){ 
			if($i < 2013)  printSem($i . "C");
			if($i == 2010) printSem($i . "B");
			if($i != 2009) printSem($i . "A");
		}
		?>

		</div>
	</div>
</div>

<?php include('footer.php') ?>