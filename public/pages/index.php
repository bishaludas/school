<!-- initialize -->
<?php require_once('../../private/initialize.php'); ?>
<!-- initialize end -->
<?php $title ="Blog"; ?>
<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		

<!-- page content -->
<section class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?php
				$url = $_GET['url'];
				echo "<h3>".$url."</h3>";

				switch ($url) {
					case "about us":
					include(PUBLIC_PATH."/pages/aboutus.php");
					break;

					case "academic program":
					include(PUBLIC_PATH."/pages/program.php");
					break;

					case "gallery":
					include(PUBLIC_PATH."/pages/gallery.php");
					break;
					
					case "jfss":
					include(PUBLIC_PATH."/pages/jfss.php");
					break;

					default:
					echo "Comming Soon !";
				}
				?>
			</div>

			<div class="col-lg-3 border-left">
				<h2 class="text-center mb-4">समाचार</h2>
				<?php LatestNewsPages($con); ?>
			</div>
		</div>
	</div>

</section>


<!-- page content end-->


<!-- footer -->
<?php include(SHARED_PATH.'/footer.php'); ?>