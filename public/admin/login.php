<!-- initialize -->
<?php require_once('../../private/initialize.php'); ?>
<!-- initialize end -->

<?php $title ="Admin Login"; ?>

<!-- header -->
<?php include(SHARED_PATH.'/header.php'); ?>
<!-- header end -->		
<?php 
	if (isset($_SESSION["username"])) {
		header("Location: index.php");
	} 
	adminLogin($con); //admin login
?>

 	<section class="admin">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-4 offset-md-4">
 					<div class="admin-login text-center p-5">
 						<h3>Admin Login</h3>
 						<form action="" method="POST" autocomplete="off">
 							<div>
 								<input type="email" name="email" placeholder="email">
 							</div>
 							<div>
 								<input type="password" name="password">
 							</div>
 							<input type="submit" name="adminLogin" value="Login"><br>
							
							<span style="background: #eaeaea; font-size: 80%; border-radius: 3px; padding: 3px">
								<?php if (in_array("Your Email or Password is incorrect !<br>", $error_array)) {
 								echo "<span style='padding: 5px;'>Your Email or Password is incorrect !<br></span>";
 							} ?>
							</span>
 							
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>


