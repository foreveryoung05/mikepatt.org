<?php
$withHeader = TRUE;
$lSize = "ym-g25";
$rSize = "ym-g75";
function insertStyle(){ ?>
	<style>
		body {
			background: white;
			margin: 0% 5%;
		}
		.ym-vlist {
			height: 500px;
			overflow-y: scroll;
			margin-bottom: 0px;
		}
	</style> <?php
}
include("content.php");
?>