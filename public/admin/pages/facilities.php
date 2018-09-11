<div class="board">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a class="btn btn-sm btn-success mb-3" href="#add">ADD</a>
				<div class="card">
					<table class="table table-striped">
					<tr>
						<th>S.no</th>
						<th>Name</th>
						<th>Image</th>
						<th>Content</th>
						<th>Delete</th>
					</tr>
					<?php $query = mysqli_query($con, "SELECT * FROM facilities");
					$counter =1;
					while ($row = mysqli_fetch_assoc($query)) {
						$id= $row['id'];
						$name = $row['name'];
						$image = $row['file_path'];
						$content = $row['content'];

						$res ="<tr class='view'>
						<td>$counter</td>
						<td>".ucwords($name)."</a></td>
						<td><img height='80px' src='$image' alt=''></td>
						<td>".$content."</td>
						<td><a class='btn btn-sm btn-danger' href='".url_for('/admin/index.php?url=delete&f_id='.$id.'')."'>Delete</a></td>
						
						</tr>";

						echo $res;			
						++$counter;
					} ?>
					
				</table>
				</div>
				
			</div>
			<div class="col-lg-12">
				
				<div class="card post-body" id="add">
					<div class="card-body">
						<h3>Add Testimonial</h3>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="row pb-2">
								<div class="col-md-2  text-center">Student Name</div>
								<div class="col-md-9">
									<input type="text" name="name" required="">
								</div>
							</div>


							<div class="row pb-3">
								<div class="col-md-2  text-center">Image</div>
								<div class="col-md-9">
									<input type="file" name="fileToUpload" id="fileToUpload">
								</div>
							</div>

							<div class="row pb-2">
								<div class="col-md-2  text-center">Content</div>
								<div class="col-md-9">
									<textarea id="content" class="tinymce" name="post-content" placeholder="body"" ></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-md-2  text-center"></div>
								<div class="col-md-9">
									<input type="submit" name="submit">
								</div>
							</div>


						</form>
					</div>

				</div>
			</div>				
		</div>
	</div>
</div>
</div>



<?php 
submitFacility($con);
?>