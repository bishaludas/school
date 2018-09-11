<div class="board">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a class="btn btn-sm btn-success mb-3" href="#add">ADD</a>
				<div class="card">
					<table class="table table-striped">
					<tr>
						<th>S.no</th>
						<th>Name</th>
						<th>File</th>
						<th>Delete</th>
					</tr>
					<?php $query = mysqli_query($con, "SELECT * FROM download");
					$counter =1;
					while ($row = mysqli_fetch_assoc($query)) {
						$id= $row['id'];
						$name = $row['name'];
						$file = $row['file_path'];
						
						$res ="<tr class='view'>
						<td>$counter</td>
						<td>".ucwords($name)."</a></td>
						<td>$file</td>
						<td><a class='btn btn-sm btn-danger' href='".url_for('/admin/index.php?url=delete&f_id='.$id.'')."'>Delete</a></td>
						
						</tr>";

						echo $res;			
						++$counter;
					} ?>
					
				</table>
				</div>
				
			</div>
			<div class="col-lg-12">
				
				<div class="card post-body" id="add">
					<div class="card-body">
						<h3>Add Testimonial</h3>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="row pb-2">
								<div class="col-md-2  text-center">Student Name</div>
								<div class="col-md-9">
									<input type="text" name="name" required="">
								</div>
							</div>


							<div class="row pb-3">
								<div class="col-md-2  text-center">File</div>
								<div class="col-md-9">
									<input type="file" name="fileToUpload" id="fileToUpload">
								</div>
							</div>

							<div class="row">
								<div class="col-md-2  text-center"></div>
								<div class="col-md-9">
									<input type="submit" name="submit">
								</div>
							</div>


						</form>
					</div>

				</div>
			</div>				
		</div>
	</div>
</div>
</div>



<?php 
function submitDownload($con){
 	if (isset($_POST['submit'])) {
 		$name = $_POST['name'];

 		$post_image = $_FILES['fileToUpload']['name'];
 		if ($post_image != "") {
 			$target_dir = "../documents/";
 			$target_file = $target_dir .uniqid(). basename($post_image);
 			$uploadOk = 1;
 			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if image file is a actual image or fake image
 			// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 			// if($check !== false) {
 			// 	echo "File is an image - " . $check["mime"] . ".";
 			// 	$uploadOk = 1;
 			// } else {
 			// 	echo "File is not an image.";
 			// 	$uploadOk = 0;
 			// }

			// Check if file already exists
 			if (file_exists($target_file)) {
 				echo "Sorry, file already exists.";
 				$uploadOk = 0;
 			}
			// Check file size
 			if ($_FILES["fileToUpload"]["size"] > 5000000) {
 				echo "Sorry, your file is too large.";
 				$uploadOk = 0;
 			}
			// Allow certain file formats
 			if($imageFileType != "doc" && $imageFileType != "pdf" && $imageFileType != "xls"
 				&& $imageFileType != "docx" ) {
 				echo "Sorry, only doc, pdf, xls & GIF files are allowed.";
 			$uploadOk = 0;
 		}
			// Check if $uploadOk is set to 0 by an error
 		if ($uploadOk == 0) {
 			echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
 		} 
 		else {
 			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 				echo "The file ". basename($post_image). " has been uploaded.";
 				$query = mysqli_query($con, "INSERT INTO download(name, file_path) VALUES( '$name','$target_file')");
			 		if ($query) {
			 			$l = url_for('admin/index.php?url=download');
						header("Location: $l ");
			 		}
 			} else {
 				echo "Sorry, there was an error uploading your file.";
 			}
 		}	
 	}
 }
}

submitDownload($con);
?>