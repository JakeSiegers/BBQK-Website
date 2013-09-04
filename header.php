<!DOCTYPE html>
<html>
	<head>
		<title>Barbeque Kitten!</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet' type='text/css'>

		<!--<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>-->

		<?php wp_head(); ?>
	</head>
<body onunload="">
	<center>
		<video id="video_background" autoplay loop>
   		<source src="<?php echo get_template_directory_uri(); ?>/video/homepage.mp4" type='video/mp4' />
    	<source src="<?php echo get_template_directory_uri(); ?>/video/homepage.webm" type='video/webm' />
   		<!--<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />-->
   		<img src="<?php echo get_template_directory_uri(); ?>/img/rays_fallback.png" title="Your browser does not support the <video> tag"></video>
  	</video>	
  	</center>
	<!--<div class="barbequeLogo">-->
	
	<header class="navbar navbar-default navbar-inverse navbar-fixed-top bbqk-nav" role="navigation">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Barbeque Kitten</a>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<?php wp_list_pages(array('title_li' => '', 'sort_column' => 'menu_order')); ?>
			</ul>
		</div>
	</header>
	
	