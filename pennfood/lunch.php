<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div class="content">
	<div class="english">
		<?php dhTable($E, $L); ?>
	</div>
	<div class="other">
		<?php dhTable($H, $L); ?>
	</div>
	<div class="other">
		<?php dhTable($C, $L); ?>
	</div>
</div>

</html>