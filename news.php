<?php
	include ("common/header.php");
?>
<div class="container">
	<h2>Latest News</h2>
	<?php
		include ("admin/config.php");
		
		$request = dbconnect();
		//query the db
		$result = mysqli_query($request,"SELECT * FROM News ORDER BY date DESC LIMIT 0, 5");
		if($result === false){
			echo "No results found";
		}
		else {
			$rows = array();
			while($row = mysqli_fetch_assoc($result)) {
				$row[] = $row;
				echo "<b>" . $row["news_title"]. "</b><br />";
				echo $row["news_short_description"]. "<br />";
				echo "<p><a href=\"read-news.php?newsid=".$row["news_id"]."\">click here</a></p>";
			}
		}
		$request->close();
?>
</div>
<?php
	include 'common/footer.php';
?>
