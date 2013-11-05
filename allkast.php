<div class="col-md-12">
	<?php
		foreach(get_pages(array('child_of' => get_post()->ID)) as $kat){
			
			echo '<a href="'.get_permalink($kat->ID).'"><div class="col-md-3" class="bbqk-textAlignCenter">';
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