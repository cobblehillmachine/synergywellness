


$(document).ready(function() {
	var pageH = $(document).height();
	$('#loader').delay(1000).fadeOut();
	//setImgHeight();
	showSubnav();
	$('#loader').css({height: pageH});
	resizeImg();

});

$(window).resize(function() {
	//setImgHeight();
	resizeImg();

});


function showSubnav() {
	$('#menu-item-34').live({
		mouseenter: function(){$('.sub-menu').show();},
		mouseleave: function(){$('.sub-menu').hide();}
	});
}

function setImgHeight() {
	winH = $(window).height();
	newH = winH - 200;
	//$('.page-img img').css('height', newH);
	$('#main-cont').css('height', newH);

}


function resizeImg() {
	var pageH = $(document).height();
	var imgH = pageH - 220 +'px';
	$('.page-img').css({height:imgH});
}
