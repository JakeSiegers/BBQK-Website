
	<div class="col-md-3">
		<img class="img-responsive bbqk-headshot bbqk-center" src="<?php the_field('headshot');?>" />
	</div>
	<div class="col-md-5">
		<div class="panel panel-default bbqk-panel">
			<div class="panel-heading">
				<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
				<p class="bbqk-pageSlogan">The <?php the_field('kitten_name');?> Kitten!</p>
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
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
