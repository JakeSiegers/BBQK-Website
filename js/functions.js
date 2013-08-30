
var bbqk_bgHeight=0;

window.onload = function() {
	bbqk_updateBG();

	$(window).resize(function() {
		console.log("resized");
		bbqk_updateBG();
	});

	//setInterval(function() {
    //	bbqk_paralaxCatUpdate();
	//}, 0);

	$('body').mousemove(function(e){
		bbqk_bgHeight=e.pageY
		bbqk_paralaxCatUpdate();
	});

};



function bbqk_paralaxCatUpdate(){
	$('.barbequeLogo').css("background-position", function(){
    	return "0px "+(0-(bbqk_bgHeight/25))+"px";
	});
}

function bbqk_updateBG(){
	//$('body').css("min-height", function(){ 
    //	return $(window).height();
	//});
	$('.barbequeLogo').css("background-size", function(){ 
    	return $(window).height()+"px "+$(window).height()+"px";
	});
	
	console.log($('#video_background').width());
	console.log($(window).width());

	var newVideoSize = bbqk_getNewSize($(window).width(),$(window).height(), $('#video_background').width(),$('#video_background').height());
	$('#video_background').width(newVideoSize.width).height(newVideoSize.height);
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
