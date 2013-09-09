<?php
$pageTitle="Interests";
include("header.php");
include($navBar); 

beginMainWrapper(); ?>

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
	<h3 id="TheTP" tabindex="-1">The Toilet Paper</h3> <?php
	tpContent("penn/tp/pdf/"); ?>
</div> <?php

endMainWrapper();
include("footer.php"); 
?>