

<?php
	
$projectName = $_POST["Name"];
$projectDesc = $_POST["Desc"];
//$userId = $_POST["userId"];

$fileUploaded = "";
$messeage = "";

$json = array();

//$target_dir = "/var/www/html/Uploads/";


if (!is_dir($filename)) {
	
    mkdir("path to images" . $projectName, 0777);
    
    $target_dir = "path to images" . $projectName . "/";
   
} else {
    
    $target_dir = "path to images" . $projectName . "/";

}


$target_file = $target_dir . basename($_FILES["file"]["name"]);


 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	 
        $fileUploaded =  "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	
		$servername = "";
		$username = "";
		$password = "";
		$dbname = "";

		// Create connection
		$con = mysql_connect("$servername", "$username", "$password")or die("cannot connect"); 
	
		mysql_select_db("$dbname")or die("cannot select DB");
	
		$sql = "INSERT INTO Project (projectName, projectDesc, projectDate, projectLocation) VALUES ('$projectName','$projectDesc', CURRENT_TIMESTAMP, '$target_file' )";
	
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