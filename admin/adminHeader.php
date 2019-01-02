<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
    $user = $_SESSION['username'];
    
    //initiate DB class
    require_once("classes/DbConfig.php");
    $db = new DbConfig();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Clan-dust.dk</title>
        
        <!-- THE BASICS -->
        <link rel="stylesheet" href="../content/bootstrap.min.css">
        <link rel="stylesheet" href="../content/site.css">
		<link rel="stylesheet" href="../content/jquery-ui.css">
        <script src="../scripts/jquery-1.12.4.js"></script>
        <script src="../scripts/bootstrap.min.js"></script>
		<script src="../scripts/jquery-ui.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Clan-dust.dk</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="add_news.php">Manage Blog
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="add_news.php">Add item</a></li>
							<li><a href="edit.php">Edit item</a></li>
							<li><a href="#">Delete item</a></li>
						</ul>
                    </li>
                    <li><a href="ban.php">Banlist</a></li>
                    <li><a href="upload.php">Upload</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Hello <?php echo $user; ?></a></li>
                </ul>
            </div>
        </nav>
        <!-- END OF HEADER -->
