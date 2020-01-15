<header id="header" class="active">
	<div class="hamburger">
		<div class="top-bun"></div>
		<div class="meat"></div>
		<div class="bottom-bun"></div>
	</div>
	<div class="text-center">
		<div class="header-logo active"><img src="images/header-logo.png" alt=""></div>
	</div>
	<div class="user-info">
		<a href="index.php?page=login" class="btn btn-outline-primary">登入</a>
		<!-- <a href="index.php?page=login" class="btn btn-outline-primary">登出</a> -->
	</div>
</header>

<script>
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
</script>