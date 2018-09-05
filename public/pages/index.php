<!-- initialize -->
<?php require_once('../../private/initialize.php'); ?>
<!-- initialize end -->
<?php $title ="Blog"; ?>
<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		

<!-- top banner -->
<section class="banner">
	<div class="overlay">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 hero_text text-center">
				<img src="<?php echo url_for('img/pf.jpg'); ?>" alt="display picture" class="hero-img mb-4">
				<h1>Bishal Udash</h1>
				<p class="info">Blogs</p>
			</div>
		</div>
	</div>
</section>

<!-- home -->
<section class="bg-section">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="menu-nav text-center">
					<li><a href="<?php echo url_for('index.php');?>">home</a></li>
					<li><a href="<?php echo url_for('index.php/#about'); ?>">about</a></li>
					<li><a href="<?php echo url_for('index.php/#skills'); ?>">skills</a></li>
					<li><a href="<?php echo url_for('index.php/#experience'); ?>">experience</a></li>
					<li><a href="<?php echo url_for('index.php/#work'); ?>">work</a></li>
					<li><a href="<?php echo url_for('pages/index.php'); ?>">Blog</a></li>
				</ul>

				<a class="mobile-nav-icon"><i class="ion-navicon"></i></a>
			</div>
			
		</div>
		
		
	</div>
</section>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 blog">
				
				<?php 
				$query = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC");
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

 						$content= substr( $row['content'],0,800);
 						$content = strip_tags($content);
					?>

				<div class="row">
					<div class="col-lg-4">
						<div class="blog-img">
							<img src="<?php echo $image;?>" alt="">
						</div>
					</div>
					<div class="col-lg-8 ">
						<div class="blog-post pb-5">
							<div class="blog-heading">
								<a href="<?php echo url_for('/pages/blog.php?id='.url($id)); ?>"><h4><?php echo $title ?></h4></a>
								
								<ul>
									<li class="cat"><?php echo $category ?></li>
									<li><?php echo date('l F jS, Y', $yrdata); ?></li>
								</ul>
							</div>
							<div class=" mb-5">
								<?php echo  $content; ?>
							</div>
							<a href="<?php echo url_for('/pages/blog.php?id='.url($id)); ?>" class="hero-btn">Read more</a>
						</div>
						
					</div>
				</div><hr>
				<?php } }else{
						echo "Comming Soon";}
					?>				
			</div>

			<!-- latest news -->
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