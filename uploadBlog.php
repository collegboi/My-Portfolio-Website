

<?php
	
$projectName = $_POST["Name"];
$blogDesc = $_POST["Desc"];
$blogName = $_POST["blogName"];
//$userId = $_POST["userId"];

$fileUploaded = "";
$messeage = "";

$json = array();

$filename = "path to images" . $projectName . "/";

//$target_dir = "/var/www/html/Uploads/";


$target_file = $filename . basename($_FILES["file"]["name"]);


 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	 
        $fileUploaded =  "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        
        	
	
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "";

		// Create connection
		$con = mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
	
		mysql_select_db("$dbname")or die("cannot select DB");
	
		$sql = "INSERT INTO Blog (blogName, blogImageLocation, blogDesc, blogDate, projectName) VALUES ('$blogName', '$target_file' , '$blogDesc', CURRENT_TIMESTAMP ,'$projectName')";
	
		$result = mysql_query($sql);

		if(! $retval) {
				
				$json = array(
					
					"message" => "success",
					"fileUpload"=> $fileUploaded
				);
				
				
		}else {
				
			$json = array(
					
					"message" => "error",
					"fileUpload"=> $fileUploaded
				);
		
		}

		mysql_free_result($retval);
	
		mysql_close($conn);

        

} else {
	 
      	  $fileUploaded = "Sorry, there was an error uploading your file.";
      	  
      	  $json = array(
					
					"message" => "error",
					"fileUpload"=> $fileUploaded
			);
				
}

$jsonArray['Blog'][] = $json;

echo json_encode($jsonArray);



?>