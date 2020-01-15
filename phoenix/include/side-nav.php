<nav class="side-nav active">
	<a href="index.php?page=main"><div class="nav-logo"><img class="img-fluid" src="images/nav-logo.png" alt="logo敘述"></div></a>
	<ul class="list-unstyled">
		<li class="drawer">
			<div class="drawer-title clearfix">
				<span class="nav-title-icon"><i class="far fa-user"></i></i></span>
				<p>個人資料</p>
				<span>
					<i class="fas fa-angle-right"></i>
				</span>
			</div>
			<div class="drawer-menu">
				<a href="index.php?page=information">個人資料</a>
				<a href="index.php?page=information-edit">個人資料編輯</a>
			</div>
		</li>
		<li class="drawer">
			<div class="drawer-title clearfix">
				<span class="nav-title-icon"><i class="fas fa-sitemap"></i></span>
				<p>會員</p>
				<span>
					<i class="fas fa-angle-right"></i>
				</span>
			</div>
			<div class="drawer-menu">
				<a href="index.php?page=member/member-list">我的會員列表</a>
			</div>
		</li>

		<!-- <li>
			<a href="#" class="clearfix">
				<span class="nav-title-icon">
					<i class="far fa-building"></i>
				</span>
				<span class="nav-title">關於我們</span>
			</a>
		</li> -->

	</ul>
</nav>
<!-- 手機版遮罩 -->
<div class="cover active"></div>
<script>
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
</script>