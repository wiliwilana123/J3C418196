// JavaScript Document
$(function(){
var $header = $('header');
var $nav = $('.nav');
var wpos = $(window).scrollTop();
var wh = $(window).height();
var mvp = (wpos + wh);
var mh = $('.header-change').offset().top;
var bo = $('body').offset().top;

//header change
	$(window).on('load resize scroll',function(){	
		
		wpos = $(window).scrollTop();
		wh = $(window).height();
		mvp = (wpos + wh);
		mh = $('.header-change').offset().top;
		bo = $('body').offset().top;
		
		if(wpos > (mh - 300)){
			$header.addClass('change');
		} else if ( bo == 0 ){
			$header.removeClass('change');
		} else {
			$header.removeClass('change');
		}
	});
	
//header btn
	$('.menu-btn').on('click', function(){
		if($(this).hasClass('close-btn')){
			$(this).removeClass('close-btn');
		} else {
			$(this).addClass('close-btn');
		}

		if($nav.hasClass('close')){
			$nav.removeClass('close');
			$nav.addClass('open');
		} else if($nav.hasClass('open')){
			$nav.removeClass('open');
			$nav.addClass('close');
		}

	});	
	/*if( $(window).width() < 769) {
		$('.menu-btn').on('click', function(){
			if($(this).hasClass('close-btn')){
				$(this).removeClass('close-btn');
			} else {
				$(this).addClass('close-btn');
			}

			if($nav.hasClass('close')){
				$nav.removeClass('close');
				$nav.addClass('open');
			} else if($nav.hasClass('open')){
				$nav.removeClass('open');
				$nav.addClass('close');
			}
			
		});	
		
		$('body').removeClass('low');
		
	} else if( $('body').hasClass('low') ) {
		$('.menu-btn').on('click', function(){
			if($(this).hasClass('close-btn')){
				$(this).removeClass('close-btn');
			} else {
				$(this).addClass('close-btn');
			}

			if($nav.hasClass('close')){
				$nav.removeClass('close');
				$nav.addClass('open');
			} else if($nav.hasClass('open')){
				$nav.removeClass('open');
				$nav.addClass('close');
			}
		});	
	}
*/
	
//menu開いたらbody fixed
	var state = false;
	var scrollpos;

	$('.menu-btn').on('click', function(){
		if(state == false) {
		  scrollpos = $(window).scrollTop();
		  $('body').addClass('fixed').css({'top': -scrollpos});
		  state = true;
		} else {
		  $('body').removeClass('fixed').css({'top': 0});
		  window.scrollTo( 0 , scrollpos );
		  state = false;
		}
	});
 
	
// page top
	$(window).on('load scroll',function() {
		if($(this).scrollTop() >600) {
		 	$('.pagetop').stop().fadeIn(); 
		} else {
		 	$('.pagetop').stop().fadeOut();
		}
	});
	
	$('.pagetop a').click(function() {
		$('html,body').animate({scrollTop: 0}, 500, 'swing');
	});		

	
//tel
    if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
      $(function() {
        $('.tel').each(function() {
          var str = $(this).html();
          if ($(this).children().is('img')) {
            $(this).html($('<a>').attr('href', 'tel:' + $(this).children().attr('alt').replace(/-/g, '')).append(str + '</a>'));
          } else {
            $(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
          }
        });
      });
    }  
});	


//pege link
$(window).on('load resize',function(){
	if( $(window).width() > 768) {
		  $('a[href^="#"]').click(function(){
			var hh = 60;
			var speed = 800;
			var href= $(this).attr("href");
			var target = $(href === "#" || href === "" ? 'html' : href);
			var position = target.offset().top - hh;
			$("html, body").stop().animate({scrollTop:position}, speed, "swing");
			return false;
		  });
	} else {
		  $('a[href^="#"]').click(function(){
			var hh = 50;
			var speed = 800;
			var href= $(this).attr("href");
			var target = $(href === "#" || href === "" ? 'html' : href);
			var position = target.offset().top - hh;
			$("html, body").stop().animate({scrollTop:position}, speed, "swing");
			return false;
		  });
	}
});

// fadein
$(window).on('load resize scroll',function(){
	var scrollWindow = $(window).scrollTop();
	var windowHeight = $(window).height();
	
	//fade
	$('.fade-box').each(function(){
		targetPosition = $(this).offset().top;
		
		if($(window).width() > 768){
			if(scrollWindow > targetPosition - windowHeight + 300){
				$(this).addClass("fade");
			}
		} else {
			if(scrollWindow > targetPosition - windowHeight + 100){
				$(this).addClass("fade");
			}
		}
	});
	
	//link fade
	$('main .link li').each(function(){
		targetPosition = $(this).offset().top;
		
		if(scrollWindow > targetPosition - windowHeight){
			$(this).addClass("show");
		}
	});
	
	
});	


