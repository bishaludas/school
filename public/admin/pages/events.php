<div class="board">
	<div class="container">
		<div class="row">
			<div class="col-md-7 ">
				<table class="cms-table-border table table-striped">
					<tr>
						<th>S.no</th>
						<th>Title</th>
						<th>Description</th>
						<th>Date</th>
						<th>Delete</th>
					</tr>

					<?php 
					viewEvents($con);
					?>
				</table>
				
			</div>
			<div class="col-md-5">
				<?php 
				createEvents($con, $error_array);
				?>
				<h2>Add Event</h2>
				<form action="" method="post">
						
					
					<div><label for="date">Date</label></div>
					<input type="date" name="date" id="date" required="">

					<div><label for="event">Title</label></div>
					<input type="text" name="event_title" id="event" required="">

					<div><label for="event_body">Date</label></div>
					
					<textarea style="width: 95%; padding: 2%;" name="event_body" id="event_body" rows="4" cols="50"></textarea>

					<div><input type="submit" name="add_event" value="submit"></div>
				</form>
			</div>
		</div>
	</div>
</div>

