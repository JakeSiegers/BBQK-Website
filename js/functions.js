
var bbqk_bgHeight=0,
	bbqk_tiltCount=0;
	bbqk_changingPages=false,
	bbqk_logoTiltInterval=Math.PI/128,
	bbqk_twoPi=2*Math.PI;
	bbqk_movingLogo=true;

window.onload = function() {
	bbqk_updateBG();
	bbqk_showVideo();
	bbqk_showLogo();
	bbqk_showContent();

	$('a').bind('click', function(event){
		if($(this).hasClass('dropdown-toggle')){
			return;
		}
		event.preventDefault();
		var url = $(this).prop('href');
		bbqk_hideVideo();
		bbqk_hideLogo();
		bbqk_hideContent();
		window.setTimeout((function(){window.location=url;}),500);
	});
	
	$(window).resize(function() {
		//console.log("resized");
		bbqk_updateBG();
	});

	//setInterval(function() {
    //	bbqk_paralaxCatUpdate();
	//}, 0);

	/*
	//I've decided to remove the sine tilting. It just breaks too much in chrome, and other browsers.

	setInterval(function(){
		bbqk_adjustLogoTilt();
	},10);
	*/

	/*
	$('body').mousemove(function(e){
		bbqk_bgHeight=e.pageY
		bbqk_paralaxCatUpdate();
	});
	*/

};

function bbqk_showVideo(){
	$('#bbqk-videoWrap').animate({opacity:1},500);
}

function bbqk_showLogo(){
	bbqk_movingLogo=true;
	$('#bbqk-logo').transition({
		"margin-top":($(window).height()/2)-$('.bbqk-navContainer').height()-($('#bbqk-logo').height()/2)+"px"
		,opacity:1
	},1000);
	bbqk_movingLogo=false;
}

function bbqk_showContent(){
	$('.bbqk-pageContentHead').transition({
		opacity:0.9
		,'margin-top':'0px'
	},500);
	$('.bbqk-headshot').transition({
		opacity:1
	},500);
	$('.bbqk-well').transition({
		opacity:0.9
	},500);
}

function bbqk_hideContent(){
	$('.bbqk-pageContentHead').transition({
		opacity:0
		,'margin-top':'-100px'
	},500);
	$('.bbqk-headshot').transition({
		opacity:0
	},500);
	$('.bbqk-well').transition({
		opacity:0
	},500);
}

function bbqk_hideLogo(){
	bbqk_movingLogo=true;
	$('#bbqk-logo').transition({
		"margin-top":($(window).height())-$('.bbqk-navContainer').height()-($('#bbqk-logo').height()/2)+"px"
		,opacity:0
	},1000);
	bbqk_movingLogo=false;
}

function bbqk_hideVideo(){
	$('#bbqk-videoWrap').animate({opacity:0,},500);
}

function bbqk_adjustLogoTilt(){
	//$('#bbqk-logo').stop();
	$('#bbqk-logo').css({ rotate: ((Math.sin(bbqk_tiltCount)*20)-10)+'deg' });
	bbqk_tiltCount+=(bbqk_logoTiltInterval);
	if(bbqk_tiltCount>bbqk_twoPi){
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

	//console.log("adjusting logo");
	//console.log(($(window).height()/2)-($('#bbqk-logo').height()/2)+"px");
	//$('#bbqk-logo').stop();
	if(!bbqk_movingLogo){
		$('#bbqk-logo').css("margin-top",($(window).height()/2)-$('.bbqk-navContainer').height()-($('#bbqk-logo').height()/2)+"px");
	}

	//console.log($('#bbqk-videoBG').width());
	//console.log($(window).width());

	var newVideoSize = bbqk_getNewSize($(window).width(),$(window).height(), $('#bbqk-videoBG').width(),$('#bbqk-videoBG').height());
	$('#bbqk-videoBG').width(newVideoSize.width);

	$('#bbqk-videoWrap').width($(window).width());
	$('#bbqk-videoWrap').height($(window).height());
	
	$('#bbqk-videoBG').css({
        position: "relative",
        left: ($('#bbqk-videoBG').parent().width()/2) - ($('#bbqk-videoBG').width()/2)
    });

	//$('#bbqk-videoBG').height(newVideoSize.height);
	
	//$('#bbqk-videoBG').css({"margin-left":"-"+($('#bbqk-videoBG').width()/2)+"px"})
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
