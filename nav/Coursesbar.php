<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			<div class="ym-hlist">
				<ul>
					<?php for($i = 2014; $i > 2008; $i--){ $yr = substr($i, -2); ?>
						<?php if($i < 2013){ ?><li><a href="#Fall<?php echo $yr; ?>">Fall '<?php echo $yr; ?></a></li><?php } ?>
						<?php if($i == 2010){ ?><li><a href="#Summer<?php echo $yr; ?>">Summer '<?php echo $yr; ?></a></li><?php } ?>
						<?php if($i != 2009 && $i < 2014){ ?><li><a href="#Spring<?php echo $yr; ?>">Spring '<?php echo $yr; ?></a></li><?php } ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</nav>