<h3 class="mb-5 pt-4">Dashboard</h3>
<div class="board">
	<div class="container text-center">
		<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<p>Category</p>
					<ul>
						<li><a href="<?php echo url_for('admin/index.php?url=category');?>">View</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<p>Post</p>
					<ul>
						<li><a href="<?php echo url_for('admin/index.php?url=view posts');?>">View</a></li>
						<li><a href="<?php echo url_for('admin/index.php?url=add posts');?>">Add</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<p>Image</p>
					<ul>
						<li><a href="<?php echo url_for('admin/index.php?url=image');?>">View</a></li>
						<li><a href="<?php echo url_for('admin/index.php?url=image');?>">Add</a></li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
	
</div>