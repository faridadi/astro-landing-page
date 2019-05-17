<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Astro</title>
	<link rel="icon" href="<?php echo  base_url('public/')?>img/astro-logo.png" type="image/png">
	<link rel="shortcut icon" href="<?php echo  base_url('public/')?>img/astro-logo.png" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
	
	<link href="<?php echo  base_url('public/')?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link href="<?php echo  base_url('public/')?>css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo  base_url('public/')?>css/animate.css" rel="stylesheet" type="text/css">
</head>

<body >
  	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" 
		style="position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%; 
		min-height: 100%;
		filter:brightness(60%);">
    <source src="<?php echo  base_url('public/')?>video/cloud.MP4" type="video/mp4">
  </video>
	<div class="header" id="header">
		<!--header-start-->
		<div class="container" style="margin:auto;" >
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="<?php echo  base_url('public/')?>img/astro-logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To Cloud Astro Technology</h1>

			<ul class="we-create animated fadeInUp delay-1s">
				<li style="color:white;">We are a digital agency that loves crafting beautiful websites.</li>
			</ul>
			
			<div class="landing-menu">
			<a class="btn btn-outline-light btn-lg animated fadeInUp delay-1s servicelink" href="#" role="button" style="margin: 4%; margin-top:0%;">About Us</a>
			<a class="btn btn-outline-light btn-lg animated fadeInUp delay-1s servicelink" href="#" role="button" style="margin: 4%; margin-top:0%;">Home</a>
			<a class="btn btn-outline-light btn-lg animated fadeInUp delay-1s servicelink" href="#" role="button" style="margin: 4%; margin-top:0%;">Portofolio</a>
			<a class="btn btn-outline-light btn-lg animated fadeInUp delay-1s servicelink" href="#" role="button" style="margin: 4%; margin-top:0%;">News</a>
			</div>	
		</div>
	</div>
</body>

</html>
