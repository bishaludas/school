//navbar fixed top
$(window).scroll(function(){
	if($(document).scrollTop()>1000){
		$('nav').addClass('fixed-top');
		$('.mobile-nav-icon').fadeIn(100);
		$('.menu-nav').addClass('new-menu-nav');
	}
	else{
		$('nav').removeClass('fixed-top');
		$('.menu-nav').removeClass('new-menu-nav');
		$('.mobile-nav-icon').fadeOut(100);
	}
});



$(".mobile-nav-icon").on("click", function(){
	var menu =$(".menu-nav");
	var icon = $(".mobile-nav-icon i");

	menu.slideToggle(300);
	if (icon.hasClass('ion-navicon')) {
		icon.addClass('ion-android-close');
		icon.removeClass('ion-navicon');
	}else{
		icon.addClass('ion-navicon');
		icon.removeClass('ion-android-close');
	}
});

$(".news").on("click", function(){
	$(".news-li").fadeToggle(300);
});

$(".homepage").on("click", function(){
	$(".home").fadeToggle(300);
});
$(".about").on("click", function(){
	$(".about-li").fadeToggle(300);
});

$(".program").on("click", function(){
	$(".p-li").fadeToggle(300);
});

$('.slider').slick({ 
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

