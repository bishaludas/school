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
	<table class="table table-striped">
		<tr>
			<th>S.no</th>
			<th>File Name</th>
			<th>File</th>
			<th>Download</th>
		</tr>

		<?php 
		$query = mysqli_query($con, "SELECT * FROM download");
		$counter =1;
		while ($row = mysqli_fetch_assoc($query)) {
			$id = $row['id'];
			$name = $row['name'];
			$file_path = $row['file_path'];
			$file = $row['file'];

			$res ="<tr class='view'>
			<td>$counter</td>
			<td>$name</td>
			<td>$file</td>
			<td><a href='$file_path' target='_blank'><button class='btn btn-primary'>Download</button></a></td>					
			</tr>";

			echo $res;			
			++$counter;
		}
		?>
	</table>
</div>
