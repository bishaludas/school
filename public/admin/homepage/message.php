<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php 
			$id =isset($_GET['id']) ? $_GET['id'] :'';
			if ($id == 1) {
				echo "<h4>Principal</h4>";
			}else{ echo "<h4>Chairman</h4>";}


			$query = mysqli_query($con, "SELECT * FROM message WHERE id='$id'");
			while ($row = mysqli_fetch_assoc($query)) {
				$name = hsc($row['name']);
				$message = hsc($row['message']);
				$photo = $row['file_path'];

			}
			?>
			<div class="card post-body">
				<div class="card-body">
					
					<form action="" method="post" enctype="multipart/form-data">
						<div class="row pb-2">
							<div class="col-md-2  text-center">Name</div>
							<div class="col-md-9">
								<input type="text" name="name" required="" value="<?php echo $name; ?>" class="form-control">
							</div>
						</div>

						<div class="row pb-3">
							<div class="col-md-2  text-center">Image</div>
							<div class="col-md-9">
								<input type="file" name="fileToUpload" id="fileToUpload"><br>
								<img height="100px" src="<?php echo $photo; ?>" alt="">
							</div>
						</div>

						<div class="row pb-2">
							<div class="col-md-2  text-center">Content</div>
							<div class="col-md-9">
								<textarea id="content" class="tinymce" name="post-content" placeholder="body"" >
									<?php echo $message; ?>
								</textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2  text-center"></div>
							<div class="col-md-9">
								<input type="submit" name="submit">
							</div>
						</div>
					</form>
					<?php 
					submitMessage($con, $id);
					?>
				</div>
			</div>
		</div>
	</div>
</div>

