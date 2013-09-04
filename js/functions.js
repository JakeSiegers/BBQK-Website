
var bbqk_bgHeight=0,
	bbqk_tiltCount=0;
	bbqk_changingPages=false;

window.onload = function() {
	bbqk_updateBG();

	$(window).resize(function() {
		//console.log("resized");
		bbqk_updateBG();
	});

	//setInterval(function() {
    //	bbqk_paralaxCatUpdate();
	//}, 0);

	setInterval(function(){
		bbqk_adjustLogoTilt();
	},0);

	/*
	$('body').mousemove(function(e){
		bbqk_bgHeight=e.pageY
		bbqk_paralaxCatUpdate();
	});
	*/

};

function bbqk_adjustLogoTilt(){
	//$('#bbqk-logo').stop();
	$('#bbqk-logo').css({ rotate: ((Math.sin(bbqk_tiltCount)*20)-10)+'deg' });
	bbqk_tiltCount+=(Math.PI/128);
	if(bbqk_tiltCount>(2*Math.PI)){
		bbqk_tiltCount=0;
	}
}

/*
function bbqk_paralaxCatUpdate(){
	$('.barbequeLogo').css("background-position", function(){
    	return "0px "+(0-(bbqk_bgHeight/25))+"px";
	});
}
*/

function bbqk_updateBG(){
	//$('body').css("min-height", function(){ 
    //	return $(window).height();
	//});
	$('.barbequeLogo').css("background-size", function(){ 
    	return $(window).height()+"px "+$(window).height()+"px";
	});

	console.log("adjusting logo");
	console.log(($(window).height()/2)-($('#bbqk-logo').height()/2)+"px");
	//$('#bbqk-logo').stop();
	$('#bbqk-logo').css("margin-top",($(window).height()/2)-($('#bbqk-logo').height()/2)+"px");
	
	//console.log($('#video_background').width());
	//console.log($(window).width());

	var newVideoSize = bbqk_getNewSize($(window).width(),$(window).height(), $('#video_background').width(),$('#video_background').height());
	$('#video_background').width(newVideoSize.width);
	//$('#video_background').height(newVideoSize.height);
	$('#video_background').css({"margin-left":"-"+($('#video_background').width()/2)+"px"})
}

function bbqk_getNewSize(boxWidth, boxHeight, imgWidth, imgHeight) {
    var ratio = imgHeight / imgWidth;
    imgWidth = boxWidth;
    imgHeight = boxWidth * ratio;
    
    if(imgHeight < boxHeight){
        imgHeight = boxHeight;
        imgWidth = imgHeight / ratio;
    }

    return {
        width: imgWidth,
        height: imgHeight
    };

}
