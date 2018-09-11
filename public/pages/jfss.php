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
	<span>Janakalyan Former Student Society Committee</span>
	<?php 
	$query = mysqli_query($con, "SELECT * FROM jfss " );
	while ($row = mysqli_fetch_assoc($query)) {
		$content = $row['name'];

		echo $content;
	}
	?>
</div>

