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
		
		
		<div class="col-md-9 bbqk-textAlignCenter">
			
<div id="bbqk-carousel" class="carousel slide bbqk-carousel">
  <!-- Indicators -->
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
          <h2>We are BBQ Kitten Improv Troupe</h2>
          <p><a class="btn btn-large btn-primary" href="#">Say Hello!</a>
        </p></div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/900/abstract">
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide Two</h1>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/900/city">
      <div class="container">
        <div class="carousel-caption">
          <h1>Slide Three</h1>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#bbqk-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#bbqk-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->

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
	 		<?php if(get_post(get_post()->post_parent)->post_title === "Kast"){ ?>
	 		
				<div class="col-md-3">
					<img class="img-responsive bbqk-headshot bbqk-center" src="<?php the_field('headshot');?>" />
				</div>
				<div class="col-md-6">
					<div class="panel panel-default bbqk-panel">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<h1><?php the_title(); ?></h1>
						<p class="bbqk-pageSlogan">The <?php the_field('kitten_name');?></p>
					</div>
					<div class="panel-body">
						<h3>Education</h3><?php the_field('year_/_major');?>
						<h3>Years In Kitten</h3><?php the_field('years_in_kitten');?>
						<h3>Magical Abilities</h3><?php the_field('magical_abilities');?>
						<h3>Dominant Hand</h3><?php the_field('dominant_hand');?>
						<h3>Favorite Improv Game(s)</h3><?php the_field('favorite_improv_game');?>
						<h3>Other Activities</h3><?php the_field('clubs');?>
						<h3>None of the Above</h3><?php the_field('anything_else?');?>
					</div>
					</div>
					<!--
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
					-->
			
				</div>
	 		<?php }else{ ?>

						<div class="col-md-9">
							<div class="well bbqk-pageContentHead">
								<h1 class="bbqk-pageTitle"><?php the_title(); ?></h1>
							</div>
							<div class="well bbqk-well">
								<?php the_content(); ?>
							</div>
						</div>
			
			<?php } ?>	
		<?php endwhile; ?>
	<?php } ?>
		<div class="col-md-3">
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
							<td>TBD</td>
						</tr>
						<tr>
							<td>December 10th</td>
							<td>8pm Only</td>
							<td>TBD</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="panel panel-default bbqk-panel">
				<div class="panel-heading">
					Twitter?
				</div>
				<div class="panel-body">
					Peyton said something about getting one.
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?> 