
<div class="board">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">	
				<?php 
				
				jsff($con);
				$query = mysqli_query($con, "SELECT * FROM jfss " );
					while ($row = mysqli_fetch_assoc($query)) {
						$content = $row['name'];

						
					}
				?>
				<form action="" method="post">
					<div class="row pb-2">

						<div class="col-md-12">
							<textarea id="content" class="tinymce" name="post-content" placeholder="body"" ><?php echo $content; ?></textarea>
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



