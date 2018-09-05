//navbar fixed top
$(window).scroll(function(){
	if($(document).scrollTop()>1200){
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



$(".post-main").on("click", function(){
	$(".post-li").fadeToggle(300);
})
