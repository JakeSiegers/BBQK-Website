<!DOCTYPE html>
<html>
	<head>
		<title>Barbeque Kitten!</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width">

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		<link href='<?php echo get_template_directory_uri(); ?>/style.css' rel='stylesheet' type='text/css'>


		<?php wp_head(); ?>
	</head>
<body onunload="">
	<div class="barbequeLogo">

	<header class="navbar navbar-default navbar-inverse navbar-fixed-top bbqk-nav" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Barbeque Kitten</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<?php wp_list_pages(array('title_li' => '', 'sort_column' => 'menu_order')); ?>
				<!--<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Shows</a></li>
				<li><a href="#">Kast</a></li>
				<li><a href="#">Media</a></li>
				<li><a href="#">Joining Kitten</a></li>
				<li><a href="#">Dead Kittens</a></li>
				<li><a href="#">History</a></li>-->
			</ul>
		</div><!-- /.navbar-collapse -->
	</header>
	