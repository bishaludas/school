<?php 
$prog_id = isset($_GET['prog_id']) ? $_GET['prog_id'] : '0';

$query = mysqli_query($con, "SELECT * FROM programs WHERE id ='$prog_id' LIMIT 1");
while ($row = mysqli_fetch_assoc($query)) {
	$title = $row['title'];

	$image = $row['file_path'];
	$content = $row['content'];
}

editProgram($con, $prog_id);
?>

<form action="" method="post" enctype="multipart/form-data">
	<div class="row pb-2">
		<div class="col-md-2  text-center">Title</div>
		<div class="col-md-9">
			<input type="text" name="heading" value="<?php echo ucfirst($title); ?>" class="form-control" required="">
		</div>
	</div>


	<div class="row pb-3">
		<div class="col-md-2  text-center">Image</div>
		<div class="col-md-9">
			<img src="<?php echo $image; ?>"" style="width: 100px; height: auto; margin-bottom: 10px;" alt=""><br>
			<input type="file" name="fileToUpload" id="fileToUpload">
		</div>
	</div>

	<div class="row pb-2">
		<div class="col-md-2  text-center">Content</div>
		<div class="col-md-9">
			<textarea id="content" class="tinymce" name="post-content" placeholder="body"" ><?php echo $content; ?></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2  text-center"></div>
		<div class="col-md-9">
			<input type="submit" name="edit_post">
		</div>
	</div>
</form>