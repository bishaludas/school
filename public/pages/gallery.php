<style>
	#about-content{
		text-align: left;
		margin-top: 5%;
	}
	#about-content p{
		font-size: 17px;
		line-height: 1.5;
	}
	#about-content span{
	  font-size: 150%;
	  font-weight: 600;
	  padding: 5px;
	  border-bottom: 2px solid #e17055;

	}
</style>
<div id="about-content" >
<ul style="width: 100%; ">
<?php 
	$query = mysqli_query($con, "SELECT * FROM gallery ORDER BY id DESC");
	while ($row = mysqli_fetch_assoc($query)) {
 		$id = $row['id'];
 		$path = $row['file_path'];

 		$res ="<li class='gallert-li'>
					<a href='$path' data-toggle='lightbox' data-gallery='gallery'>
						<img class='gallery-img' src='$path' alt=''>
					</a>
				</li>";
		echo $res;
 	}
 ?>
 </ul>
 </div>
<div class="clear-fix"></div>
<div class="mb-5"></div>




