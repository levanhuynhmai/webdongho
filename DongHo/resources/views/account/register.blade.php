
@include('home.head')
	<body class="bg-body">	
	@include('home.header')
	<div class="container">
		<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
			<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="../index.php" title="Trang chủ">
					<span itemprop="name">Trang chủ</span>
					<meta itemprop="position" content="1" />
				</a>
				<span><i class="fa fa-angle-right"></i></span>
			</li>
			
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<strong itemprop="name">Tạo tài khoản</strong>
				<meta itemprop="position" content="2" />
			</li>
			
		</ul>
	</div>
</section> 
<div class="container margin-bottom-20 margin-top-30">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="page-login account-box-shadow">
				<div id="login">
					<h1 class="title-head text-center margin-bottom-30">Tạo tài khoản</h1>
					
					<div class="form-signup" style="color:red;">
						@if ($errors->count() > 0)
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						@else
							@if(!empty($error))
								@if(is_array($error))
									@foreach($error as $er)
										<li>{{ e($er) }}</li>
									@endforeach
								@else
									<li>{{ e($error) }}</li>
								@endif
							@endif
						@endif
						@if (session('thongbao'))
							<li>{{session('thongbao')}}</li>
						@endif
					</div>
						
					<form action="/dangky" method="POST" role="form">
					@csrf
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<div class="form-signup clearfix">
						<div class="row">
							<div class="col-md-6">
								<fieldset class="form-group">
									<label>Họ<span class="required">*</span></label>
									<input placeholder="Nhập Họ" type="text" class="form-control form-control-lg" value="" name="lastname" id="lastName" required data-validation-error-msg= "Không được để trống" data-validation="required" >
								</fieldset>
							</div>
							<div class="col-md-6">
								<fieldset class="form-group">
									<label>Tên<span class="required">*</span></label>
									<input placeholder="Nhập Tên" type="text" class="form-control form-control-lg" value="" name="firstname" id="firstName" required data-validation-error-msg= "Không được để trống" data-validation="required" >
								</fieldset>
							</div>
							<div class="col-md-12">
								<fieldset class="form-group">
									<label>Email<span class="required">*</span></label>
									<input placeholder="Nhập Địa chỉ Email" type="email" class="form-control form-control-lg" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" value="" name="email" id="email" required="" />
								</fieldset>
							</div>
							<div class="col-md-12">
								<fieldset class="form-group">
									<label>Mật khẩu<span class="required">*</span></label>
									<input placeholder="Nhập Mật khẩu" type="password" class="form-control form-control-lg" value="" name="password" id="password" required data-validation-error-msg= "Không được để trống" data-validation="required" >
								</fieldset>
							</div>
							<div class="col-md-12">
								<fieldset class="form-group">
									<label>Nhập Lại Mật khẩu<span class="required">*</span></label>
									<input placeholder="Nhập Lại Mật khẩu" type="password" class="form-control form-control-lg" value="" name="passwordagain" id="passwordagain" required data-validation-error-msg= "Không được để trống" data-validation="required" >
								</fieldset>
							</div>
							<div class="col-md-12 text-center" style="margin-top:15px;">
								<button type="submit" value="Đăng ký" class="btn btn-style btn-blues">Tạo tài khoản</button>
								<a href="{{route('dangnhap')}}" title="Đăng nhập" class="btn btn-register btn-register-login">Đăng nhập</a>
							</div>
						</div>
					</div>
					</form>
					
					
					
<input id='f1b19d7d24a44743b32466e5487621e3' name='g-recaptcha-response' type='hidden'><script src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('f1b19d7d24a44743b32466e5487621e3').value = token;});});</script></form>
				</div>
			</div>
		</div>
	</div>
</div>
		

@include('home.footer')