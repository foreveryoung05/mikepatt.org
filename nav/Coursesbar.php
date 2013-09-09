<nav id="level2"  role="navigation">
	<div class="ym-wrapper">
		<div class="ym-wbox">
			
			<div class="ym-hlist">
				<ul> <?php
				$terms = getTerms();
				while ($term = mysql_fetch_array($terms)){
					$term = $term["term"];
					$rTerm	= readableTerm($term); 
					$id = termID($rTerm); ?>
					<li> <?php
						inPageLink($id, $rTerm); ?>
					</li> <?php
				} ?>
				</ul>
			</div>
			
		</div>
	</div>
</nav>