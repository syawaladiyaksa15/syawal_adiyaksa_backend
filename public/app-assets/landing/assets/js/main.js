(function($){"use strict";jQuery('.mean-menu').meanmenu({meanScreenWidth:"991"});$(window).on('scroll',function(){if($(this).scrollTop()>120){$('.navbar-area').addClass("is-sticky");}
else{$('.navbar-area').removeClass("is-sticky");}});$('.close-btn').on('click',function(){$('.search-overlay').fadeOut();$('.search-btn').show();$('.close-btn').removeClass('active');});$('.search-btn').on('click',function(){$(this).hide();$('.search-overlay').fadeIn();$('.close-btn').addClass('active');});$('.popup-youtube').magnificPopup({disableOn:320,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});$('.circlechart').circlechart();$('select').niceSelect();$('.featured-services-slides').owlCarousel({loop:true,nav:false,dots:true,margin:30,autoplayHoverPause:true,autoplay:true,mouseDrag:true,navText:["<i class='flaticon-arrow-pointing-to-left'></i>","<i class='flaticon-arrow-pointing-to-right'></i>"],responsive:{0:{items:1,},768:{items:2,},1200:{items:3,},}});$(function(){$('.accordion').find('.accordion-title').on('click',function(){$(this).toggleClass('active');$(this).next().slideToggle('fast');$('.accordion-content').not($(this).next()).slideUp('fast');$('.accordion-title').not($(this)).removeClass('active');});});$('.resources-slides').owlCarousel({loop:true,nav:false,dots:true,autoplayHoverPause:true,autoplay:true,mouseDrag:true,margin:30,navText:["<i class='flaticon-arrow-pointing-to-left'></i>","<i class='flaticon-arrow-pointing-to-right'></i>"],responsive:{0:{items:1,},576:{items:2,},768:{items:2,},1200:{items:4,},}});$('.feedback-slides').owlCarousel({loop:true,nav:false,dots:true,autoplayHoverPause:true,autoplay:true,mouseDrag:true,center:true,margin:30,navText:["<i class='flaticon-arrow-pointing-to-left'></i>","<i class='flaticon-arrow-pointing-to-right'></i>"],responsive:{0:{items:1,},576:{items:2,},768:{items:2,},1200:{items:3,},}});(function($){$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');$('.tab ul.tabs li a').on('click',function(g){var tab=$(this).closest('.tab'),index=$(this).closest('li').index();tab.find('ul.tabs > li').removeClass('current');$(this).closest('li').addClass('current');tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq('+index+')').slideUp();tab.find('.tab_content').find('div.tabs_item:eq('+index+')').slideDown();g.preventDefault();});})(jQuery);$('.input-counter').each(function(){var spinner=jQuery(this),input=spinner.find('input[type="text"]'),btnUp=spinner.find('.plus-btn'),btnDown=spinner.find('.minus-btn'),min=input.attr('min'),max=input.attr('max');btnUp.on('click',function(){var oldValue=parseFloat(input.val());if(oldValue>=max){var newVal=oldValue;}else{var newVal=oldValue+1;}
spinner.find("input").val(newVal);spinner.find("input").trigger("change");});btnDown.on('click',function(){var oldValue=parseFloat(input.val());if(oldValue<=min){var newVal=oldValue;}else{var newVal=oldValue-1;}
spinner.find("input").val(newVal);spinner.find("input").trigger("change");});});function makeTimer(){var endTime=new Date("September 30, 2025 17:00:00 PDT");var endTime=(Date.parse(endTime))/1000;var now=new Date();var now=(Date.parse(now)/1000);var timeLeft=endTime-now;var days=Math.floor(timeLeft/86400);var hours=Math.floor((timeLeft-(days*86400))/3600);var minutes=Math.floor((timeLeft-(days*86400)-(hours*3600))/60);var seconds=Math.floor((timeLeft-(days*86400)-(hours*3600)-(minutes*60)));if(hours<"10"){hours="0"+hours;}
if(minutes<"10"){minutes="0"+minutes;}
if(seconds<"10"){seconds="0"+seconds;}
$("#days").html(days+"<span>Days</span>");$("#hours").html(hours+"<span>Hours</span>");$("#minutes").html(minutes+"<span>Minutes</span>");$("#seconds").html(seconds+"<span>Seconds</span>");}
setInterval(function(){makeTimer();},1000);$(function(){$(window).on('scroll',function(){var scrolled=$(window).scrollTop();if(scrolled>300)$('.go-top').addClass('active');if(scrolled<300)$('.go-top').removeClass('active');});$('.go-top').on('click',function(){$("html, body").animate({scrollTop:"0"},500);});});$(window).on('load',function(){if($(".wow").length){var wow=new WOW({boxClass:'wow',animateClass:'animated',offset:20,mobile:true,live:true,});wow.init();}});$(window).on('load',function(){$('.preloader').addClass('preloader-deactivate');});}(jQuery));