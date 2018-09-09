
<div class="board">
<div class="container">
<div class="row">
<div class="col-lg-12">
	<div class="card post-body">
		
			<table class="table table-striped">
					<tr>
						<th>S.no</th>
						<th>Title</th>
						<th>Category</th>
						<th>Image</th>
						<th>Date</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>

					<?php 
					$query = mysqli_query($con, "SELECT * FROM news ORDER BY date");
					$counter =1;
					while ($row = mysqli_fetch_assoc($query)) {
						$id = $row['id'];
						$title = $row['title'];

						$catid = $row['cat_id'];
						$category_query = mysqli_query($con, "SELECT name FROM categories WHERE id='$catid'");
						$cat = mysqli_fetch_assoc($category_query);
						$category = $cat['name'];

						$image = $row['file_path'];
						$content = $row['content'];
						$date = $row['date'];

						$date= $row['date'];
 						$yrdata = strtotime($date);

						$res ="<tr class='view'>
						<td>$counter</td>
						<td style='width: 38%;'><a href=''>".ucfirst($title)."</a></td>
						<td>".hsc($category)."</td>
						<td>
							<img src='$image' style='height:60px; ' alt='post-image'>
						</td>
						<td style='width: 20%;'>".date('F jS, Y', $yrdata)."</td>
						<td><a class='btn btn-sm btn-primary' href='".url_for('/admin/index.php?url=editNews&post_id='.$id.'')."'>Edit</a></td>
						<td><a class='btn btn-sm btn-danger' href='".url_for('/admin/index.php?url=delete&post_id='.$id.'')."'>Delete</a></td>
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



