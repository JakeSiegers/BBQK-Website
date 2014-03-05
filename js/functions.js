
var bbqk_bgHeight=0
	,bbqk_tiltCount=0
	,bbqk_changingPages=false
	,bbqk_logoTiltInterval=Math.PI/128
	,bbqk_twoPi=2*Math.PI;
//var isMobile;

$(function() {
	/*
	var myVid=document.createElement('video');
	var support=myVid.canPlayType("video/mp4");
	isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	if(isMobile || support == ""){ //make sure video is supported, AND you are not on mobile.
		setBackgroundFallback();
		//alert('No video support here!');
		//$('#bbqk-videoWrap').css('opacity',1);
		preloadFinished();
	}else{
		$('#bbqk-videoBG').css("display","inline");
		//console.log($('#bbqk-videoBG'))
		$('#bbqk-videoBG').onloadeddata  =preloadFinished();
	}*/
	preloadFinished();

	$(".bbqk-dead-kitten").bind('click', function(event){
			event.preventDefault();
			//console.log("clicked!");
			//console.log($(this));
			bbqk_loadDeadKitten($(this));
	});

	$(".bbqk-navLogo").bind('mouseover', function(event){
			$(this).addClass("bbqk-kittenLogoTwist");
	});
	$(".bbqk-navLogo").bind('mouseout', function(event){
			$(this).removeClass("bbqk-kittenLogoTwist");
	});

	$(".bbqk-dead-kitten").bind('mouseover', function(event){
			$('body').css("cursor", "pointer");
			$(this).addClass("bbqk-deadKittenHover");
	});
	$(".bbqk-dead-kitten").bind('mouseout', function(event){
			$('body').css("cursor", "auto");
			$(this).removeClass("bbqk-deadKittenHover");
	});

	$(".bbqk-kastMember").bind('mouseover', function(event){
			$('body').css("cursor", "pointer");
			$(this).addClass("bbqk-deadKittenHover");
	});
	$(".bbqk-kastMember").bind('mouseout', function(event){
			$('body').css("cursor", "auto");
			$(this).removeClass("bbqk-deadKittenHover");
	});
});

function preloadFinished(){

	/*$("#bbqk-carousel").owlCarousel({
		 slideSpeed			: 300
		,paginationSpeed 	: 400
		,singleItem			: true
		,autoPlay			: true
		,pagination 		: false
		,lazyLoad 			: true
		,transitionStyle	: "backSlide"
	});*/


	bbqk_hideLoader();
	//bbqk_updateBG();
	bbqk_showBackground();
	//bbqk_showLogo();
	bbqk_showContent();
	//$('.carousel').carousel();



	$('a:not(.bbqk-notme)').bind('click', function(event){
		if($(this).hasClass('dropdown-toggle') || $(this).hasClass('carousel-control')){
			return;
		}
		event.preventDefault();
		var url = $(this).prop('href');
		bbqk_showLoader();
		bbqk_hideBackground();
		//bbqk_hideLogo();
		bbqk_hideContent();
		window.setTimeout((function(){window.location=url;}),500);
	});

	//$(window).resize(function() {
	//	bbqk_updateBG();
	//});

};

function bbqk_showLoader(){
	$('#bbqk-loader').animate({
		opacity:1
	},500);
}

function bbqk_hideLoader(){
	$('#bbqk-loader').animate({
		opacity:0
	},500);
}

function bbqk_showBackground(){
	$('#bbqk-videoWrap').animate({opacity:1},500);
}

function bbqk_hideBackground(){
	$('#bbqk-videoWrap').animate({opacity:0,},500);
}

/*
function bbqk_showLogo(){
	$('#bbqk-logo').animate({
		//"margin-top":($(window).height()/2)-$('.bbqk-navContainer').height()-($('#bbqk-logo').height()/2)+"px"
		"margin-top":"0px"
		,opacity:1
	},1000);
}

function bbqk_hideLogo(){
	$('#bbqk-logo').animate({
		"margin-top":"100px"
		,opacity:0
	},1000);
}
*/

function bbqk_showContent(){
	$('.bbqk-panel:not(.bbqk-notme)').each(function(count) {
		//console.log(count);
		var currentWindow = $(this);
		currentWindow.animate({
				opacity:1
				,'margin-top':'0px'
		},500);
	});
	$('.bbqk-headshot').animate({
		opacity:1
		,'margin-top':'0px'
	},500);
	$('.bbqk-carousel').animate({
		opacity:1
		,'margin-top':'0px'
	},500);
	$('.bbqk-slideShow').animate({
		opacity:1
	},500);
	$('.bbqk-sliderTextBox').animate({
		opacity:1
		,'bottom':'10%'
	},500);

}

function bbqk_hideContent(){
	$('.bbqk-panel:not(.bbqk-notme)').animate({
		opacity:0
		,'margin-top':'-20px'
	},500);
	$('.bbqk-headshot').animate({
		opacity:0
		,'margin-top':'-20px'
	},500);
	$('.bbqk-carousel').animate({
		opacity:0
		,'margin-top':'-20px'
	},500);
	$('.bbqk-slideShow').animate({
		opacity:0
	},500);
	$('.bbqk-sliderTextBox').animate({
		opacity:0
		,'bottom':'15%'
	},500);


}

function bbqk_loadDeadKitten(kitten){
	//console.log(kitten);
	//console.log(kitten.attr("picture"));
	$("#bbqk-picture-modal").prop("src",kitten.attr("picture"));
	$("#bbqk-name-modal").html(kitten.attr("name"));
	$("#bbqk-kitten-modal").html(kitten.attr("kitten"));
	$("#bbqk-years-modal").html(kitten.attr("years"));
	$("#bbqk-depart-modal").html(kitten.attr("depart"));
	$("#bbqk-last-modal").html(kitten.attr("last"));
	$("#myModal").modal("show");
}


/*function bbqk_updateBG(){
	if(isMobile){
		return;
	}
	var newVideoSize = bbqk_getNewSize($(window).width(),$(window).height(), $('#bbqk-videoBG').width(),$('#bbqk-videoBG').height());
	$('#bbqk-videoBG').width(newVideoSize.width);

	$('#bbqk-videoWrap').width($(window).width());
	$('#bbqk-videoWrap').height($(window).height());

	$('#bbqk-videoBG').css({
        position: "relative",
        left: ($('#bbqk-videoBG').parent().width()/2) - ($('#bbqk-videoBG').width()/2)
    });

}*/

/*function bbqk_getNewSize(boxWidth, boxHeight, imgWidth, imgHeight) {
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
}*/
