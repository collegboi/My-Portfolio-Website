<?php

$type = $_GET["type"];

$limit = $_GET["limit"];
$offset = $_GET["offset"];

if ($limit === null) {
	$limit = 10;
}

if($offset === null) {
	$offset = 0;
}

//$safe_limit = mysql_real_escape_string($limit);
//$safe_offset = mysql_real_escape_string($offset);

$returnArray = array();

	
$host=""; //replace with your hostname 
$username=""; //replace with your username 
$password=""; //replace with your password 
$db_name=""; //replace with your database 

$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");

//$sql = "SELECT * FROM News JOIN NewsDesc USING(NewsID)"; //replace emp_info with your table name

$sql = "SELECT * FROM News ORDER BY NewsDate DESC LIMIT $limit OFFSET $offset";

$result = mysql_query($sql) or die("cannot select DB");

$json = array();
$courseArray = array();

while($row = mysql_fetch_row($result)) {


	$courseArray = array(
		"id" => $row[0],
		"newsTitle" => $row[1],
		"newsDate" => $row[2],			
		"newsImageURL" => $row[3]
	);

	array_push($returnArray, $courseArray);

}

mysql_close($db_name);

return $returnArray;
 
?>
