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
					switch(get_post()->post_title){
						case "Shows":
							get_template_part("shows");
							break;
						case "Kast":
							get_template_part("allkast");
							break;
						case "Dead Kittens":
							get_template_part("deadkittens");
							break;
						default;
							get_template_part("stdpage");
							break;
					}
				}
			}
		}
	echo '</div>';
echo '</div>';
get_footer();
?>