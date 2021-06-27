@include('home.head')
	<body >	
	@include('home.header')

		<section class="bread-crumb margin-bottom-10">
	<div class="container">
		<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
			<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="index.php" title="Trang chủ">
					<span itemprop="name">Trang chủ</span>
					<meta itemprop="position" content="1" />
				</a>
				<span><i class="fa fa-angle-right"></i></span>
			</li>
			
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<strong itemprop="name">Giỏ hàng của bạn - MP Watch</strong>
				<meta itemprop="position" content="2" />
			</li>
			
		</ul>
	</div>
</section>
<div class="container white collections-container margin-bottom-20 margin-top-30">
	<div class="white-background">
		<div class="row">
			<div class="col-md-12">
				<div class="shopping-cart">
					<div class="visible-md visible-lg">
						<div class="shopping-cart-table">
							<div class="row">
								<div class="col-md-12">
									<h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span class="count_item_pr">0</span> sản phẩm)</span></h1>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-6 col-md-offset-3">
									<div class="cart-empty">
										<img src="../theme.hstatic.net/200000268089/1000665157/14/empty-cartfd6a.png?v=151" class="img-responsive center-block" alt="Giỏ hàng trống" />
										<div class="btn-cart-empty">
											<a class="btn btn-default" href="index.php" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="visible-sm visible-xs">
						
						<div class="cart-empty">
							<img src="../theme.hstatic.net/200000268089/1000665157/14/empty-cartfd6a.png?v=151" class="img-responsive center-block" alt="Giỏ hàng trống" />
							<div class="btn-cart-empty">
								<a class="btn btn-default" href="index.php" title="Tiếp tục mua sắm">Tiếp tục mua hàng</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
@include('home.footer')