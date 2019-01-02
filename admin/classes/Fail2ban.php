<?php

	if(isset($_GET['submit'])) {
		//Check if value is an 256 digit class
		if($_GET['unbanip'] == "") {
			echo "failed";
		}
		
		$ipAdr = $_GET['unbanip'];
		$unbanCmd = shell_exec("sudo fail2ban-client set ssh unbanip '".$ipAdr."'");
		
		if($unbanCmd != null){
			header("Location: ../ban.php?success=true",true,301);
		}
	}
	
	//header("Location: ../ban.php?",true,301);
?>
