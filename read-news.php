<?php
	include("common/header.php");
	include("admin/config.php");
?>
<div class="container">
<?php
	$request = dbconnect();
	$newsid = (int)$_GET["newsid"];
	$query = "SELECT * FROM News WHERE news_id=".$newsid;
	
	$result = mysqli_query($request,$query);
	if($result === false){
			echo "No results found".$newsid;
		}
	$myrow = array();
	while($myrow = mysqli_fetch_assoc($result)) {
		echo "<h2>".$myrow['news_title']."</h2>";
		echo "<p>date: ".$myrow['date']."</p>";
		echo "<p>author: ".$myrow['author']."</p>";
		echo "<p>".$myrow['news_full_content']."</p>";
	}
	$request->close();
?>
</div>


<?php
	include("common/footer.php");
?>
