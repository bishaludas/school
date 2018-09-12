<style>
#about-content{
	text-align: left;
	margin: 5% 0;
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
	$query = mysqli_query($con, "SELECT * FROM career " );
	while ($row = mysqli_fetch_assoc($query)) {
		$content = $row['content'];

		echo $content;
	}
	?>
</div>

