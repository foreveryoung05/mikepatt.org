<?php $pageTitle="Home"; 
$navBar = 'nav/' . $pageTitle . 'bar.php'; 
?>
<?php include('header.php') ?>
<?php include($navBar) ?>


<div id="main" class="ym-clearfix" role="main">
	<div class="ym-wrapper">
		<div class="ym-wbox">
		
			<div class="ym-grid linearize-level-1">
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox-left">
						<?php $currSem = "2013A"; $semDict = convertSem($currSem);
						$seas = $semDict["season"]; $year = $semDict["year"]; ?>
						<h3>Current Courses <span class="subh"><?php echo $seas . " '" . $year; ?></span></h3>
						<ul>
						<?php
						$currCourses = mysql_query("SELECT DISTINCT * FROM course, term WHERE cnum=num AND term='" . $currSem . "' ORDER BY num");
						while($row = mysql_fetch_array($currCourses)){ ?>
							<li>
								<a href=<?php echo "courses.php#" . $row["cnum"]; ?>>
								<?php echo $row["cnum"] . " - " . $row["name"]; ?>
								</a>
							</li>
						<?php
						} ?>
						</ul>
					</div>
				</div>
				<div class="ym-g33 ym-gl">
					<div class="ym-gbox">
						<h3>The Merlin Venture <span class="subh">Blog</span></h3>
						<p>
						What is "The Merlin Venture"?
						</p>
						<p>
The Merlin Venture is about me. It is my chronicle of me trying to become a better person, a better computer scientist, a better reader, a better writer,  etc. It is the start of me taking things more seriously that I haven't been: my career, my fitness, my academics, so on and so forth.
						</p>
						<p>
							Find out more <a href="http://themerlinventure.blogspot.com/2012/12/what-is-merlin-venture.html">here</a>
						</p>
					</div>
				</div>
				<div class="ym-g33 ym-gr">
					<div class="ym-gbox-right">
						<h3>Skills <span class="subh">Languages and Technologies</span></h3>
						<table class="narrow">
							<tbody>
							<tr>
								<td>
									<img src="./img/skills/python.gif" <?php size(21,21); ?> />
									Python
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS192">CIS192</a> and
									<a href="courses.php#CIS391">CIS391</a>									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/java.jpg" <?php size(21,21); ?> />
									Java
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS110">CIS110</a>,
									<a href="courses.php#CIS120">CIS120</a>, and									
									<a href="courses.php#CIS121">CIS121</a> 									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/c.jpg" <?php size(21,21); ?> />
									C
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS240">CIS240</a> and
									<a href="courses.php#CIS380">CIS380</a>									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/cpp.png" <?php size(21,21); ?> />
									C++
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS190">CIS190</a>									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/ruby.png" <?php size(21,21); ?> />
									Ruby on Rails
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS196">CIS196</a> 									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/git.png" <?php size(21,21); ?> />
									Git
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS380">CIS380</a> and
									<a href="http://gitimmersion.com/">Git Immersion</a> 									
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/html.png" <?php size(21,21); ?> />
									HTML
								</td>
								<td>via</td>
								<td>
									<a href="http://www.htmltutorials.ca/">HTML Tutorials</a> and
									<a href="http://www.w3schools.com/">W3 Schools</a>						
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/css.jpg" <?php size(21,21); ?> />
									CSS
								</td>
								<td>via</td>
								<td>
									<a href="http://www.w3schools.com/">W3 Schools</a>						
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/mysql.jpg" <?php size(21,21); ?> />
									mySQL
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS330">CIS330</a>
								</td>
							</tr>
							<tr>
								<td>
									<img src="./img/skills/php.jpg" <?php size(21,21); ?> />
									PHP
								</td>
								<td>via</td>
								<td>
									<a href="courses.php#CIS330">CIS330</a>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php include('footer.php') ?>