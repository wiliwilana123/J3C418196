//slider
var $ps01;
var pcArgs;

pcArgs = {
	mode: 'fade',
	pager: true,
	controls: false,
	auto: true,
	minSlides: 1,
	maxSlides: 1,
	speed: 1000,
	pause: 4000,
	useCSS: false
 };

//slider
$(function(){
	$(document).ready(function(){
		$ps01 = $('.slider').bxSlider(pcArgs);
	});
	
	$(window).on('load resize',function(){
			$ps01.reloadSlider(pcArgs);
	});
	
	//setTimeout(function(){
//		$(document).ready(function(){
//			$('.sliderWrap').css({'opacity':'1','transition': '0.5s'});
//		});
//	},1500);

});
