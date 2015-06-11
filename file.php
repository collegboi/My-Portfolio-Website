<?php

$newComment = $_POST["comment"];
$name = $_POST["name"];
$email = $_POST["email"];	

$message = $name."\n".$email."\n".$newComment;
	
if ( mail("email address", "Website Mail" , $message)) {
	
	print "Form submitted successfully";
}

else {
	print "Form submitted Unsucessfully";
}

	/*
	Here's where you want PHP to process the form data and do something with it, for example inserting the data into a database or sending the information to an email address and so on
	*/
	

?>