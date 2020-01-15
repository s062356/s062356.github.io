<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<link rel="stylesheet" href="css/daterangepicker.css">
<style>
	#header{
		display: none;
	}
</style>	
<!-- 圖片上傳預覽 end -->
<div class="no-sign-header">
	<div class="text-center">
		<div class="header-logo active"><img src="images/header-logo.png" alt=""></div>
	</div>
	<div class="user-info">
		<a href="index.php?page=login" class="btn btn-outline-primary">登入</a>
		<!-- <a href="index.php?page=login" class="btn btn-outline-primary">登出</a> -->
	</div>
</div>
<div class="no-sign-content">
	<!-- container -->
	<div class="container">
		<div class="text-center">
			<h3 class="maTB30">會員註冊</h3>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="avator-wrapper" style="background-image: url('https://picsum.photos/200')">
					<form class="form">
						<div class="avator" style="background-image: url('https://picsum.photos/200')">
							<input type="file" name="upload[]" class="avator-input upload">
							<div class="add">更換 &nbsp;<i class="fas fa-edit"></i></div>
						</div>
					</form>
				</div>
				<!-- container -->
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-8">
							<form>
								<div class="row maT30">
									<div class="col-md-6">
										<div class="form-group">
											<label for="user-name">姓名</label>
											<!-- 備註 如要顯示錯誤提示字元區塊 請在input中加入is-valid此名稱-->
											<input type="text" class="form-control" id="user-name" aria-describedby="emailHelp" placeholder="">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="wc100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="id-number">身分證字號</label>
											<!-- 備註 如要顯示錯誤提示字元區塊 請在input中加入is-valid此名稱-->
											<input type="text" class="form-control" id="id-number" aria-describedby="emailHelp" placeholder="">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="wc100"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="tel">電話</label>
											<input type="tel" class="form-control" id="tel" aria-describedby="emailHelp" placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="mobile">手機</label>
											<input type="tel" class="form-control" id="mobile" aria-describedby="emailHelp" placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="birthday">生日</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
												</div>
												<input type="text" class="form-control" name="birthday" value=""/>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="gender">性別</label>
											<div class="wc100"></div>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-secondary active">
													<input type="radio" name="options" id="option1" autocomplete="off" checked> 男
												</label>
												<label class="btn btn-secondary">
													<input type="radio" name="options" id="option2" autocomplete="off"> 女
												</label>
											</div>
										</div>
									</div>
									<div class="wc100 border-grey maTB30"></div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="referrer">推薦人</label>
											<input type="text" class="form-control" id="referrer" aria-describedby="emailHelp" placeholder="">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="referrer-id">推薦人編號</label>
											<input type="text" class="form-control" id="referrer-id" aria-describedby="emailHelp" placeholder="">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="wc100 border-grey maTB30"></div>
									<div class="col-md-5">
										<div class="form-group">
											<label for="bank">銀行名稱 / 分行</label>
											<input type="text" class="form-control" id="bank" aria-describedby="emailHelp" placeholder="">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="col-md-7">
										<div class="form-group">
											<label for="bank-account">銀行帳號</label>
											<input type="tel" class="form-control" id="bank-account" aria-describedby="emailHelp" placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
											<div class="invalid-feedback">錯誤提示字元</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="birthday">入會日期</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
												</div>
												<input type="text" class="form-control" name="birthday" value=""/>
											</div>
										</div>
									</div>
									<div class="wc100"></div>
									<div class="col-4">
										<label for="bank-account">上傳存簿封面照</label>
										<div class="upload-btn embed-responsive account-cover-upload">
											<p class="align-items-center"><i class="far fa-plus-square"></i>&nbsp;選擇圖片</p>
											<input type="file" name="upload[]" class="upload" multiple>
										</div>
									</div>
								</div>
								<div class="text-right maTB30">
									<button type="button" class="btn btn-primary paLR50" onclick="location.href='index.php?page=main'">註冊</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- container END -->
			</div>
		</div>
	</div>
	<!-- containerEND -->
</div>

<script>
	$(".side-nav").hide();
	$("#header").removeClass('active');
	$("#header").addClass('sign-up-style');
	$("#header").find('.hamburger').hide();
</script>