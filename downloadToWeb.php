<?php
	
$host=""; //replace with your hostname 
$username=""; //replace with your username 
$password=""; //replace with your password 
$db_name=""; //replace with your database 

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");


$sql = "SELECT * FROM Project";

$result = mysql_query($sql) or die("cannot select DB");

$json = array();
$courseArray = array();


while($row = mysql_fetch_row($result)) {


	$courseArray = array(
		
		"id" => $row[0],
		"projectName" => $row[1],
		"projectDesc" => $row[2],			
		"projectDate" => $row[3],
		"projectLocation" => str_replace("/var/www/html/", "",$row[4])
		
	);

	array_push($json, $courseArray);

}

mysql_close($db_name);

return $json;
 

?>
