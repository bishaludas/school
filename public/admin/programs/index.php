
<div class="board">
<div class="container">
<div class="row">
<div class="col-lg-12">
	<a class="btn btn-sm btn-success text-light mb-4" href="<?php echo url_for('admin/index.php?url=add program');?>">Add Program</a>
	<div class="card post-body">
			
			<table class="table table-striped">
					<tr>
						<th>S.no</th>
						<th>Title</th>
						<th>Image</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>

					<?php 
					$query = mysqli_query($con, "SELECT * FROM programs");
					$counter =1;
					while ($row = mysqli_fetch_assoc($query)) {
						$id = $row['id'];
						$title = $row['title'];

						$image = $row['file_path'] ? $row['file_path'] : '../img/School.jpg';
						$content = $row['content'];

						$res ="<tr class='view'>
						<td>$counter</td>
						<td style='width: 38%;'><a href=''>".ucfirst(hsc($title))."</a></td>
						
						<td>
							<img src='$image' style='height:60px; ' alt='post-image'>
						</td>
						
						<td><a class='btn btn-sm btn-primary' href='".url_for('/admin/index.php?url=edit program&prog_id='.$id.'')."'>Edit</a></td>
						<td><a class='btn btn-sm btn-danger' href='".url_for('/admin/index.php?url=delete&prog_id='.$id.'')."'>Delete</a></td>
						</tr>";

						echo $res;			
					++$counter;
					}
					?>
				</table>
		
	</div>
</div>				
</div>
</div>
</div>
</div>



