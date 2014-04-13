<div class="col-md-8">
	<div class="panel panel-default bbqk-panel">
			<div class="panel-heading">
				<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
				<p class="bbqk-pageSlogan"><?php echo the_field('shows_slogan'); ?></p>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table bbqk-table">
						<tr>
							<th>
								What?
							</th>
							<th>
								Where?
							</th>
							<th>
								When?
							</th>
							<th>
								Facebook Event
							</th>
						</tr>
						<?php
							$rows = get_field('show_dates');
							if($rows){
								foreach($rows as $row){
									if(!$row['hide_this_date']){
										echo '<tr>';
										echo '<td>'.$row['show_title'].'</td><td>'.$row['location'].'</td><td>'.date('l F jS, Y',strtotime($row['date'])).' at '.$row['times'].'</td><td>'.($row['facebook_event']!==''?'<a href="'.$row['facebook_event'].'" target="_blank">Click Here!</a>':'No Event Specified').'</td>';
										echo '</tr>';
									}
								}
							}
						?>
					</table>
				</div>
			</div>
		</div>
</div>
<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>