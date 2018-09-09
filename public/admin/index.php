<!-- initialize -->
<?php require_once('../../private/initialize.php'); ?>
<!-- initialize end -->

<?php $title ="Admin"; ?>

<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		

<?php if (!isset($_SESSION["username"])) {
	header("Location: login.php");
} 
?>

<div class="container-fluid bg-cms">
	<div class="admin-cms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2">
					<div class="sidebar-wrapper">
					<h2>Side Menu</h2>
					<ul>
						<li><a href="<?php echo url_for('/admin') ?>">
								<i class="ion-android-clipboard">&nbsp;&nbsp;</i>Dashboard
							</a>
						</li>

						<li><a href="<?php echo url_for('admin/index.php?url=event');?>">
								<i class="ion-pricetags">&nbsp;&nbsp;</i>Event
							</a>
						</li>

						<li><a href="<?php echo url_for('admin/index.php?url=category');?>">
								<i class="ion-pricetags">&nbsp;&nbsp;</i>Categories
							</a>
						</li>

					<li class="post-main"><i class="ion-ios-compose-outline">&nbsp;&nbsp;</i>News <i class="ion-arrow-down-b"></i>
						<li class="post-li">
							<a href="<?php echo url_for('admin/index.php?url=view news');?>" style="font-size: 80%; ">
								&nbsp;&nbsp;&nbsp;<i class="ion-ios-eye"></i>&nbsp;&nbsp;View
							</a>
						</li>

						<li class="post-li"><a href="<?php echo url_for('admin/index.php?url=add news');?>" style="font-size: 80%;">
							&nbsp;&nbsp;&nbsp;<i class="ion-ios-compose-outline"></i>&nbsp;&nbsp;Add
						</a>
					</li>
				</li>
				<li><a href="<?php echo url_for('admin/index.php?url=image');?>">
					<i class="ion-ios-camera"></i>&nbsp;&nbsp;Image
				</a>
				</li>


		</ul>

	</div>

</div>
<div class="col-lg-10">
	<div class="row">
		<div class="col-lg-12 py-3 mb-3">
			<div class="cms-head">
				<a href="<?php echo url_for('admin/pages/logout.php');?>" class="btn btn-danger">Logout</a>
			</div>
		</div>
	</div>

	<div class="clear-fix"></div>
	<div class="cms-body">
		<?php 
		if (isset($_GET["url"])) {
			$url = $_GET["url"];
			echo "
			<div class='cms-title'>
			<h3>".$url."</h3>
			</div>
			";
		}else{
			$url = "";
		}
			

		switch ($url) {
			case 'view news':
			include(PUBLIC_PATH."/admin/pages/view.php");
			break;

			case 'add news':
			include(PUBLIC_PATH."/admin/pages/add.php");
			break;

			case 'edit':
			include(PUBLIC_PATH."/admin/pages/edit.php");
			break;

			case 'category':
			include(PUBLIC_PATH."/admin/pages/categories.php");
			break;

			case 'event':
			include(PUBLIC_PATH."/admin/pages/events.php");
			break;

			case 'event':
			include(PUBLIC_PATH."/admin/pages/categories.php");
			break;

			case 'image':
			include(PUBLIC_PATH."/admin/pages/image.php");
			break;

			case 'delete':
			include(PUBLIC_PATH."/admin/pages/delete.php");
			break;

			default:
			include(PUBLIC_PATH."/admin/pages/dashboard.php");
			break;
		}
		?>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 Copyright text-center py-4">Copyright &copy; <?php date('Y'); ?> Bishaludash.com.np</div>
	</div>
</div>



<!-- footer -->
<script src="<?php echo url_for('/vendors/js/jQuery.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/popper.min.js') ?>"></script>
<script src="<?php echo url_for('/vendors/js/bootstrap.min.js') ?>"></script>	
<script src="<?php echo url_for('/vendors/js/navbar-fixed.js') ?>"></script>	
<script src="<?php echo url_for('/resources/js/main.js') ?>"></script>	
<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
<!-- footer end -->	