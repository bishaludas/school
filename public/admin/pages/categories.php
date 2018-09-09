<div class="board">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<table class="table table-striped">
					<tr>
						<th>S.no</th>
						<th>Categories</th>
						<th>Delete</th>
					</tr>

					<?php 
						viewCategories($con);
					?>
				</table>
				
			</div>
			<div class="col-md-4 offset-md-2">
				<?php 
				createCategories($con, $error_array);
				?>
				<strong>Add Category</strong>
				<form action="" method="post">
					<div class="row">
						<input type="text" name="category" id="" required="">
					</div>
					<div class="row">
						<input type="submit" name="add_cat" value="submit">
					</div>
					<?php 
					if (in_array("Category has been added", $error_array)) {
						echo "Category has been added";
					} 
					?>
				</form>
			</div>
		</div>
	</div>
</div>

