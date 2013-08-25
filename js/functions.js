
var bbqk_bgHeight=0;

window.onload = function() {
	bbqk_setBodyHeight() 

	$(window).resize(function() {
		bbqk_setBodyHeight();
	});

	//setInterval(function() {
    //	bbqk_adjustBG();
	//}, 0);

	$('body').mousemove(function(e){
		bbqk_bgHeight=e.pageY
		bbqk_adjustBG();
	});

};



function bbqk_adjustBG(){
	//console.log("adjusting");
	$('.barbequeLogo').css("background-position", function(){
		//bbqk_bgHeight+=0.1;
    	return "0px "+(0-(bbqk_bgHeight/25))+"px";
	});
}

function bbqk_setBodyHeight(){
	$('body').css("min-height", function(){ 
    	return $(window).height();
	});
	$('.barbequeLogo').css("background-size", function(){ 
    	return $(window).height();+"px "+$(window).height();+"px";
	});
	
}