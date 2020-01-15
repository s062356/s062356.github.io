<style>
	#header,.side-nav{display: none;}
	body{
		background-color: #2b303b;
	}
</style>
<div class="login-background">
	<div class="container">
		<div class="maT20"></div>
		<div class="row justify-content-center align-items-center maT80">
			<div class="col-lg-5 col-xl-4 col-sm-10 col-md-8 col-11">
				<div class="card">
					<div class="card-body">
						<div class="login-logo"><img src="images/header-logo.png" alt=""></div>
						<form class="needs-validation" novalidate>
							<div class="form-group">
								<label for="exampleInputEmail1">帳號</label>
								<!-- 備註 如有填寫錯誤資訊 在以下input 加入is-invalid此名稱即可顯示錯誤提示斯快-->
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入Email">
								<div class="invalid-feedback">錯誤提示字元</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">密碼</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="請輸入密碼">
								<div class="invalid-feedback">錯誤提示字元</div>
							</div>
							<a class="d-inline-block maB20" href="index.php?page=sign-up">註冊會員</a>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">保持登入狀態</label>
							</div>
							<button type="submit" class="btn btn-primary wc100 maT20">登入</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>