// Header
jQuery(document).ready(function($) {
  width = $(window).width();
  if(width <= 768){
    $('#header').removeClass('active');
    $('.side-nav').removeClass('active');
    $('.content').removeClass('active');
    $('.cover').removeClass('active');
  }
  $(window).resize(function() {
    width=$(window).width();
    if(width <= 768){
      $('#header').removeClass('active');
      $('.side-nav').removeClass('active');
      $('.content').removeClass('active');
      $('.cover').removeClass('active');
    }
    else{
      $('#header').addClass('active');
      $('.side-nav').addClass('active');
      $('.content').addClass('active');
      $('.cover').addClass('active');
    }
  });
  $('.hamburger').click(function(event) {
    $('#header').toggleClass('active');
    $('.side-nav').toggleClass('active');
    $('.content').toggleClass('active');
    $('.cover').toggleClass('active');
    $(this).toggleClass("is-active");
  });
});

// Side Nav
jQuery(document).ready(function($) {
  $('.drawer-menu').hide();
  $('.side-nav')
  .on('click','.drawer',function(e){
    $(this).addClass('active').find('.drawer-menu').slideDown();
    $(this).siblings('.drawer').removeClass('active').find('.drawer-menu').slideUp();
  })
  .on('click','.drawer.active',function(e){
    $(this).removeClass('active').find('.drawer-menu').slideUp();
  });
});

jQuery(document).ready(function($) {
	$('.input-wrapper').find('.title').click(function(event) {
		$(this).toggleClass('active');
	});
});
