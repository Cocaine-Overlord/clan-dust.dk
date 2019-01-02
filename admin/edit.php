<?php
	include("adminHeader.php");
	
	require("config.php");
	$sqlstm = "SELECT * FROM News";
	$request = dbconnect();
	$result = mysqli_query($request,$sqlstm);
	$request->close();
?>

<div class="container">
	<h2>News items</h2>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
	<?php
		if($result->num_rows > 0) {
			while($row=$result->fetch_assoc()){
				echo "<tr><td>" . $row["news_title"]. "</td>";
				echo "<td>".$row["news_short_description"]. "</td>";
				echo "<td>".$row["date"]. "</td>";
				echo "<td><a href=\"update.php?id=\"".$row['news_id']."\" class=\"btn btn-primary m-r-1em\">Edit</a></td></tr>";
			}
		}
	?>
	</table>
</div>

<?php
	include("adminFooter.php");
?>
