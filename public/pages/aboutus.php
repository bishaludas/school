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
		
		$image ='../img/School.jpg';
		echo "<img style='max-height:500px;' src='$image' alt='image' class='img-fluid mb-3'>";
		echo "<span>".strtoupper($column)."</span>";
		selectAboutUs($con, $column);
	 ?>
</div>

