<div class="col-md-12">
	<div class="panel panel-default bbqk-panel">
		<div class="panel-heading">
			<h3 class="bbqk-pageTitle"><?php the_title(); ?></h3>
			<p class="bbqk-pageSlogan">In rememberance of the kittens that have come before us as well as ways to get in touch with them.</p>
		</div>
		<!--<div class="panel-body">
			<p>If you're missing from this page, and you belong here, expect to be hounded soon.</p>
			<p>Are you a *really* dead kitten, and you don't like the fact your picture is super small and blurry? Send me a better one! Try to keep the picture from the time period that you were a kitten. Meow!</p>
			<p>THIS PAGE ISN'T DONE! I've hidden the descriptions of all the dead kittens for now, until I can find a super elegent way to show them!</p>
		</div>-->
	</div>
</div>
<div class="row">
	<div class="col-md-12 ">
		<?php
			//This is my magic to generate the dead kittens page. It could be more efficient. 
			$sizes = array(
				'visible-xs' =>  array(2,6)//number of rows to show, column size
				,'visible-sm' => array(3,4)
				,'visible-md' => array(4,3)
				,'visible-lg' => array(4,3)
			);
			foreach($sizes as $class=>$size){
				$dkittens = get_field('dead_kittens');
				$deadKittenArray = array();

				for($i=0;$i<$size[0];$i++){
					$deadKittenArray[$i]=array();
				}

				for($i=0;$i<count($dkittens);$i+=$size[0]){
					for($j=0;$j<$size[0];$j++){
						if(isset($dkittens[$i+$j])){
							$deadKittenArray[$j][]=$dkittens[$i+$j];
						}
					}
				}

				foreach($deadKittenArray as $deadKittenCol){
					echo '<div class="col-xs-'.$size[1].' '.$class.'">';
					foreach ($deadKittenCol as $dkitten){
							echo '<div class="panel panel-default bbqk-panel bbqk-dead-kitten';
							if($dkitten['founding_member?'] === true){
								echo ' bbqk-panel-gold ';
							}
							echo '" name="'.$dkitten['name'].'" kitten="'.$dkitten['kitten_name'].'" picture="'.$dkitten['picture'].'" years="'.$dkitten['starting_semester'].' '.$dkitten['starting_year'].' to '.$dkitten['ending_semester'].' '.$dkitten['ending_year'].'" depart="'.$dkitten['mode_of_departure'].'" last="'.$dkitten['last_seen'].'">';
							echo '<div class="panel-heading">'
								 ,'<h4 class="bbqk-pageTitle visible-xs">'.$dkitten['name'].'</h4>'
								 ,'<h3 class="bbqk-pageTitle hidden-xs">'.$dkitten['name'].'</h3>'
								 ,'<p class="bbqk-pageSlogan">The '.$dkitten['kitten_name'].' Kitten</p>'
							 ,'</div>'
							 ,'<div class="panel-body bbqk-textAlignCenter">'
							 	,'<img src="'.$dkitten['picture'].'" class="img-responsive" style="display:inline;"/>'
							 ,'</div>';
							if($dkitten['founding_member?'] === true){
								echo '<center><div class="non-semantic-protector"> <h1 class="ribbon"><strong class="ribbon-content">Founding Member</strong></h1></div></center>';
							}
						 echo '</div>';
					}
					echo '</div>';
				}
			}
		?>
	</div>
</div>

<div class="modal fade bbqk-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:white; margin-top:0px; float:left">&times;</button>
				<h3 class="bbqk-pageTitle" id="bbqk-name-modal">Jake Siegers</h3><p class="bbqk-pageSlogan">The <span id="bbqk-kitten-modal"></span> Kitten</p>
			</div>
			<div class="modal-body bbqk-textAlignCenter">
				<div class="row">
					<div class="col-md-4">
						<img src="#" class="img-responsive" style="display:inline; margin-top:10px;" id="bbqk-picture-modal"/>
					</div>
					<div class="col-md-8 bbqk-textAlignLeft">
						<h4>Years in Kitten:</h4>
						<span id="bbqk-years-modal"></span>
						<h4>Mode of Departure:</h4>
						<span id="bbqk-depart-modal"></span>
						<h4>Last Seen:</h4>
						<span id="bbqk-last-modal"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


