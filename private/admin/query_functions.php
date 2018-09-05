<?php 
// <!-- admin login -->
function adminLogin($con){
	global $error_array;
	if (isset($_POST['adminLogin'])) {

		$email=filter_var(($_POST['email']), FILTER_SANITIZE_EMAIL); //sanitize email
		$email = db_escape($con, $email);
		$_SESSION['email']=$email;

 		$password = strip_tags($_POST['password']);//strips html tags
 		// $password =md5($password);
 		$password = db_escape($con, $password);

 		$query = mysqli_query($con, "SELECT * FROM admin_blog WHERE email='$email' AND password = '$password'");
 		$login_num_rows=mysqli_num_rows($query);

 		if ($login_num_rows == 1) {
 			$row = mysqli_fetch_assoc($query);
 			$username = $row['username'];

 			$_SESSION['username'] = $username;
 			header("Location: index.php");
 			exit();
 		}else{
 			array_push($error_array, "Your Email or Password is incorrect !<br>");
 		}
 	}

 }


// categories
function createCategories($con, $error_array){
 	if (isset($_POST['add_cat'])) {
 		$cat = db_escape($con, $_POST['category']);

 		$query=mysqli_query($con, "INSERT INTO categories VALUES('', '$cat')");
 		if ($query) {
 			$l = url_for('admin/index.php?url=category');
 			header("Location: $l ");
 		}
 	} 
}

function viewCategories($con){
 	$query = mysqli_query($con, "SELECT * FROM categories");
 	$counter =1;
 	while ($row = mysqli_fetch_assoc($query)) {
 		$cat_id = url($row['id']);
 		$cat_name = $row['cat_name'];

 		$res ="<tr>
 		<td>$counter</td>
 		<td>".hsc(ucfirst($cat_name))."</td>
 		<td><a style='color:black;' href='".url_for('/admin/index.php?url=delete&id='.$cat_id.'')."'>Delete &nbsp;<i class='ion-ios-trash-outline'></i></a></td>
 		</tr>";

 		echo $res;			
 		++$counter;
 	}
}

function selectCategory($con){
 	$query = mysqli_query($con, "SELECT * FROM categories");
 	while ($row = mysqli_fetch_assoc($query)) {
 		$cat_id = hsc($row['id']);
 		$cat_name = hsc($row['cat_name']);

 		echo "<option value='".$cat_id."'>".$cat_name."</option>";
 	}
}

function deleteCategory($con, $cat_id){
 	if (isset($_POST["del_yes"])) {
 		$query = mysqli_query($con, "DELETE FROM categories WHERE id='".url($cat_id)."' LIMIT 1" );
 		if ($query) {
 			$l = url_for('admin/index.php?url=category');
 			header("Location: $l ");
 		}
 	}else{
 		if (isset($_POST["del_no"])) {
 			$l = url_for('admin/index.php?url=category');
 			header("Location: $l ");
 		}
 	}
}


//POSTS
function submitPost($con){
 	if (isset($_POST['submit_post'])) {
 		$title = $_POST['heading'];
 		$cat = $_POST['category'];
 		$content = $_POST['post-content'];
 		$date = $_POST['date'];

 		$post_image = $_FILES['fileToUpload']['name'];

 		$target_dir = "../img/posts/";
 		$target_file = $target_dir .uniqid(). basename($post_image);
 		$uploadOk = 1;
 		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
 		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 		if($check !== false) {
 			echo "File is an image - " . $check["mime"] . ".";
 			$uploadOk = 1;
 		} else {
 			echo "File is not an image.";
 			$uploadOk = 0;
 		}

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
 		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 			&& $imageFileType != "gif" ) {
 			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 		$uploadOk = 0;
 	}
		// Check if $uploadOk is set to 0 by an error
 	if ($uploadOk == 0) {
 		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
 	} else {
 		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 			echo "The file ". basename($post_image). " has been uploaded.";
 			$query = mysqli_query($con, "INSERT INTO post VALUES('', '$title', '$cat', '$target_file','$content', '$date')");

 		} else {
 			echo "Sorry, there was an error uploading your file.";
 		}
 	}

 }
}

function deletePost($con, $post_id){
	if (isset($_POST["del_yes"])) {
		$query = mysqli_query($con, "DELETE FROM post WHERE id='".url($post_id)."' LIMIT 1" );
		if ($query) {
			$l = url_for('admin/index.php?url=view');
			header("Location: $l ");
		}
	}else{
		if (isset($_POST["del_no"])) {
			$l = url_for('admin/index.php?url=view');
			header("Location: $l ");
		}
	}
}


?>
