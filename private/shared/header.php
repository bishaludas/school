<?php $page_title = isset($title)? $title : 'Bishal'; ?>
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