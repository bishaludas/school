<div class="board">
<div class="container">
<div class="row">
<div class="col-lg-12">
	<div class="card post-body">
		<div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row pb-2">
					<div class="col-md-2  text-center">Title</div>
					<div class="col-md-9">
						<input type="text" name="heading" class="form-control" required="">
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
					<input type="submit" name="submit_post">
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
	submitProgram($con);
 ?>