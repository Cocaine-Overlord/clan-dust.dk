<?php
	session_start();
	
	//Check if user is logged in
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
	$user = $_SESSION['username'];
?>
	<h2>Welcome <?php echo $user; ?></h2>
	<div>
		Click to <a href="logout.php">logout</a>
	</div>
	
	<?php
		echo "This is the session: " . session_id();
	?>

<form action="upload.php" method="post" enctype="multipart/form-data">
<p>Select image to upload:</p>
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
