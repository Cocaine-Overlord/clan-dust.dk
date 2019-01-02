<?php
    include_once "common/header.php";
	$user = shell_exec("whoami");
?>

<div class="container">
    <h2>IP Banlist</h2><br />
    <?php
        echo "<h4>User: <b>$user</b></h4>";
	echo "<p>Total banned IPs: </p>";
        $fail2ban = shell_exec("sudo fail2ban-client status ssh");
        //Check for IPv4 address with egrep
        shell_exec("sudo fail2ban-client status ssh | egrep '[[:digit:]]{1,3}\.[[:digit:]]{1,3}\.[[:digit:]]{1,3}\.[[:digit:]]{1,3}'");
	$pipeArray = explode("-",$fail2ban);
	$pattern = "~[0-9][0-9][0-9]\.~";
	for($i=0;$i<count($pipeArray);$i++){
		//Check for delimiter "IP list"
		if(strpos($pipeArray[$i],"IP list:")){
			$ipList = explode(" ",$pipeArray[$i]);
			for($j=0;$j<count($ipList);$j++){
				if(preg_match("~[0-9]+~",$ipList[$j])){
					echo $ipList[$j]." <br />";
				}
			}
		}
	}
    ?>
</div>

<?php
    include_once "common/footer.php"
?>
