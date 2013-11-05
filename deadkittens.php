<div class="col-md-12">
	<div class="panel panel-default bbqk-panel">
		<div class="panel-heading">
			<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
		</div>
		<div class="panel-body">
			(This page isn't 100% final, changes will be made!)
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php 
			$dkittens = get_field('dead_kittens');
			$returnValue=0;
			$passedValue=-1;
			while($returnValue!=$passedValue){
				$passedValue=$returnValue;
				$returnValue=showCol($dkittens,$passedValue);	
			}
			function showCol($dkittens,$starting){
				$third=ceil(count($dkittens)/3);
				$count=0;
				for($i=$starting;$i<$third+$starting && $i<count($dkittens);$i++){
					echo '<div class="col-md-4" class="bbqk-textAlignCenter">';
						if($dkittens[$i]['founding_member?'] === true){
							echo '<div class="panel panel-default bbqk-panel bbqk-panel-gold">';
						}else{
							echo '<div class="panel panel-default bbqk-panel">';	
						}
							echo '<div class="panel-heading">'
								 ,'<h3 class="bbqk-pageTitle">'.$dkittens[$i]['name'].'</h3><p class="bbqk-pageSlogan">The '.$dkittens[$i]['kitten_name'].' Kitten</p>'
							 ,'</div>'
							 ,'<div class="panel-body bbqk-text-align-left">'
								 ,'<div class="row">'
									 ,'<div class="col-md-4">'
										 ,'<img src="'.$dkittens[$i]['picture'].'" class="img-responsive"/>'
									 ,'</div>'
									 ,'<div class="col-md-8">'
										 ,'<h4>Years in Kitten:</h4>'.$dkittens[$i]['starting_semester'].' '.$dkittens[$i]['starting_year'].' to '.$dkittens[$i]['ending_semester'].' '.$dkittens[$i]['ending_year']
										 ,'<h4>Mode of Departure:</h4>'.$dkittens[$i]['mode_of_departure']	
										 ,'<h4>Last Seen:</h4>'.$dkittens[$i]['last_seen']	
									 ,'</div>'
								 ,'</div>'
							 ,'</div>'
						 ,'</div>'
					 ,'</div>';
					$count++;
				}
				return $count;
			}

			/*
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
			*/
		?>
	</div>
</div>	