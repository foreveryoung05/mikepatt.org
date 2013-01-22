<div class="overlay" id="overlay" style="display:none;"></div>
<div class="hiddenbox" id="box">
	<a class="hiddenboxclose" id="boxclose"></a>
	<h3 class="center">Code Request Form</h3>
	<form method="post" action="sendrequest.php" id="requestform" class="ym-form ym-columnar linearize-form" role="application">
		<div class="ym-fbox-select">
			<label for="salutation">Salutation <sup class="ym-required" title="This field is mandatory.">*</sup> </label>
			<select name="salutation" id="salutation" size="1" aria-required="true" tabindex="-3">
				<option value="0" selected="selected" disabled="disabled">Please choose</option>
				<option value="Mr.">Mr.</option>
				<option value="Ms.">Ms.</option>
				<option value="Mrs.">Mrs.</option>
			</select>
		</div>
		<div class="ym-fbox-text">
			<label for="name">Name <sup class="ym-required" title="This field is mandatory.">*</sup></label>
			<input type="text" name="name" id="name" size="40"  aria-required="true"/>
		</div>
		<div class="ym-fbox-text">
			<label for="email">Email <sup class="ym-required" title="This field is mandatory.">*</sup></label>
			<input type="text" name="email" id="email" size="40"  aria-required="true"/>
		</div>
		<div class="ym-fbox-text">
			<label for="company">Company <sup class="ym-required" title="This field is mandatory.">*</sup></label>
			<input type="text" name="company" id="company" size="40"  aria-required="true"/>
		</div>
		<div class="ym-fbox-text">
			<label for="message">Message</label>
			<textarea name="message" id="message" cols="30" rows="5"> </textarea>
		</div>
		<div class="ym-fbox-check">
			<span class="ym-label">Project(s) <sup class="ym-required" title="This field is mandatory.">*</sup></span>
			<?php $projects = mysql_query("SELECT DISTINCT * 
										  FROM projects ORDER BY start DESC");
			while($project = mysql_fetch_array($projects)){
				$id = $project["id"]; $name = $project["name"]; $sName = $project["sname"] . "poll"; ?>
				<input type="checkbox" name="project[]" id="<?php echo $sName; ?>" value="<?php echo $name; ?>" />
				<label for="project[]"><?php echo $name; ?></label><br />
			<?php } ?>
		</div>
		<div class="ym-fbox-button center" style="padding-bottom: .5em;">
			<input type="submit" value="Submit" class="save" id="submit" name="submit" style="margin-top: .5em;" />
			<input type="reset" value="Reset" class="delete" id="reset" name="reset" style="margin-top: .5em;" />
		</div>
	</form>
</div>