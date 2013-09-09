<?php 
$pageTitle="Clubs"; 
include('header.php');
include($navBar); 

beginMainWrapper();

$clubs = getClubs();
$colCount = 1;
$rowCount = 1;
$color = "";

while($club = mysql_fetch_array($clubs)){ 
	$leftCol	= $colCount % 2;
	$oddRow		= $rowCount % 2;
	
	$id			= $club["id"];
	$name		= $club["name"];
	$sName		= $club["sname"];
	$desc		= $club["desc"];
	$link		= $club["link"]; 
	$start		= getDateArray($club["start"]);	$start	= $start["msy"];
	$end		= getDateArray($club["end"]);	$end	= $end["msy"];
	
	// set css div classes
	$side 		= $leftCol ? "ym-gl" : "ym-gr"; 
	$boxSide 	= $leftCol ? "ym-gbox-left " : "ym-gbox-right"; 
	
	$status = ($sName !== "WiCS") ? "Member" : "Honorary Member";
	// alternate colors, info is grey
	$color = ($leftCol XOR $oddRow) ? "info" : "";
	// begin row
	if($leftCol){ ?>
		<div class="ym-grid linearize-level-1"> <?php
	} ?>
			<!-- begin club region -->
			<div class="ym-g50 <?php echo $side; ?>">
				<div class="<?php echo $boxSide; ?> center-text"><?php
					anchor($sName); ?>
					
					<!-- club header -->
					<h3 tabindex="-1"><?php
						echo $name; ?>
						<span class="label">
							<a href=<?php echo $link; ?> target="_blank">Website</a>
						</span>
					</h3>
					
					<!-- begin club box -->
					<div class="box <?php echo $color; ?>">
						<!-- current status -->
						<h3><span class="subh"><?php echo $status . " (" . $start . " - " . $end . ")"; ?></span></h3>
						
						<!-- description -->
						<p> <?php
							echo $desc; ?>
						</p>
						
						<!-- roles and descriptions -->
						<dl>
							<?php $roles = getClubRoles($id);
							while($role = mysql_fetch_array($roles)){
								$rName = $role["name"];
								$rDesc = $role["desc"]; ?>
								<dt><?php echo $rName; ?></dt>
								<dd><?php echo $rDesc; ?></dd> <?php
							} ?>
						</dl>
					</div>
					<!-- end club box -->
				</div>
			</div>
			<!-- end club region --><?php
	// end row
	if(!$leftCol){
		$rowCount += 1; ?>
		</div><?php 
	}
	$colCount += 1;
} 

endMainWrapper();
include('footer.php');
?>