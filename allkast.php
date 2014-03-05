<div class="row">
	<div class="col-md-12 ">
	<?php
		/*foreach(get_pages(array('child_of' => get_post()->ID)) as $kat){
			
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

			$sizes = array(
				'visible-xs' =>  array(2,6)//number of rows to show, column size
				,'visible-sm' => array(3,4)
				,'visible-md' => array(4,3)
				,'visible-lg' => array(4,3)
			);
			foreach($sizes as $class=>$size){
			$kittens = get_pages(array('child_of' => get_post()->ID));
			$kittenArray = array();

			for($i=0;$i<$size[0];$i++){
				$kittenArray[$i]=array();
			}

			for($i=0;$i<count($kittens);$i+=$size[0]){
				for($j=0;$j<$size[0];$j++){
					if(isset($kittens[$i+$j])){
						$kittenArray[$j][]=$kittens[$i+$j];
					}
				}
			}

			foreach($kittenArray as $kittenCol){
				echo '<div class="col-xs-'.$size[1].' '.$class.'">';
				foreach ($kittenCol as $kitten){
						echo '<a href="'.get_permalink($kitten->ID).'"><div class="bbqk-textAlignCenter">'
							,'<div class="panel panel-default bbqk-panel bbqk-kastMember">'
							,'<div class="panel-heading">'
							,'<h4 class="bbqk-pageTitle visible-xs">'.$kitten->post_title.'</h4>'
							,'<h3 class="bbqk-pageTitle hidden-xs">'.$kitten->post_title.'</h3>'
							,'<p class="bbqk-pageSlogan">The '.get_field("kitten_name", $kitten->ID).' Kitten</p>'
							,'</div>'
							,'<div class="panel-body">'
							,'<img src="'.get_field("headshot", $kitten->ID).'" class="img-responsive" />'	
							,'</div>'
							,'</div>'
							,'</div></a>';
						/*
						echo '<div class="panel panel-default bbqk-panel bbqk-dead-kitten';
						if($kitten['founding_member?'] === true){
							echo ' bbqk-panel-gold ';
						}
						echo '" name="'.$kitten['name'].'" kitten="'.$kitten['kitten_name'].'" picture="'.$kitten['picture'].'" years="'.$kitten['starting_semester'].' '.$kitten['starting_year'].' to '.$kitten['ending_semester'].' '.$kitten['ending_year'].'" depart="'.$kitten['mode_of_departure'].'" last="'.$kitten['last_seen'].'">';

						echo '<div class="panel-heading">'
							 ,'<h4 class="bbqk-pageTitle visible-xs">'.$kitten['name'].'</h4>'
							 ,'<h3 class="bbqk-pageTitle hidden-xs">'.$kitten['name'].'</h3>'
							 ,'<p class="bbqk-pageSlogan">The '.$kitten['kitten_name'].' Kitten</p>'
						 ,'</div>'
						 ,'<div class="panel-body bbqk-textAlignCenter">'
						 	,'<img src="'.$kitten['picture'].'" class="img-responsive" style="display:inline;"/>'
						 ,'</div>'
					 ,'</div>';
					 */
				}
				echo '</div>';
			}
		}
	?>
</div>
</div>