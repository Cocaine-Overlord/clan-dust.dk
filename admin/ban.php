<?php
	include("adminHeader.php");
?>
<script>
	<?php
		if($_GET["success"] == "true"){
			echo "suck me balls";
		}
	?>
</script>
<div class="container">
	<h2>Ban/Unban IP</h3>
	<form action="classes/Fail2ban.php" method="GET">
		<p>Unban IP: <input type="text" name="unbanip"></p>
		<input type="submit" name="submit" value="Unban IP">
	</form>
</div>
<?php
	include("adminFooter.php");
?>
