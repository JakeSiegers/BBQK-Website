
var bbqk_bgHeight=0
	,bbqk_tiltCount=0
	,bbqk_changingPages=false
	,bbqk_logoTiltInterval=Math.PI/128
	,bbqk_twoPi=2*Math.PI;

$(function() {
	preloadFinished();
	$(".bbqk-dead-kitten").bind('click', function(event){
			event.preventDefault();
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
			//$(this).addClass("bbqk-deadKittenHover");
	});
	$(".bbqk-dead-kitten").bind('mouseout', function(event){
			$('body').css("cursor", "auto");
			//$(this).removeClass("bbqk-deadKittenHover");
	});
	$(".bbqk-kastMember").bind('mouseover', function(event){
			$('body').css("cursor", "pointer");
			//$(this).addClass("bbqk-deadKittenHover");
	});
	$(".bbqk-kastMember").bind('mouseout', function(event){
			$('body').css("cursor", "auto");
			//$(this).removeClass("bbqk-deadKittenHover");
	});
});

function preloadFinished(){
	bbqk_hideLoader();
	bbqk_showBackground();
	bbqk_showContent();
	$('a:not(.bbqk-notme)').bind('click', function(event){
		if($(this).hasClass('dropdown-toggle') || $(this).hasClass('carousel-control')){
			return;
		}
		event.preventDefault();
		var url = $(this).prop('href');
		bbqk_showLoader();
		bbqk_hideBackground();
		bbqk_hideContent();
		window.setTimeout((function(){window.location=url;}),500);
	});
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

function bbqk_showContent(){
	$('.bbqk-panel:not(.bbqk-notme)').each(function(count) {
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
	$("#bbqk-picture-modal").prop("src",kitten.attr("picture"));
	$("#bbqk-name-modal").html(kitten.attr("name"));
	$("#bbqk-kitten-modal").html(kitten.attr("kitten"));
	$("#bbqk-years-modal").html(kitten.attr("years"));
	$("#bbqk-depart-modal").html(kitten.attr("depart"));
	$("#bbqk-last-modal").html(kitten.attr("last"));
	$("#myModal").modal("show");
}