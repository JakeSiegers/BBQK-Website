<!DOCTYPE html>
<html>
	<head>
		<title>Barbeque Kitten!</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		<link href='<?php echo get_template_directory_uri(); ?>/style.css' rel='stylesheet' type='text/css'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

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
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Shows</a></li>
				<li><a href="#">Kast</a></li>
				<li><a href="#">Media</a></li>
				<li><a href="#">Joining Kitten</a></li>
				<li><a href="#">Dead Kittens</a></li>
				<li><a href="#">History</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</header>
	

	<div class="jumbotron bbqk-jumbo">
		<div class="container">
	  		<h1>Barbeque Kitten</h1>
			<p>Bradley University's Improv Comedy Troupe</p>
			<p>
				<a href="#" class="btn btn-danger btn-lg" >Meet The Kast!</a>
				<a href="#" class="btn btn-danger btn-lg" >View Upcoming Shows!</a>
			</p>
	  	</div>
	</div>

	</div>
	<?php wp_footer(); ?>
</body>
</html>