
<?php

$titleTest = $_SESSION['ArtTitle'];

$type = $_GET["type"];
$title = $_GET["title"];

$safe_title = mysql_real_escape_string($title);
	
$host=""; //replace with your hostname 
$username=""; //replace with your username 
$password=""; //replace with your password 
$db_name=""; //replace with your database 

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");

//$sql = "SELECT * FROM News JOIN NewsDesc USING(NewsID)"; //replace emp_info with your table name

$sql = "SELECT * FROM NewsDescription WHERE NewsTitle = '$titleTest'";

$result = mysql_query($sql);

$json = array();

while($row = mysql_fetch_row($result)) {
			
	if($row1 !== " " || $row1 !== null) {

		$courseArray = array(
			
			"id" => $row[0],
			"newsTitle" => $row[1],
			"desc" => $row[2],
		);
		
		array_push($json, $courseArray);
	}
}

mysql_close($db_name);

return $json;

?>
