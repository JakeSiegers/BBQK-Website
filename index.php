 <?php get_header(); ?> 
 <div class="container bbqk-pageWrap">
	<div class="row">
	<?php if(is_front_page()){ ?>
	 	<!--
	 	<div class="jumbotron bbqk-jumbo">
			<div class="container">
		  		<h1><?php echo get_bloginfo('name'); ?></h1>
				<p><?php echo get_bloginfo('description'); ?></p>
				<p>
					<a href="#" class="btn btn-danger btn-lg" >Meet The Kast!</a>
					<a href="#" class="btn btn-danger btn-lg" >View Upcoming Shows!</a>
				</p>
				<p><span class="label label-danger">New Website Coming Soon - Cool Yo Jets!</span></p>
				<div class="row">
					<div class="col-md-6 bbqk-scheduleTable">
						<table class="table table-bordered table-condensed">
							<tr>
							  	<th colspan="4">Fall 2013 Show Dates</th>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

						</table>
					</div>
				</div>
		  	</div>
		</div>
		-->
	
		<div class="col-md-8 bbqk-textAlignCenter">
			<div id="bbqk-carousel" class="carousel slide bbqk-carousel">
				<ol class="carousel-indicators">
					<li data-target="#bbqk-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#bbqk-carousel" data-slide-to="1"></li>
					<li data-target="#bbqk-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.png">
						<div class="container">
							<div class="carousel-caption">
								<h3>We are BBQ Kitten Improv Troupe!!</h3>
								<p><a class="btn btn-large bbqk-button " href="<?php echo get_bloginfo('url'); ?>/kast">Say Hello!</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide2.png">
						<div class="container">
							<div class="carousel-caption">
								<h3>"Anyone Can Come, Anyone Can Play"</h3>
								<p>Even this DINGUS - So, come out and see us every wendesday night at 10:30 in front of Bradley Hall!</p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.png">
						<div class="container">
							<div class="carousel-caption">
								<h2>This Is Brad.</h2>
								<p>I'm a tad ashamed.</p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#bbqk-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#bbqk-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<!--
			<div class="bbqk-logo" id="bbqk-logo">
				<img class="bbqk-center" src="<?php echo get_template_directory_uri(); ?>/img/lglogo.png" width="60%" style="margin-top:0px; margin-bottom:-60px;"/>
				<h1 class="bbqk-homeTitle"><?php echo get_bloginfo('name'); ?></h1>
				<p class="bbqk-homeSlogan"><?php echo get_bloginfo('description'); ?></p>
			</div>
			-->
		</div>

	 <?php }else{ ?>
	 	<?php while ( have_posts() ) : the_post(); ?>
	 		<?php if(get_post()->post_title !== "Kast" && get_post(get_post()->post_parent)->post_title === "Kast"){ ?>
				<div class="col-md-3">
					<img class="img-responsive bbqk-headshot bbqk-center" src="<?php the_field('headshot');?>" />
				</div>
				<div class="col-md-5">
					<div class="panel panel-default bbqk-panel">
						<div class="panel-heading">
							<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
							<p class="bbqk-pageSlogan">The <?php the_field('kitten_name');?></p>
						</div>
						<div class="panel-body">
							<h4>Education</h4><?php the_field('year_/_major');?>
							<h4>Years In Kitten</h4><?php the_field('years_in_kitten');?>
							<h4>Magical Abilities</h4><?php the_field('magical_abilities');?>
							<h4>Dominant Hand</h4><?php the_field('dominant_hand');?>
							<h4>Favorite Improv Game(s)</h4><?php the_field('favorite_improv_game');?>
							<h4>Other Activities</h4><?php the_field('clubs');?>
							<h4>None of the Above</h4><?php the_field('anything_else?');?>
						</div>
					</div>
				</div>
	 		<?php }else{ ?>
	 			<?php if(is_page("Kast")){?>
					<div class="col-md-8">
							<?php
								foreach(get_pages(array('child_of' => get_post()->ID)) as $kat){
									
									echo '<a href="'.get_permalink($kat->ID).'"><div class="col-md-4" class="bbqk-textAlignCenter">';
									echo '<div class="panel panel-default bbqk-panel">';
									echo '<div class="panel-heading">';
									echo $kat->post_title;
									echo '</div>';
									echo '<div class="panel-body">';
									echo '<img src="'.get_field("headshot", $kat->ID).'" class="img-responsive" />';	
									echo '</div>';
									echo '</div>';
									echo '</div></a>';
									
								}
							?>
					</div>
								
							
					
				<?php }else{ ?>
					<div class="col-md-8">
						<div class="panel panel-default bbqk-panel">
							<div class="panel-heading">
								<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
							</div>
							<div class="panel-body">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>	
		<?php endwhile; ?>
	<?php } ?>
		<div class="col-md-4">
			<div class="panel panel-default bbqk-panel">
				<div class="panel-heading">
					Welcome!
				</div>
				<div class="panel-body">
					This is the new BBQ Kitten website! It's still a work in progress, so if you see any weird bugs, or something doesn't work for you, <a href="http://jakesiegers.com/contact" target="_blank">let me know!</a>
				</div>
			</div>
			<div class="panel panel-default bbqk-panel">
				<div class="panel-heading">
					Upcoming Shows (Fall 2013)
				</div>
				<div class="panel-body">
					<table class="table bbqk-table">
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Location</th>
						</tr>
						<tr>
							<td>September 14th</td>
							<td>7:30 & 10pm</td>
							<td>Bradley Hall (150)</td>
						</tr>
						<tr>
							<td>October 19th</td>
							<td>7:30 & 10pm</td>
							<td>Hartman Center</td>
						</tr>
						<tr>
							<td>November 9th</td>
							<td>7:30 & 10pm</td>
							<td>Bradley Hall (150)</td>
						</tr>
						<tr>
							<td>December 10th</td>
							<td>8pm Only</td>
							<td>Bradley Hall (150)</td>
						</tr>
					</table>
				</div>
			</div>
			<!--<div class="panel panel-default bbqk-panel">
				<div class="panel-heading">
					Twitter?
				</div>
				<div class="panel-body">
					Peyton said something about getting one.
				</div>
			</div>-->
		</div>
	</div>
</div>
<?php get_footer(); ?> 