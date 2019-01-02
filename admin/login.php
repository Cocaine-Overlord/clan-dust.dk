<?php
	//initiate session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Login</title>
    
    <link rel="stylesheet" href="../content/login.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../content/bootstrap.min.css" />
    <script src="../scripts/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
		$(function(){
			$("#errMessage").dialog({
				modal:true,
				autoOpen:false,
				title:"Invalid username or password",
				width:300,
				height:150,
				buttons: {
					Ok: function() {
						$( this ).dialog( "close" );
					}
				}
			});
		});
    </script>
</head>
<body>
	<div class="wrapper">
        <form method="post" class="form-signin">
            <h2 class="form-signin-heading">Dust Underground</h2>
            <input id="username" type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            
            <button name="submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            
            <div id="errMessage" style="display:none" align="center">
				<span color="red">Your username or password did not match</span>
            </div>
        </form>
    </div>
	
    <?php
    if (isset($_POST['submit'])) {     
		//include("config.php");
		$username=$_POST['username'];
		$password=$_POST['password'];
		//$_SESSION['login_user']=$username; 
		$con = new mysqli("localhost","clandust_dk","Euro2018","clandust_dk");
		//$query = mysql_query("SELECT username FROM Users WHERE username='$username';");
		$query = "SELECT username FROM Users WHERE username='$username' AND password='".md5($password)."'";
		$sql = $con->query($query);
		$n = $sql->num_rows;
		//if (mysql_num_rows($query) != 0)
		if($n > 0) {
			$_SESSION['username'] = $username;
			echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";   
		}
		else {
			echo "<script>
						$(document).ready(function(){
							$('#errMessage').dialog('open');
						});
					</script>";
		}
    }
    ?>
</body>
</html>
