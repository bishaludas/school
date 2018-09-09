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

 		$query = mysqli_query($con, "SELECT * FROM cms_admin WHERE email='$email' AND password = '$password'");
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

// events
 function createEvents($con, $error_array){
 	if (isset($_POST['add_event'])) {
 		$date = db_escape($con, $_POST['date']);
 		$title = db_escape($con, $_POST['event_title']);
 		$body = db_escape($con, $_POST['event_body']);
 		

 		$query=mysqli_query($con, "INSERT INTO events(date, title, body) VALUES('$date', '$title', '$body')");
 		if ($query) {
 			$l = url_for('admin/index.php?url=event');
 			header("Location: $l ");
 		}
 	} 
 }

 function viewEvents($con){
 	$query = mysqli_query($con, "SELECT * FROM events ORDER BY date");
 	$counter =1;
 	while ($row = mysqli_fetch_assoc($query)) {
 		$id = url($row['id']);
 		$event_title = $row['title'];
 		$event_body = $row['body'];
 		$date = $row['date'];
 		$yrdata = strtotime($date);

 		$res ="<tr>
 		<td>$counter</td>
 		<td><a style='color:black;' href='".url_for('/admin/index.php?url=delete&id='.$id.'')."'>".hsc(ucfirst($event_title))."</a></td>
 		<td>".hsc(ucfirst($event_body))."</td>
 		<td>".date('F jS, Y', $yrdata)."</td>
 		<td><a class='btn btn-sm btn-danger' href='".url_for('/admin/index.php?url=delete&eventId='.$id.'')."'>Delete</a></td>
 		</tr>";

 		echo $res;			
 		++$counter;
 	}
 }

 function deleteEvent($con, $event_id){
 	if (isset($_POST["del_yes"])) {
 		$query = mysqli_query($con, "DELETE FROM events WHERE id='".db_escape($con, $event_id)."' LIMIT 1" );
 		if ($query) {
 			$l = url_for('admin/index.php?url=event');
 			header("Location: $l ");
 		}
 	}else{
 		if (isset($_POST["del_no"])) {
 			$l = url_for('admin/index.php?url=event');
 			header("Location: $l ");
 		}
 	}
 }


// categories
 function createCategories($con, $error_array){
 	if (isset($_POST['add_cat'])) {
 		$cat = db_escape($con, $_POST['category']);

 		$query=mysqli_query($con, "INSERT INTO categories(name) VALUES('$cat')");
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
 		$cat_name = $row['name'];

 		$res ="<tr>
 		<td>$counter</td>
 		<td>".hsc(ucfirst($cat_name))."</td>
 		<td><a style='color:black;' href='".url_for('/admin/index.php?url=delete&catId='.$cat_id.'')."'>Delete &nbsp;<i class='ion-ios-trash-outline'></i></a></td>
 		</tr>";

 		echo $res;			
 		++$counter;
 	}
 }

 function selectCategory($con){
 	$query = mysqli_query($con, "SELECT * FROM categories");
 	while ($row = mysqli_fetch_assoc($query)) {
 		$cat_id = hsc($row['id']);
 		$cat_name = hsc($row['name']);

 		echo "<option value='".$cat_id."'>".$cat_name."</option>";
 	}
 }

 function deleteCategory($con, $cat_id){
 	if (isset($_POST["del_yes"])) {
 		$query = mysqli_query($con, "DELETE FROM categories WHERE id='".db_escape($con,$cat_id)."' LIMIT 1" );
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





// *******************
// *********POSTS*****
// *******************
 function submitPost($con){
 	if (isset($_POST['submit_post'])) {
 		$title = $_POST['heading'];
 		$cat = $_POST['category'];
 		$content = $_POST['post-content'];
 		$date = $_POST['date'];

 		$post_image = $_FILES['fileToUpload']['name'];
 		if ($post_image != "") {
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
 		} 
 		else {
 			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
 				echo "The file ". basename($post_image). " has been uploaded.";
 				$query = mysqli_query($con, "INSERT INTO news(title, cat_id, file_path, content, date) VALUES( '$title', '$cat', '$target_file','$content', '$date')");

 			} else {
 				echo "Sorry, there was an error uploading your file.";
 			}
 		}	
 	}
 	else{
 		$query = mysqli_query($con, "INSERT INTO news(title, cat_id, file_path, content, date) VALUES('$title', '$cat', ' ','$content', '$date')");
 		if (!$query) {
 			echo mysqli_error($con);
 		}
 	}
 }
}


function editPost($con, $post_id){
	if (isset($_POST['edit_post'])) {
		$title = $_POST['heading'];
		$cat = $_POST['category'];
		$content = $_POST['post-content'];
		$date = $_POST['date'];

		$post_image = $_FILES['fileToUpload']['name'];
		if ($post_image != "") {
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
		} 
		else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename($post_image). " has been uploaded.";
				$query = mysqli_query($con, "UPDATE news SET title = '$title', cat_id = '$cat', file_path = '$target_file', content ='$content', date='$date' WHERE id = '$post_id' ");
				if ($query) {
					$l = url_for('admin/index.php?url=editNews&post_id='.$post_id);
					header("Location: $l ");
				}
				if (!$query) {
					echo mysqli_error($con);
				}
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}	
	}else{
		$query = mysqli_query($con, "UPDATE news SET title = '$title', cat_id = '$cat', content ='$content', date='$date' WHERE id = '$post_id' ");
		if ($query) {
			$l = url_for('admin/index.php?url=editNews&post_id='.$post_id);
			header("Location: $l ");
		}
		if (!$query) {
			echo mysqli_error($con);
		}
	}
}
}




function deletePost($con, $post_id){
	if (isset($_POST["del_yes"])) {
		$query = mysqli_query($con, "DELETE FROM news WHERE id='".url($post_id)."' LIMIT 1" );
		if ($query) {
			$l = url_for('admin/index.php?url=view news');
			header("Location: $l ");
		}
	}else{
		if (isset($_POST["del_no"])) {
			$l = url_for('admin/index.php?url=view news');
			header("Location: $l ");
		}
	}
}


// ****************
// HOMEPAGE
// ****************

function selectAboutUs($con){
	$query = mysqli_query($con, "SELECT about_us FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$content = $row['about_us'];

		echo $content;
	}
} 

function selectAboutUslim($con){
	$query = mysqli_query($con, "SELECT about_us FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$content = $row['about_us'];
		$content = substr($content,0, 3000);

		echo $content."...";
	}
} 

function submitAboutUs($con){
	if (isset($_POST['submit'])) {
		$content = db_escape($con, $_POST['post-content']);

		$query=mysqli_query($con, "UPDATE homepage SET about_us ='$content' WHERE id='1' ");
		if ($query) {
			$l = url_for('admin/index.php?url=about us');
			header("Location: $l ");
		}else{
			echo mysqli_error($con);
		}
	} 
}


function updateSocial($con){
	if (isset($_POST['submit'])) {
		$fb = db_escape($con, $_POST['fb_link']);
		$tw = db_escape($con, $_POST['tw_link']);
		$yt= db_escape($con, $_POST['yt_link']);


		$query=mysqli_query($con, "UPDATE homepage SET facebook ='$fb', twitter ='$tw', youtube ='$yt' WHERE id='1' ");
		if ($query) {
			$l = url_for('admin/index.php?url=social');
			header("Location: $l ");
		}else{
			echo mysqli_error($con);
		}
	} 
}

function fetchSocial($con){
	$query = mysqli_query($con, "SELECT facebook, twitter, youtube FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$fb = hsc($row['facebook']);
		$tw = hsc($row['twitter']);
		$yt = hsc($row['youtube']);


		$res ="<div class='row pb-2'>
		<div class='col-md-2  text-center'>Facebook link :</div>
		<div class='col-md-9'>
		<input type='text' class='form-control' name='fb_link' value='$fb'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Twitter link :</div>
		<div class='col-md-9'>
		<input type='text'  class='form-control' name='tw_link' value='$tw'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Youtube link :</div>
		<div class='col-md-9'>
		<input type='text'  class='form-control' name='yt_link' value='$yt'>
		</div>
		</div>";

		echo $res;
	}
}



function fetchContact($con){
	$query = mysqli_query($con, "SELECT school_name, address, ward, phone,  email FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$name = hsc($row['school_name']);
		$address = hsc($row['address']);
		$ward = hsc($row['ward']);
		$phone = hsc($row['phone']);
		$email = hsc($row['email']);


		$res ="<div class='row pb-2'>
		<div class='col-md-2  text-center'>School Name :</div>
		<div class='col-md-9'>
		<input type='text' class='form-control' name='school' value='$name'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Address :</div>
		<div class='col-md-9'>
		<input type='text' class='form-control' name='address' value='$address'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Ward :</div>
		<div class='col-md-9'>
		<input type='text'  class='form-control' name='ward' value='$ward'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Phone no. :</div>
		<div class='col-md-9'>
		<input type='text'  class='form-control' name='phone' value='$phone'>
		</div>
		</div>

		<div class='row pb-2'>
		<div class='col-md-2  text-center'>Email :</div>
		<div class='col-md-9'>
		<input type='text'  class='form-control' name='email' value='$email'>
		</div>
		</div>";

		echo $res;
	}
}

function updateContact($con){
	if (isset($_POST['submit'])) {
		$name = db_escape($con, $_POST['school']);
		$address = db_escape($con, $_POST['address']);
		$ward = db_escape($con, $_POST['ward']);
		$phone = db_escape($con, $_POST['phone']);
		$email = db_escape($con, $_POST['email']);


		$query=mysqli_query($con, "UPDATE homepage SET school_name = '$name', address = '$address', ward ='$ward', phone='$phone',  email='$email' WHERE id='1' ");
		if ($query) {
			$l = url_for('admin/index.php?url=contact');
			header("Location: $l ");
		}else{
			echo mysqli_error($con);
		}
	} 
}






?>
