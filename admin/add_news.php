<?php
	include("adminHeader.php");
?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script>
<?php
	if($_GET['success']=='true'){
		echo '$(function() {
			$("#popup").dialog({
				modal:true,
				buttons: {Ok: function(){
					$(this).dialog("close");
					}
				}
			});
		});';
	}
?>
</script>
<div class="container">
<form class="form-horizontal" name="addNewsForm" action="storeNewsItem.php" onsubmit="return validateForm()" method="post">
	<h2>Add New Article</h2>
	<div class="form-group">
		<label for="inputTitle" class="control-label col-xs-2">Title</label>
		<div class="col-xs-10">
			<input type="text" id="news_title" name="news_title" placeholder="Title" class="form-control">
		</div>
		<label id="news_title_err"></label>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-2">Author</label>
		<div class="col-xs-10">
			<input type="text" class="form-control" id="author" name="author" placeholder="Author">
		</div>
		<label id="author_err"></label>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-2">Date</label>
		<div class="col-xs-10">
			<input type="text" id="datepicker" name="datepicker" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-2" for="shortdes">Article Description</label>
		<div class="col-xs-10">
			<input type="text" id="news_short_description" name="news_short_description" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-2" for="fullcontent">Article Content</label>
		<div class="col-xs-10">
			<textarea type="text" id="news_full_content" name="news_full_content" class="form-control"></textarea>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-xs-2"></label>
		<div class="col-xs-10">
			<input type="submit" value="Save" name="submit" class="btn btn-primary">
		</div>
	</div>
	
	<!-- Modal -->
	<div id="popup" title="Insert Confirmation Message">
		<p>The news item was successfully added</p>
	</div>
</form>
<!-- Upload file form -->
<form id="uploadImage" action="classes/upload.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-xs-2">Upload file</label>
		<input type="file" name="fileUpload" id="fileUpload">
		<div class="col-xs-10">
			<input type="submit" value="Upload picture" name="submit" class="btn btn-primary">
		</div>
	</div>
</form>
</div>

<p id="msg"></p>
<script src="../scripts/upload.js"></script>

<script>
	$(document).ready(function() {
		$("#datepicker").datepicker({dateFormat:"yy-mm-dd"});
	});
</script>
<script>
	function validateForm() {
		var title = document.forms["addNewsForm"]["news_title"].value;
		var author = document.getElementById("author").value;
		var short_description = document.getElementById("news_short_description").value;
		if(title==""){
			document.getElementById("news_title_err").innerHTML = "Title cannot be empty";
			document.getElementById("news_title_err").style.color = "Red";
			return false;
		}
		if(author=="") {
			document.getElementById("author").focus();
			document.getElementById("author_err").innerHTML = "Author cannot be empty";
			return false;
		}
		return true;
	}
</script>
<?php
	include("adminFooter.php");
?>
