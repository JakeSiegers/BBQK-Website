<?php /*
		<script>
			
			var bbqk_totalSlides = 4;
			var bbqk_currentSlide=1;
			var bbqk_previousSlide = bbqk_totalSlides;
			$(function(){
				setInterval(bbqk_advanceSlide,5000);
				bbqk_advanceSlide();
			});

			function bbqk_advanceSlide(){

				$("#bbqk-slideShowImg"+bbqk_currentSlide).animate({
					opacity:1
				},800);
				bbqk_previousSlide = bbqk_currentSlide - 1;
				if(bbqk_previousSlide < 1){
					bbqk_previousSlide=bbqk_totalSlides;
				}
				$("#bbqk-slideShowImg"+bbqk_previousSlide).animate({
					opacity:0
				},800);

				bbqk_currentSlide++;
				if(bbqk_currentSlide>bbqk_totalSlides){
					bbqk_currentSlide=1;
				}
			}
			
		</script>
		<style>
			body,html,ul{
				padding:0px;
				margin:0px;
			}
		</style>

 		<ul class="bbqk-slideShow">
			<li>
				<span id="bbqk-slideShowImg1"></span>
			</li>
			<li>
				<span id="bbqk-slideShowImg2"></span>
			</li>
			<li>
				<span id="bbqk-slideShowImg3"></span>
			</li>
			<li>
				<span id="bbqk-slideShowImg4"></span>
			</li>
		</ul>



<div class="col-md-12 bbqk-textAlignCenter">

		<div class="bbqk-sliderTextBox">
			<?php
			
				setUpSizeAdjuster('WE ARE BBQ KITTEN IMPROV!',array(
					 '<div class="visible-lg" style="margin 50px; font-size:70px; font-weight:900; background:rgba(0,0,0,0.5); padding:10px;">' => '</div>'
					,'<div class="visible-md" style="margin 50px; font-size:50px; font-weight:900; background:rgba(0,0,0,0.5); padding:10px;">' => '</div>'
					,'<div class="visible-sm" style="margin 50px; font-size:40px; font-weight:900; background:rgba(0,0,0,0.5); padding:10px;">' => '</div>'
					,'<div class="visible-xs" style="margin 40px; font-size:20px; font-weight:900; background:rgba(0,0,0,0.5); padding:10px;">' => '</div>'

				));
				setUpSizeAdjuster('Bradley University\'s gourmet improv comedy and sketch troupe~',array(
					 '<div class="visible-lg" style="margin 50px; font-weight:400; font-size:30px; background:rgba(0,0,0,0.8); padding:10px;">' => '</div>'
					,'<div class="visible-md" style="margin 50px; font-weight:400; font-size:20px; background:rgba(0,0,0,0.8); padding:10px;">' => '</div>'
					,'<div class="visible-sm" style="margi50px; font-weight:400; font-size:15px; background:rgba(0,0,0,0.8); padding:10px;">' => '</div>'
					,'<div class="visible-xs" style="margin 50px; font-weight:400; font-size:10px; background:rgba(0,0,0,0.8); padding:10px;">' => '<br />(Hello Smartphone! ^.^)</div>'

				));

			?>
		</div>
</div>
*/ ?>
<div class="bbqk-slideShow">
<?php putRevSlider( "homepage" ) ?>
</div>




