<?php 
$id =isset($_GET['id']) ? $_GET['id'] : 'bla';
// echo $id."<br>";


// echo htmlspecialchars($id);
?>


<!-- initialize -->
<?php require_once('../../private/initialize.php'); ?>
<!-- initialize end -->
<?php $title ="जनकल्याण नमुना माध्यमिक विद्यालय"; ?>
<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		

<!-- home -->
<section class="bg-section py-3">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="menu-nav text-center my-0 py-0">
					<li><a href="<?php echo url_for('index.php');?>">home</a></li>
					<li><a href="<?php echo url_for('index.php/#about'); ?>">about</a></li>
					<li><a href="<?php echo url_for('index.php/#skills'); ?>">skills</a></li>
					<li><a href="<?php echo url_for('index.php/#experience'); ?>">experience</a></li>
					<li><a href="<?php echo url_for('index.php/#work'); ?>">work</a></li>
					<li><a href="<?php echo url_for('pages/index.php'); ?>">Blog</a></li>
				</ul>
			</div>
			
		</div>
		
		
	</div>
</section>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 blog">
				<div class="row">
					
					<div class="col-lg-12 ">
						<?php 
						$query = mysqli_query($con, "SELECT * FROM post WHERE id='$id' ORDER BY id DESC");
						$num_post = mysqli_num_rows($query);
						if ($num_post > 0 ) {
							while ($row = mysqli_fetch_assoc($query)) {
							$id = $row['id'];
							$title = $row['title'];

							$catid = $row['category'];
							$category_query = mysqli_query($con, "SELECT cat_name FROM categories WHERE id='$catid'");
							$cat = mysqli_fetch_assoc($category_query);
							$category = $cat['cat_name'];

							$image = $row['image'];
							$content = $row['content'];
							$date= $row['date'];
							$yrdata = strtotime($date);
						}}else{
							$i=url_for('/pages/');
							header("Location: $i");
						}
							?>

							<div class="blog-post pb-5">
								<div class="blog-heading">
									<h4><?php echo hsc($title); ?></h4>
									<ul>
										<li class="cat">Category</li>
										<li><?php echo date('l F jS, Y', $yrdata); ?></li>
									</ul>
								</div>
								<hr>
								<div class="blog-post-img">
								<img src="<?php echo $image?>" alt="">
							</div>
								
								<div class="">
									<?php echo $content; ?>
								</div>

								</div>

							</div>
						</div><hr>				
					</div>

					<!-- sidenews -->
					<div class="col-lg-3">
						<h3>Latest Posts</h3>
						<ul class="latest-post py-2">
							<li>
								<a href="#">
									<figure><img src="<?php echo url_for('img/html.png') ?>" alt="post-image"></figure>
									<p>Lorem ipsum dolor sit amet.</p>
								</a>
							</li>
							<li>
								<a href="#">
									<figure><img src="<?php echo url_for('img/html.png') ?>" alt="post-image"></figure>
									<p>Lorem ipsum dolor sit amet.</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>




		<!-- footer -->
		<?php include(SHARED_PATH.'/footer.php'); ?>