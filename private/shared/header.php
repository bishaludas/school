<?php $page_title = 'जनकल्याण नमुना माध्यमिक विद्यालय'; ?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="">
	<title><?php echo $page_title; ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo url_for('/img/icons/favicon.ico'); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo url_for('/img/icons/favicon.ico'); ?>" type="image/x-icon" type="image/x-icon">

	<!-- stylesheets -->
	<link rel="stylesheet" href="<?php echo url_for('/vendors/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?php echo url_for('/vendors/css/ionicons.min.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Muli" rel="stylesheet">

	<!-- custom stylesheet	 -->
	<link rel="stylesheet" href="<?php echo url_for('/resources/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo url_for('/resources/css/media.css'); ?>">
</head>
<body>



<!-- top logo banner -->
<section class="top-logo py-3">
	<div class="container">
    <div class="row">

      <div class="col-md-6">
      	<a class="head-link " href="<?php echo url_for('/'); ?>">
      		<img height="100px" class="mr-3" style="float: left;" src="<?php echo WWW_ROOT.'/img/logo.png' ?>" alt="School Logo">
        <?php FetchName($con); ?>
      	</a>
      </div>

      <div class="col-md-6">
        <div class="social-icon">
          <?php FetchSocialHome($con); ?>
          <a class="btn -btn-sm btn-dark" href="<?php echo url_for('/admin'); ?>">Login</a>
        </div>
        <div class="clear-fix"></div>

        <div class="contact">
          <?php FetchContactHome($con); ?>
        </div>
      </div>
    </div>		
	</div>
</section>
<!-- end top banner -->


<!-- navigation bar -->
<section class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <a class="navbar-brand head-home" href="<?php echo url_for('/'); ?>"><i class="ion-ios-home"></i> Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
            
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo url_for('/pages?url=about us&column=details'); ?>">Details</a>
          <a class="dropdown-item" href="<?php echo url_for('/pages?url=about us&column=history'); ?>">History</a>
          <a class="dropdown-item" href="<?php echo url_for('/pages?url=about us&column=profile'); ?>">School Profile</a>
          <a class="dropdown-item" href="<?php echo url_for('/pages?url=about us&column=management'); ?>">School Management</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academic Programs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php selectProgram($con); ?>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/pages?url=Facilities') ?>">Facilities</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/pages?url=Alumni') ?>">JFSS</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Download
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Career</a>
      </li>
     
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
  </nav>
</section>
<!-- navigation end -->