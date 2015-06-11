
<!DOCTYPE html>
<html>
<html>
<head>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: "Please let us know who you are.",
				email: "A valid email will help us get in touch with you.",
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('file.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>
	<style>
	label.error { width: 250px; display: inline; color: red;}
	</style>
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
					<li>
						<a href="blog.php">Article</a>
					</li>
					<li class="current">
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
					<h2>Contact</h2>
					<div>
						<h3>SEND ME A MESSAGE </h3><br>
						<form action="test1.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload Image" name="submit">
</form>					
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