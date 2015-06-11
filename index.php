<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Timothy Barnard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<div>
			<h1><a href="index.php">Timothy Barnard</a></h1>
			<h2>&quot; Welcome to my portfolio Website. &quot;</h2>
		</div>
		<div>
			<span></span>
			<div>
				<ul>
					<li class="current">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="blog.php">Article</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="body">
		<div>
			<div>
				<h2>About me</h2>
				<div>
					<img src="images/mainpicture.png" alt="Image" class="figure">
				</div>
			</div>
			<div>
				<h2>Current</h2>
				<div>
						<?php
									
								$newArray = include('downloadToWeb.php');
								
								$numOfURL = ceil(count($newArray) / 2);
								$numOfLI = 2; 
								
								$num = -1;
								
								for($i = 0; $i < $numOfURL; $i++) {
									?>
									<ul>
									<?php
									
									for($j = 0; $j < $numOfLI; $j++) {
									
										$num++;
										
										if($newArray[$num]["projectName"] !== null) {
									?>
									
									<li>
										<a href="gallery.php"><img src="<?php echo $newArray[$num]["projectLocation"]; ?>" alt="Image"></a>
										<div>
											<h3><a href="gallery.php"><?php echo $newArray[$num]["projectName"]; ?></a></h3>
											<p>
												<?php echo $newArray[$num]["projectDesc"]; ?>
											</p>
											<span class="date"><?php echo $newArray[$num]["projectDate"]; ?></span>
										</div>
									</li>
									<?php
										}
									}
									
									?>
									</ul>
									<?php
								}
								
						?>
						<!--<li>
							<a href="gallery.php"><img src="images/projects/DIT.png" alt="Image"></a>
							<div>
								<h3><a href="gallery.php">DIT Timetable</a></h3>
								<p>
									Students Course Timetable
								</p>
								<span class="date">February 1, 2015</span>
							</div>
						</li>
						<li>
							<a href="gallery.php"><img src="images/projects/Minnion.png" alt="Image"></a>
							<div>
								<h3><a href="gallery.php">Minion Maze</a></h3>
								<p>
									Minion running around a Maze Game
								</p>
								<span class="date">November 30, 2014</span>
							</div>
						</li>
					</ul>
					<ul>
						<li>
							<a href="gallery.php"><img src="images/projects/raspb_heater.png" alt="Image"></a>
							<div>
								<h3><a href="gallery.php"> RPI Heater Controller</a></h3>
								<p>
									Heater controller iOS app using a Raspberry pi.
								</p>
								<span class="date">September 1, 2014 -></span>
							</div>
						</li>
						<li>
							<a href="gallery.php"><img src="images/projects/DIT.png" alt="Image"></a>
							<div>
								<h3><a href="gallery.php">Official DIT App</a></h3>
								<p>
									Developing new & improved Dublin Institute Technology App.
								</p>
								<span class="date">March 1, 2015-></span>
							</div>
						</li>-->
					
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<form action="index.html">
				<input type="text" value="Enter email for Newsletter" id="newsletter">
				<input type="submit" value="Go" id="gobtn">
			</form>
			<div>
				<a href="https://www.facebook.com/tim.barnard.5268" target="_blank" id="facebook">Facebook</a>
				<a href="https://github.com/collegboi" target="_blank" id="github">Github</a>
				<!--<a href="" target="_blank" id="twitter">Twitter</a>
				<a href="" target="_blank" id="googleplus">Google&#43;</a>-->
			</div>
		</div>
		<p>
			&copy; Copyright 2015. All rights reserved.
		</p>
	</div>
</body>
</html>