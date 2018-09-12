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
<div id="about-content">

	<?php 
		$column=isset($_GET['column']) ? $_GET['column'] : '';
		
		if ($column == "details") {
			$image ='../img/School.jpg';
		}elseif ($column == "history") {
			$image ='../img/14.jpg';
		}elseif ($column == "profile") {
			$image ='../img/17.jpg';
		}else {
			$image ='../img/18.jpg';
		}
		
		echo "<div class='text-center w-100'><img style='max-height:500px;' src='$image' alt='image' class='img-fluid mb-3'><br></div>";
		echo "<span>".strtoupper($column)."</span>";
		selectAboutUs($con, $column);
	 ?>
</div>

