<script>
	jQuery(document).ready(function($) {
		$(".test").click(function(event) {
			$(".react-grid-item").hide();
			alert("sdc");
		});
	});
</script>
<div class="content active"onload="iframeLoad();">
	<!-- container-fluid -->
	<div class="container">
		<!-- 麵包屑 -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="#">首頁</a></li>
				<li class="breadcrumb-item active" aria-current="page">金鳳凰管理系統</li>
			</ol>
		</nav>
		<!-- 麵包屑 end -->


		<div class="d-flex align-items-center maT20 maB30">
					<div class="member-avatar" style="background-image: url('https://picsum.photos/200')"></div>
					<div>
						<div class="position-label">主任</div>
						<h3>哈囉, <b>陳麗美</b></h3>
					</div>
				</div>

		<!-- 首頁展示區塊 -->
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="panel-card">
					<h3><b>46</b></h3>
					<span>總會員人數</span>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
				<div class="panel-card">
					<h3><b>213,104</b></h3>
					<span>總業績</span>
				</div>
			</div>
		</div>
		<!-- 首頁展示區塊 end -->
		
		<!-- 新進會員列表 -->
		<div class="card">
			<div class="card-body">
				<h5>本月新會員</h5>
				<!-- 商品列表 -->
				<div class="table-responsive">
					<table class="table table-hover table-bordered maT20">
						<thead>
							<tr>
								<th scope="col">姓名</th>
								<th scope="col">目前業績</th>
								<th scope="col">會員人數</th>
								<th scope="col">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>王小明</td>
								<td>$3600</td>
								<td>6</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>陳志豪</td>
								<td>$12000</td>
								<td>10</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>劉勝德</td>
								<td>$2100</td>
								<td>6</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>鄭美如</td>
								<td>$1600</td>
								<td>12</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>王世嘉</td>
								<td>$8700</td>
								<td>29</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>陳志豪</td>
								<td>$12000</td>
								<td>10</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>劉勝德</td>
								<td>$2100</td>
								<td>6</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>鄭美如</td>
								<td>$1600</td>
								<td>12</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
							<tr>
								<td>王世嘉</td>
								<td>$8700</td>
								<td>29</td>
								<td class="table-edit">
									<a href="index.php?page=member/member-detail">查看</a>
									<a class="delete" href="">刪除</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- 商品列表 end -->
				<div class="text-right maTB30">
					<button type="button" class="btn btn-primary" onclick="location.href='index.php?page=member/member-list'">查看所有會員</button>
				</div>
			</div>
		</div>
		<!-- 新進會員列表 END-->
	</div>
	<!-- container-fluid end -->
</div>