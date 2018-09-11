<?php 
function viewLatestNews($con){
	$query = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
	while ($row = mysqli_fetch_assoc($query)) {
		$title = $row['title'];
		$image = $row['file_path'];
		$image = str_replace('../', '', $image);
		$content = $row['content'];
		$content = substr($content,0, 80);

		$res ="<div class='row news-list py-2'>
		<div class='col-lg-4'>
		<div class='news-img'>
		<img src='$image' class='img-fluid' alt=''>
		</div> 
		</div>
		<div class='col-lg-8'>
		<b>".ucwords($title)."</b>
		<p> $content ...</p>
		<a href='#' class='btn btn-sm btn-outline-danger'>Read More</a>
		</div>
		</div>";

		echo $res;
	}
}


function LatestNewsPages($con){
	$query = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
	while ($row = mysqli_fetch_assoc($query)) {
		$title = $row['title'];
		$image = $row['file_path'];
		$content = $row['content'];
		$content = substr($content,0, 80);

		$res ="<div class='row news-list py-2'>
		<div class='col-lg-4'>
		<div class='news-img'>
		<img src='$image' class='img-fluid' alt=''>
		</div> 
		</div>
		<div class='col-lg-8'>
		<b>".ucwords($title)."</b>
		<p> $content ...</p>
		<a href='#' class='btn btn-sm btn-outline-danger'>Read More</a>
		</div>
		</div>";

		echo $res;
	}
}



function FetchName($con){
	$query = mysqli_query($con, "SELECT school_name FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$name = hsc($row['school_name']);
		
		$res ="
		<h2 class='pt-3'>$name</h2>";
		echo $res;
	}
}

function FetchSocialHome($con){
	$query = mysqli_query($con, "SELECT facebook, twitter, youtube FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$fb = hsc($row['facebook']);
		$tw = hsc($row['twitter']);
		$yt = hsc($row['youtube']);

		$res ="<li><a href='$fb' target='_blank'><i class='ion-social-facebook'></i></a></li>
		<li><a href='$tw' target='_blank'><i class='ion-social-twitter'></i></a></li>
		<li><a href='$yt' target='_blank'><i class='ion-social-youtube'></i></a></li>";

		echo $res;
	}
}


function FetchContactHome($con){
	$query = mysqli_query($con, "SELECT phone,  email FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$phone = hsc($row['phone']);
		$email = hsc($row['email']);

		$res ="
		<li><i class='ion-android-call'></i>&nbsp;&nbsp;$phone |</li>
		<li><i class='ion-email'></i>&nbsp;&nbsp;$email</li>";

		echo $res;
	}
}

function ContactFooter($con){
	$query = mysqli_query($con, "SELECT school_name, address, ward, phone,  email FROM homepage");
	while ($row = mysqli_fetch_assoc($query)) {
		$name = hsc($row['school_name']);
		$address = hsc($row['address']);
		$ward = hsc($row['ward']);
		$phone = hsc($row['phone']);
		$email = hsc($row['email']);

		$res ="
		<li>
		<i class='ion-ios-location'></i>&nbsp;&nbsp;<span>$name</span>
		<div>$address</div>
		<div>$ward</div>
		</li>
		<li>
		<i class='ion-android-call'></i>&nbsp;&nbsp;<span>Phone no :</span>
		<div>$phone</div>
		</li>
		<li>
		<i class='ion-email'></i>&nbsp;&nbsp;
		<span>$email</span>
		</li>";

		echo $res;
	}
}



 function selectProgram($con){
 	$query = mysqli_query($con, "SELECT id,title FROM programs");
 	while ($row = mysqli_fetch_assoc($query)) {
 		$name = hsc($row['title']);
 		$prog_id = hsc($row['id']);

 		echo "<a class='dropdown-item' href='".url_for('/pages?url=academic program&id='.$prog_id.'')."'>$name</a>";
 	}
 }


function viewProgram($con, $prog_id){
  $query = mysqli_query($con, "SELECT * FROM programs WHERE id ='$prog_id' LIMIT 1");
  while ($row = mysqli_fetch_assoc($query)) {
    $title = $row['title'];


    $image = $row['file_path'] ? $row['file_path'] : '../img/School.jpg';


    $content = $row['content'];

    $res ="<div id='about-content'>
    <span>$title</span>
    <div class='program-image'>
    <img style='max-height:500px;' src='$image' alt='image' class='img-fluid'>
    </div>
    <div>$content</div>
    </div>";

    echo $res;


  } 
}
?>