$(document).ready(function() {
	var pageH = $(document).height();
	var pageImg = $('.page-img img');
	var bodyW = $('body').width();
	window.scrollTo(0, 1);
	centerItem('#gift-form', 350, 700);
	setInputFieldFunctions();
	showSubnav();
	homeSlide();
	resizePage();
	callAnystretch();
	//resizeImg();
	$('#loader').css({height: pageH});
	$('#loader').delay(1000).fadeOut('slow');
	// if(bodyW < 1120) {
	// 	$('.content #swedish').css({marginLeft: 14 +'%'});
	// } 
	// else if(bodyW > 1120) {
	// 	$('.content #swedish').css({marginLeft: 25 +'%'});
	// }
	

});

$(window).resize(function() {
	var bodyW = $('body').width();
	resizePage();
	callAnystretch();
	// if(bodyW < 1150) {
	// 	$('.content #swedish').css({marginLeft: 14 +'%'});
	// } 
	// else if(bodyW > 1150) {
	// 	$('.content #swedish').css({marginLeft: 25 +'%'});
	// }
	centerItem('#gift-form', 350, 700);
	//resizeImg();
});

$(window).load(function() {
	callAnystretch();
	resizePage();
	//resizeImg();
});

function setInputFieldFunctions(){
$('.form-input').each(function(){
     if($(this).val() == "")
       $(this).val($(this).attr('default'));
   })

   $('.form-input').focus(function(){
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val('');

   }).blur(function() {
     if($(this).val() == $(this).attr('default') || $(this).val() == '')
       $(this).val($(this).attr('default'));
   });
}

function showSubnav() {
	$('#menu-item-34').live({
		mouseenter: function(){$('.sub-menu').show();},
		mouseleave: function(){$('.sub-menu').hide();}
	});
}


function resizePage() {
	var contentHeight = $('.content').height(),
		parentHeight = $('#main-cont').height(),
		windowHeight = $(document).height() - 254;
	if (contentHeight > windowHeight) {
		$('#main-cont').height(contentHeight);
	}
	else {
		$('#main-cont').height(windowHeight);
	}
}

function homeSlide() {
	var images = [
        "wp-content/themes/synergywellness/images/home_slide1.jpg",
        "wp-content/themes/synergywellness/images/home_slide2.jpg",
        "wp-content/themes/synergywellness/images/home_slide3.jpg",
        "wp-content/themes/synergywellness/images/home_slide4.jpg",
        "wp-content/themes/synergywellness/images/home_slide5.jpg",
        "wp-content/themes/synergywellness/images/home_slide6.jpg"
    ];
	// The index variable will keep track of which image is currently showing
    var numRand = Math.floor(Math.random()*6)
    var index = numRand;
	
	// Call anystretch for the first time,
    // In this case, I'm settings speed of 500ms for a fadeIn effect between images.
    $('.home_slide').anystretch(images[index], {speed: 0});
    
    // Set an interval that increments the index and sets the new image
    // Note: The fadeIn speed set above will be inherited
    setInterval(function() {
        index = (index >= images.length - 1) ? 0 : index + 1;
        $('.home_slide').anystretch(images[index], {speed: 2000});
    }, 4000);
    var indexHeight = $(window).height();
    $('#main-cont').height(indexHeight - 254);
    $('.home_slide').height(indexHeight - 254);
}

function callAnystretch() {
	$('#practitioners .page-img').anystretch("/wp-content/themes/synergywellness/images/bio_slide.jpg", {speed: 0});
	$('#pricing .page-img').anystretch("/wp-content/themes/synergywellness/images/pricing_slide.jpg", {speed: 0});
	$('#contact .page-img').anystretch("/wp-content/themes/synergywellness/images/contact_slide.jpg", {speed: 0});
	//$('.treat_left_bg').anystretch("/wp-content/themes/synergywellness/images/new_colon.jpg", {speed: 0});
	//$('.treat_center_left_bg').anystretch("/wp-content/themes/synergywellness/images/thai_slide.jpg", {speed: 0});
	//$('.treat_center_right_bg').anystretch("/wp-content/themes/synergywellness/images/sugaring.jpg", {speed: 0});
	//$('.treat_right_bg').anystretch("/wp-content/themes/synergywellness/images/naturo.jpg", {speed: 0});
	//$('.treat_bottom_left_bg').anystretch("/wp-content/themes/synergywellness/images/sauna.jpg", {speed: 0});
	//$('.treat_bottom_right_bg').anystretch("/wp-content/themes/synergywellness/images/kangen.jpg", {speed: 0});
	$('#therapeutic-massage .page-img').anystretch("/wp-content/themes/synergywellness/images/thai_slide.jpg", {speed: 0});
	// $('#thai-massage .page-img').anystretch("/wp-content/themes/synergywellness/images/thai_slide.jpg", {speed: 0});
	$('.page-id-16 .page-img').anystretch("/wp-content/themes/synergywellness/images/sugaring.jpg", {speed: 0});
	$('#colon-hydrotherapy .page-img').anystretch("/wp-content/themes/synergywellness/images/colon_slide.jpg", {speed: 0});
	// $('#meddicupping .page-img').anystretch("/wp-content/themes/synergywellness/images/bio_slide.jpg", {speed: 0});
}


function resizeImg() {
var pageH = $(document).height();
var imgH = pageH - 254 +'px';
//var imgW = $('.page-img').width();

$('.page-img').css({height:imgH});
}

function showGiftform() {
	var docH = $(document).height();
	$('.overlay').css({height: docH});
	$('.overlay').fadeIn();
	$('#gift-form').fadeIn();
}

function hideGiftform() {
	$('.overlay').fadeOut();
	$('#gift-form').fadeOut();
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       //'top':h/2
   });   
}


