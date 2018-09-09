<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card post-body">
				<div class="card-body">
					
					<form action="" method="post" enctype="multipart/form-data">
						<?php fetchContact($con); ?>


						<div class="row">
							<div class="col-md-2  text-center"></div>
							<div class="col-md-9">
								<input type="submit" name="submit">
							</div>
						</div>
					</form>
					
					<?php 
					updateContact($con);
					?>
				</div>

			</div>
		</div>
	</div>
</div>
</div>




