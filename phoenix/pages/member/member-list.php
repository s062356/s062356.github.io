<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<link rel="stylesheet" href="css/daterangepicker.css">
<div class="content active">
	<!-- container -->
	<div class="container">
		<!-- 麵包屑 -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="#">首頁</a></li>
				<li class="breadcrumb-item active" aria-current="page">會員列表</li>
			</ol>
		</nav>
		<!-- 麵包屑 end -->
		<h3 class="maB20">我的會員列表</h3>
		
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
		<div class="card">
			<div class="card-body">
				<!-- 搜尋條件 -->
				<div class="table-filter">
					<div class="row">
						<div class="col-12 col-sm-4">
							<button type="button" class="btn btn-warning">新增&nbsp;<i class="fas fa-plus"></i></button>
						</div>
						<div class="wc100"></div>
						<!-- 搜尋條件 -->
						<div class="col-xl-6">
							<div class="maT15">
								<div class="form-group">
									<label for="exampleInputEmail1">篩選日期</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
										</div>
										<input type="text" class="form-control"  id="daterange" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
						</div>
						<!-- 搜尋條件 END -->
					</div>
				</div>
				<!-- 會員列表 -->
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
				<!-- 會員列表 END -->
				<!-- paginatio -->
				<nav aria-label="...">
					<ul class="pagination justify-content-end">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">上一頁</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active" aria-current="page">
							<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">下一頁</a>
						</li>
					</ul>
				</nav>
				<!-- paginatio END -->
			</div>
		</div>
	</div>
	<!-- container END -->
</div>
<script>
	$(function () {
	moment.locale('zh-tw');
		//default date range picker
		$('#daterange').daterangepicker({
		autoApply:true
	});
});
</script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>