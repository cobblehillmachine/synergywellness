


$(document).ready(function() {
	var pageH = $(document).height();
	var pageImg = $('.page-img img');
	homeSlide();
	showSubnav();
	//resizeImg();
	resizePage();
	callAnystretch();
	$('#loader').css({height: pageH});
	$('#loader').delay(1000).fadeOut();


});

$(window).resize(function() {
	//resizeImg();
	resizePage();
	callAnystretch();

});

$(window).load(function() {
	homeSlide();
	callAnystretch();
});


function showSubnav() {
	$('#menu-item-34').live({
		mouseenter: function(){$('.sub-menu').show();},
		mouseleave: function(){$('.sub-menu').hide();}
	});
}

// function setImgHeight() {
// 	winH = $(window).height();
// 	newH = winH - 234;
// 	//$('.page-img img').css('height', newH);
// 	$('#main-cont').css('height', newH);
// 
// }


function resizeImg() {
	var pageH = $(document).height();
	var imgH = pageH - 234 +'px';
	$('.page-img').css({height:imgH});
}


function resizePage() {
	var contentHeight = $('.content').height(),
		parentHeight = $('#main-cont').height(),
		windowHeight = $(window).height() - 234;
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
    $('.home_slide').anystretch(images[index], {speed: 100});
    
    // Set an interval that increments the index and sets the new image
    // Note: The fadeIn speed set above will be inherited
    setInterval(function() {
        index = (index >= images.length - 1) ? 0 : index + 1;
        $('.home_slide').anystretch(images[index], {speed: 500});
    }, 5000);
    var indexHeight = $(window).height();
    $('#main').height(indexHeight - 234);
    $('.home_slide').height(indexHeight - 234);
}

function callAnystretch() {
	$('#bio .page-img').anystretch("/wp-content/themes/synergywellness/images/bio_slide.jpg", {speed: 0});
	$('#pricing .page-img').anystretch("/wp-content/themes/synergywellness/images/pricing_slide.jpg", {speed: 0});
	$('#contact .page-img').anystretch("/wp-content/themes/synergywellness/images/contact_slide.jpg", {speed: 0});
	//$('#bio .page-img').anystretch("/wp-content/uploads/2013/02/bio_slide.jpg", {speed: 0});
}
