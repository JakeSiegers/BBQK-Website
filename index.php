<?php 
get_header(); 
echo '<div class="container bbqk-pageWrap">';
	echo '<div class="row">';
		if(is_front_page()){
			get_template_part("homepage");
		}else{
			while(have_posts()){ 
				the_post();
				if(get_post()->post_title !== "Kast" && get_post(get_post()->post_parent)->post_title === "Kast"){
					get_template_part("kastmember");
				}else{
					if(is_page("Kast")){
						get_template_part("allkast");	
					}else if(is_page("Dead Kittens")){
						get_template_part("deadkittens");
					}else{
						get_template_part("stdpage");	
					}
				}	
			}
		}
	echo '</div>';
echo '</div>';
get_footer(); 
?> 