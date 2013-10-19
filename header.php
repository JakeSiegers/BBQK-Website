<!DOCTYPE html>
<html>
	<head>
		<title>Barbeque Kitten!
			<?php 
				if(is_page()){
					echo " - ".get_the_title();
				}
			?>
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width user-scalable=0">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.ico" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet' type='text/css'>
		<script>
			function setBackgroundFallback(){
				$('#bbqk-videoBG').remove();
				//$('body').css('background-image',"url(<?php echo get_template_directory_uri(); ?>/img/fallback.png)");
			}
		</script>
		<!--<script src="<?php echo get_template_directory_uri(); ?>/js/video.js"></script>-->

		<?php wp_head(); ?>
	</head>
<body onunload="">
	<?php
		if(get_field('background_video_mp4') !== FALSE && get_field('background_video_webm') !== FALSE){
			$bbqkmp4 = get_field('background_video_mp4');
			//$bbqkwebm = get_field('background_video_webm');
		}else{
			$bbqkmp4 = get_template_directory_uri().'/video/homepage.mp4';
			//$bbqkwebm = get_template_directory_uri().'/video/homepage.webm';
		}
	?>
	<div class="bbqk-videoWrap" id="bbqk-videoWrap">
		<center>
			<video class="bbqk-videoBG" id="bbqk-videoBG" autoplay loop>
				<source src="<?php echo $bbqkmp4; ?>" type='video/mp4' />
				<!--<source src="<?php echo $bbqkwebm; ?>" type='video/webm' />-->
		  	</video>
	  	</center>	
  	</div>
  	
  	<div class="bbqk-loader" id="bbqk-loader">
		<img src="<?php echo get_template_directory_uri(); ?>/img/catLoader.gif"/>
		<br />
		Loading...
	</div>

	<!--<div class="barbequeLogo">-->
	<div class="navbar-wrapper" style="position: relative;">
	<div class="container bbqk-navContainer">
		<div class="navbar navbar-inverse navbar-static-top bbqk-nav" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php

				$sizes = array(
					 'visible-xs' => array(40,100,-40,-45) //margin of title, width of logo, top, left;
					,'visible-sm' => array(80,100,-40,-20)
					,'visible-md' => array(80,100,-40,-20)
					,'visible-lg' => array(80,100,-40,-20)
				);
				foreach($sizes as $size=>$spacing){
					echo
						 '<a href="'.get_home_url().'"><img src="'.get_template_directory_uri().'/img/icon.png" style="width:'.$spacing[1].'px; height:'.$spacing[1].'px; top:'.$spacing[2].'px; left:'.$spacing[3].'px;" class="bbqk-navLogo '.$size.'" /></a>'
						,'<a class="navbar-brand '.$size.'" href="'.get_home_url().'">'							
							,'<div style="margin-left:'.$spacing[0].'px;">Barbeque Kitten Improv</div>'
						,'</a>';
				}
				?>
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<?php 
						$pages = get_pages(array('parent' => 0,'sort_column' => 'menu_order')); 
						foreach($pages as $page){
							$active = "";
							$children = $children = get_pages(array('child_of' => $page->ID));
							if(get_post()->ID == $page->ID){
								$active = "active";
							}
							//var_dump($children);
							if(count($children)>0){
								echo '<li class="dropdown">';
								echo '<a class="dropdown-toggle" data-toggle="dropdown">'.$page->post_title.' <b class="caret"></b></a>';
								echo '<ul class="dropdown-menu bbqk-dropdown">';
								echo '<li>';
								echo '<a href="'.get_permalink($page->ID).'">';
								if($page->post_name == "kast"){
									echo 'View All Members';
									echo '</a>';
									echo '</li>';
									echo '<li role="presentation" class="divider bbqk-divider"></li>';	
								}else{
									//var_dump($page);
									echo 'View ';
									echo $page->post_title;
									echo '</a>';
									echo '</li>';
								}
								foreach($children as $child){
									echo '<li>';
									echo '<a href="'.get_permalink($child->ID).'">';
									echo $child->post_title;
									echo '</a>';
									echo '</li>';
								}
								echo '</ul>';
								echo '</li>';

							}else{
								echo '<li class="'.$active.'">';
								echo '<a href="'.get_permalink($page->ID).'">';
								echo $page->post_title;
								echo '</a>';
								echo '</li>';	
							}	
						}
					?>
				</ul>
			</div>
			
		</div>
	</div>
	</div>
	
	