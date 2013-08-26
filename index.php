 <?php get_header(); ?> 

	<?php if(is_front_page()){ ?>
	 	<div class="jumbotron bbqk-jumbo">
			<div class="container">
		  		<h1><?php echo get_bloginfo('name'); ?></h1>
				<p><?php echo get_bloginfo('description'); ?></p>
				<!--<p>
					<a href="#" class="btn btn-danger btn-lg" >Meet The Kast!</a>
					<a href="#" class="btn btn-danger btn-lg" >View Upcoming Shows!</a>
				</p>-->
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
	 <?php }else{ ?>
	 	<?php while ( have_posts() ) : the_post(); ?>
			<div class="container bbqk-pageWrap">
				<h2 class="bbqk-pageTitle"><?php the_title(); ?></h2>
				<div class="well"><?php the_content(); ?></div>
			</div>
				
						
		<?php endwhile; ?>
	<?php } ?>
			
<?php get_footer(); ?> 