<!DOCTYPE html>
<html>
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
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li class="current">
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
				<div class="content">
					<h2>DIT News</h2>
					<div>
						<div id="article">
						<?php
														
								$newArray = include('connect.php');
								
								for($i = 0; $i < count($newArray); $i++) {
									
									
									echo('<span>'); echo $newArray[$i]["newsDate"];  echo('</span>');
									echo('<br>');
									echo($newArray[$i]["newsTitle"]);
									echo('<p class="first">');
									?>
									<a href="article.php?title=<?php echo $newArray[$i]["newsTitle"]; ?>"><img src= "<?php echo $newArray[$i]["newsImageURL"]; ?>" alt="Image"></a>
							
								<?php
									
									//echo('<br>');
									//echo($newArray[$i]["newsImageURL"]); 
									echo('</p>');
									//echo('<hr>');
								}
								
							
							?>
						
						</div>
					</div>
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