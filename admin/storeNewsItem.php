<?php
	include("config.php");
	//define variables and set to empty
	$title = $author = $date = $description = $content = "";
	
	//Initiate connection
	$conn = dbconnect();
	if(isset($_POST['submit'])) {
		if(empty($_POST['news_title'])){
			$titleErr = "Name cannot be empty";
		}
		else {
			$title = $_POST['news_title'];
		}
		
		if(empty($_POST['datepicker'])){
			$dateErr = "Date cannot be empty";
		}
		else {
			$date = $_POST['datepicker'];
		}
		
		$author = $_POST['author'];
		$description = $_POST['news_short_description'];
		$content = $_POST['news_full_content'];
		$insertSQL = "INSERT INTO News (news_title,news_short_description,news_full_content,author,date) VALUES ('".$title."','".$description."','".$content."','".$author."','".$date."')";
		$result = mysqli_query($conn,$insertSQL);
		if($result){
			header("Location: add_news.php?success=true");
			$conn->close();
		}
		else {
			echo "Last error: " . mysqli_error($conn);
		}
		//close connection
		$conn->close();
	}
?>
