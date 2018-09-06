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
			<div class="col-lg-12">
				<?php
				$favcolor = $_GET['url'];

				switch ($favcolor) {
					case "Facilities":
					echo $favcolor;
					break;
					case "Alumni":
					echo "Your favorite color is blue!";
					break;
					case "green":
					echo "Your favorite color is green!";
					break;
					default:
					echo "Your favorite color is neither red, blue, nor green!";
				}
				?>
			</div>
		</div>
	</div>

</section>


<!-- page content end-->


<!-- footer -->
<?php include(SHARED_PATH.'/footer.php'); ?>