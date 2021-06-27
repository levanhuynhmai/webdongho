


<header class="header">
	<div class="container"> 
		<div class="row top-header">
			<div class="col-md-5 col-sm-12 col-xs-12 left-header hidden-sm hidden-xs">
				<div class="text">
					<span>Hotline đặt hàng:</span>
					<a href="tel:0916455216">0916455216</a>
				</div>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12 evo-header-mobile">
				<button type="button" class="evo-flexitem evo-flexitem-fill navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="logo evo-flexitem evo-flexitem-fill">
					<a href="../index.php" class="logo-wrapper" title="Evo Watch">
						<img src="{{asset('/img/logo.png')}}"  alt="Evo Watch" class="img-responsive center-block" />
					</a>
				</div>
				<div class="evo-flexitem evo-flexitem-fill visible-sm visible-xs">
					<a href="cart.php" title="Giỏ hàng" rel="nofollow">
						<i class="fa fa-cart-arrow-down"></i>
						<span class="count_item_pr">0</span>
					</a>
					<a href="javascript:void(0);" class="site-header-search" rel="nofollow" title="Tìm kiếm">
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12 right-header hidden-sm hidden-xs">
				<ul class="justify-end">
					@if(!isset($UserDh))
					<li class="site-nav-item site-nav-account">
						<a href="{{ route('dangnhap')}}" title="Tài khoản" rel="nofollow">Tài khoản</a>
						<ul>
							
							<li><a rel="nofollow" href="{{ route('dangnhap')}}" title="Đăng nhập">Đăng nhập</a></li>
							<li><a rel="nofollow" href="{{ route('dangky')}}" title="Đăng ký">Đăng ký</a></li>
							
						</ul>
					</li>
					@else
					<li class="site-nav-item site-nav-account">
						<a href="#" title="Tài khoản" rel="nofollow">{{$UserDh->firstname}}</a>
						<ul>
							
							<li><a rel="nofollow" href="" title="Đăng nhập">Đăng xuất</a></li>
							
						</ul>
					</li>
					@endif

					<li class="site-nav-item site-nav-cart mini-cart">
						<a href="{{ route('giohang')}}" title="Giỏ hàng" rel="nofollow">
							Giỏ hàng <i class="fa fa-cart-arrow-down"></i>
							<span class="count_item_pr">0</span>
						</a>
						<div class="top-cart-content">					
							<ul id="cart-sidebar" class="mini-products-list count_li">
								<li class="list-item"><ul></ul></li>
								<li class="action">
									<ul>
										<li class="li-fix-1"><div class="top-subtotal">Tổng tiền thanh toán:<span class="price"></span></div></li>
										<li class="li-fix-2">
											<div class="actions clearfix">
												<a rel="nofollow" href="cart.php" class="btn btn-primary" title="Giỏ hàng"><i class="fa fa-shopping-basket"></i> Giỏ hàng</a>
												<a rel="nofollow" href="cart.php" class="btn btn-checkout btn-gray" title="Thanh toán"><i class="fa fa-random"></i> Thanh toán</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</li>
					<li class="site-nav-item site-nav-search">
						<a href="javascript:void(0);" class="site-header-search" rel="nofollow" title="Tìm kiếm"><i class="fa fa-search" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container nav-evo-watch"> 
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<ul id="nav" class="nav">
	
	
	
	
	
	
	<li class="nav-item active"><a class="nav-link" href="../index.php" title="Trang chủ">Trang chủ</a></li>
	
	
	
	
	
	
	
	<li class=" nav-item has-childs ">
		<a href="pages/about-us.php" class="nav-link" title="Giới thiệu">Giới thiệu <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
					
		<ul class="dropdown-menu">
			
			
			<li class="nav-item-lv2"><a class="nav-link" href="pages/chinh-sach-doi-hang.php" title="Chính sách đổi hàng">Chính sách đổi hàng</a></li>
			
			
			
			<li class="nav-item-lv2"><a class="nav-link" href="pages/chinh-sach-van-chuyen.php" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>
			
			
			
			<li class="nav-item-lv2"><a class="nav-link" href="pages/he-thong-cua-hang.php" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a></li>
			
			
		</ul>
		
	</li>
	
	
	
	
	
	
	
	<li class=" nav-item has-childs  has-mega">
		<a href="{{route('collections')}}" class="nav-link" title="Sản phẩm">Sản phẩm <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
		
		<div class="mega-content">
	<ul class="level0">
		
		
		<li class="level1 parent item fix-navs">
			<a class="hmega" href="collections/nam.php" title="Nam">Nam <i class="fa fa-angle-down hidden-lg hidden-md" data-toggle="dropdown"></i></a>
			<ul class="level1">
				
				<li class="level2">
					<a href="collections/dong-ho-kashmir.php" title="Đồng hồ KASHMIR">Đồng hồ KASHMIR</a>
				</li>
				
				<li class="level2">
					<a href="collections/dong-ho-weimar.php" title="Đồng hồ WEIMAR">Đồng hồ WEIMAR</a>
				</li>
				
				<li class="level2">
					<a href="collections/dong-ho-colosseum.php" title="Đồng hồ COLOSSEUM">Đồng hồ COLOSSEUM</a>
				</li>
				
			</ul>
		</li>
		
		
		
		<li class="level1 parent item fix-navs">
			<a class="hmega" href="collections/nu.php" title="Nữ">Nữ <i class="fa fa-angle-down hidden-lg hidden-md" data-toggle="dropdown"></i></a>
			<ul class="level1">
				
				<li class="level2">
					<a href="collections/ban-chay-nhat.php" title="Bán chạy nhất">Bán chạy nhất</a>
				</li>
				
				<li class="level2">
					<a href="collections/dong-ho-melissani.php" title="Đồng hồ MELISSANI">Đồng hồ MELISSANI</a>
				</li>
				
				<li class="level2">
					<a href="collections/dong-ho-moraine.php" title="Đồng hồ MORAINE">Đồng hồ MORAINE</a>
				</li>
				
			</ul>
		</li>
		
		
		
		<li class="level1 parent item fix-navs">
			<a class="hmega" href="collections/phu-kien.php" title="Phụ kiện">Phụ kiện <i class="fa fa-angle-down hidden-lg hidden-md" data-toggle="dropdown"></i></a>
			<ul class="level1">
				
				<li class="level2">
					<a href="collections/day-dong-ho.php" title="Dây đồng hồ">Dây đồng hồ</a>
				</li>
				
				<li class="level2">
					<a href="collections/kinh-ram.php" title="Kính râm">Kính râm</a>
				</li>
				
				<li class="level2">
					<a href="collections/kinh-mat.php" title="Kính mắt">Kính mắt</a>
				</li>
				
			</ul>
		</li>
		
		
	</ul>
	</div>
		
	</li>
	

	
	<li class="nav-item "><a class="nav-link" href="collections/nam.php" title="Nam">Nam</a></li>
	
	
	<li class="nav-item "><a class="nav-link" href="collections/nu.php" title="Nữ">Nữ</a></li>
	
	
	
	<li class="nav-item "><a class="nav-link" href="collections/phu-kien.php" title="Phụ kiện">Phụ kiện</a></li>
	
	
	<li class="nav-item "><a class="nav-link" href="blogs/news.php" title="Blog">Blog</a></li>
	
	
	<li class="nav-item "><a class="nav-link" href="pages/lien-he.php" title="Liên hệ">Liên hệ</a></li>
	
	
	
	<li class="nav-item hidden-lg hidden-md"><a rel="nofollow" href="{{asset('login.php')}}" title="Đăng nhập">Đăng nhập</a></li>
	<li class="nav-item hidden-lg hidden-md"><a rel="nofollow" href="account/register.php" title="Đăng ký">Đăng ký</a></li>
	
	</ul>
			</div>
		</div>
	</div>
</header>