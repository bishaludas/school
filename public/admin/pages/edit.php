<?php 
$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : '0';

$query = mysqli_query($con, "SELECT * FROM post WHERE id ='$post_id' LIMIT 1");
while ($row = mysqli_fetch_assoc($query)) {
	$title = $row['title'];

	$catid = $row['category'];
	$category_query = mysqli_query($con, "SELECT cat_name FROM categories WHERE id='$catid'");
	$cat = mysqli_fetch_assoc($category_query);
	$category = $cat['cat_name'];

	$image = $row['image'];
	$content = $row['content'];
	$date = $row['date'];

	$date= $row['date'];
}


 ?>

 <form action="" method="post" enctype="multipart/form-data">
				<div class="row pb-2">
					<div class="col-md-2  text-center">Title</div>
					<div class="col-md-9">
						<input type="text" name="heading" value="<?php echo ucfirst($title); ?>" required>
					</div>
				</div>
				
				<div class="row pb-2">
					<div class="col-md-2  text-center">Date</div>
					<div class="col-md-9">
						<input type="date" name="date" value="<?php echo $date; ?>" required>
					</div>
				</div>


				<div class="row pb-2">
					<div class="col-md-2  text-center">Category</div>
					<div class="col-md-9">
						<select name="category" id="" style="font-size:80%; padding: 2px;">
							<option value="<?php echo $catid; ?>"><?php echo $category; ?></option>
							<?php 
							selectCategory($con);
							 ?>
						</select>
					</div>
				</div>

				<div class="row pb-3">
				<div class="col-md-2  text-center">Image</div>
				<div class="col-md-9">
					<img src="<?php echo $image ?>"" style="width: 100px; height: auto; margin-bottom: 10px;" alt=""><br>
					 <input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				</div>
				
				<div class="row pb-2">
				<div class="col-md-2  text-center">Content</div>
				<div class="col-md-9">
					<textarea id="content" class="tinymce" name="post-content" placeholder="body" style="width:167px" >
						<?php echo $content; ?>
					</textarea>
				</div>
				</div>

				<div class="row">
				<div class="col-md-2  text-center"></div>
				<div class="col-md-9">
					<input type="submit" name="submit_post">
				</div>
				</div>

				
			</form>