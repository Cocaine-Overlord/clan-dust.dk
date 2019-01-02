<?php
    include_once "adminHeader.php";
?>
<div class="container">
    <h2>Upload file</h2>
    <?php
        $dir = '/var/www/clan-dust.dk/';
        //$dir = "c:/xampp/htdocs/";
        $directory = scandir($dir);
        
        print_r($directory);
    ?>
	<p>Click here to choose a file to upload</p>
</div>
<?php
    include_once "adminFooter.php";
?>
