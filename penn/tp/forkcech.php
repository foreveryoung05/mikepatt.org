<?php
$withHeader = FALSE;
$lSize = "ym-g19";
$rSize = "ym-g80";
function insertStyle(){ ?>
	<style>
		body {
			background: white;
		}
		.jquery_tabs ul.tabs-list li a {
			padding: 4% 12% 4% 12%;
		}
		.ym-vlist {
			height: 500px;
			overflow-y: scroll;
			margin-bottom: 0px;
		}
		.ym-vlist li a {
			width: 100% !important;
		}
		.ym-g80 {
			padding: 0% .5% 0% .5%;
		}
		.ym-gbox-left {
			padding: 0px;
		}
		.ym-gbox-right {
			padding-left: 0px;
		}
		.nav-wrapper, .jquery_tabs {
			margin-top: 0px;
		}
	</style> <?php
}
include("content.php");
?>