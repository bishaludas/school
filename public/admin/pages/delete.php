<?php 
// Fetch id
$event_id = isset($_GET['eventId']) ? $_GET['eventId'] : '';
$cat_id = isset($_GET['catId']) ? $_GET['catId'] : '';
$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : '';
$prog_id = isset($_GET['prog_id']) ? $_GET['prog_id'] : '';
$t_id = isset($_GET['t_id']) ? $_GET['t_id'] : '';
$f_id = isset($_GET['f_id']) ? $_GET['f_id'] : '';


//Functions
if ($cat_id !="") {
	deleteCategory($con, $cat_id);
}

if ($event_id !="") {
	deleteEvent($con, $event_id);
}

if ($post_id !="") {
	deletePost($con, $post_id);
}


if ($prog_id !="") {
	deleteProgram($con, $prog_id);
}

if ($t_id !="") {
	deleteTestimonial($con, $t_id);
}

if ($f_id !="") {
	deleteFacility($con, $f_id);
}

?>


<div class="board">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<div class="card" style="width: 50%; margin:0 auto;">
					<div class="card-body">
						<form action="" method="post">
							<p>Are you sure you want to delete ?</p>

							<input type="submit" name="del_yes" value="Yes">
							<input type="submit" name="del_no" value="No">
						</form>
					</div>
					
				</div>				
			</div>
		</div>
	</div>
</div>

