<?php
	$target_dir = "/var/www/clan-dust.dk/admin/uploads/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			echo $target_file;
			echo dirname(__FILE__);
			$uploadOk = 1;
			
			move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
			chmod($target_file,0777);
			echo "<p>".$target_file."</p>";
			//chmod($target_dir.$_FILES["fileUpload"]["tmp_name"],0777);
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	//else {
    //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    //} else {
      //  echo "Sorry, there was an error uploading your file.";
    //}
//}
?>
