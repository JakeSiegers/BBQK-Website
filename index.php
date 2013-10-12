 <?php get_header(); ?> 

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
		
		<div class="container bbqk-homepageWrap">
			<div class="row">
				<div class="row">
					<div class="col-md-12">
						<div class="bbqk-logo bbqk-center" id="bbqk-logo">
							<img class="bbqk-center" src="<?php echo get_template_directory_uri(); ?>/img/lglogo.png" width="50%" style="margin-top:0px; margin-bottom:-60px;"/>
							<h1 class="bbqk-homeTitle"><?php echo get_bloginfo('name'); ?></h1>
							<p class="bbqk-homeSlogan"><?php echo get_bloginfo('description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	 <?php }else{ ?>
	 	<?php while ( have_posts() ) : the_post(); ?>
	 		<?php if(get_post(get_post()->post_parent)->post_title === "Kast"){ ?>
	 			<div class="container bbqk-pageWrap">
					<div class="row">
						<div class="col-md-3">
							<img class="img-responsive bbqk-headshot bbqk-center" src="<?php the_field('headshot');?>" />
						</div>
						<div class="col-md-9">
							<div class="well bbqk-pageContentHead">
								<h1 class="bbqk-pageTitle"><?php the_title(); ?></h1>
								<p class="bbqk-pageSlogan">The <?php the_field('kitten_name');?></p>
							</div>
							<div class="well bbqk-well">
								<h3>Education</h3><?php the_field('year_/_major');?>
								<h3>Years In Kitten</h3><?php the_field('years_in_kitten');?>
								<h3>Magical Abilities</h3><?php the_field('magical_abilities');?>
								<h3>Dominant Hand</h3><?php the_field('dominant_hand');?>
								<h3>Favorite Improv Game(s)</h3><?php the_field('favorite_improv_game');?>
								<h3>Other Activities</h3><?php the_field('clubs');?>
								<h3>None of the Above</h3><?php the_field('anything_else?');?>
							</div>
						</div>
					</div>
				</div>
	 		<?php }else{ ?>
			<div class="container bbqk-pageWrap">
					<div class="row">
						<div class="col-md-12">
							<div class="well bbqk-pageContentHead">
								<h1 class="bbqk-pageTitle"><?php the_title(); ?></h1>
							</div>
							<div class="well bbqk-well">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>	
		<?php endwhile; ?>
	<?php } ?>
<?php get_footer(); ?> 