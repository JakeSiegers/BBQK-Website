<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				echo get_bloginfo('name');
				if(is_page()){
					echo " - ".get_the_title();
				}
			?>
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width user-scalable=0">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.ico" />
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,400italic,500,500italic,900italic,700,700italic' rel='stylesheet' type='text/css'>
		<!--<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel='stylesheet' type='text/css'>
    	<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
    	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>-->
		<!--<script>
			function setBackgroundFallback(){
				$('#bbqk-videoBG').remove();
				//$('body').css('background-image',"url(<?php echo get_template_directory_uri(); ?>/img/fallback.png)");
			}
		</script>-->

		<?php
		function setUpSizeAdjuster($text,$arrayOfSizes){
			foreach($arrayOfSizes as $sizeHead => $sizeFoot){
				echo $sizeHead.$text.$sizeFoot;
			}
		}

		wp_head();

		?>

	</head>
<body onunload="">

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
					 'visible-xs' => array(50,100,-40,-45) //margin of title, width of logo, top, left;
					,'visible-sm' => array(80,100,-40,-20)
					,'visible-md' => array(80,100,-40,-20)
					,'visible-lg' => array(80,100,-40,-20)
				);
				foreach($sizes as $size=>$spacing){
					$extraSmallSizeBonus="";
					if($size == "visible-xs"){
						$extraSmallSizeBonus="font-size:13px;";
					}
					echo
						 '<a href="'.get_home_url().'"><img src="'.get_template_directory_uri().'/img/icon.png" style="width:'.$spacing[1].'px; height:'.$spacing[1].'px; top:'.$spacing[2].'px; left:'.$spacing[3].'px;" class="bbqk-navLogo '.$size.'" /></a>'
						,'<a class="navbar-brand '.$size.'" href="'.get_home_url().'">'
							,'<div style="margin-left:'.$spacing[0].'px; '.$extraSmallSizeBonus.'">Barbeque Kitten Improv</div>'
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
								foreach($children as $child){
									if($child->ID == get_post()->ID){
											$active ="active";
									}
								}
								echo '<li class="dropdown '.$active.'">';
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
