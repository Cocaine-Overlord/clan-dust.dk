<?php
	session_start();
	require_once("config.php");
?>
<!DOCTYPE html>
<head>
	<title>Login - Clan-dust.dk</title>
	<link rel="stylesheet" href="../content/login.css" type="text/css">
	
	<script src="../scripts/jquery-1.12.4.js"></script>
	<script type="text/javascript">
		function login() {
			var username = $("#username").val();
			var password = $("#password").val();
			if(username == "" || password == ""){
				alert("please type in username");
				return false;
			}
			
		}
	</script> 
</head>
<body>
	<div>
		<h2>Login</h2>
	</div>
	
	<table>
		<tr>
			<td>Table 1</td>
		</tr>
		<tr>
			<td>column 1</td>
		</tr>
	</table>
	<form id="loginForm" name="loginForm" action="" method="post" onsubmit="return login()">
		<input type="text" name="username" id="username" placeholder="Enter Username">
		<br>
		<input type="password" name="password" id="password" placeholder="***********">
		<br>
		<input type="submit" name="login" value="LOGIN" id="login_button">
		
		<select>
			<option value="Yes">Yes</option>
			<option value="Maybe">Maybe</option>
			<option value="No">No</option>
		</select>
	</form>
</body>
</html>
