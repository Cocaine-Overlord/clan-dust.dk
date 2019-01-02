<?php
$fileList = glob('*.*');
foreach($fileList as $filename){
	echo $filename . ' size ' . filesize($filename) . '<br />';
}
?>
