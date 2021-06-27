
<?php require('../home/head.php') ?>
<body class="bg-body">	
		<?php require('../home/header.php') ?>

<section class="bread-crumb margin-bottom-10">
	<div class="container">
		<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
			<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="../index.html" title="Trang chủ">
					<span itemprop="name">Trang chủ</span>
					<meta itemprop="position" content="1" />
				</a>
				<span><i class="fa fa-angle-right"></i></span>
			</li>
			
			
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<a itemprop="item" href="../collections/hot-products.html" title="Sản phẩm nổi bật">
					<span itemprop="name">Sản phẩm nổi bật</span>
					<meta itemprop="position" content="2" />
				</a>
				<span><i class="fa fa-angle-right"></i></span>
			</li>
			
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="name">Black Link</span>
				<meta itemprop="position" content="3" />
			</li>
			
		</ul>
	</div>
</section>
<section class="product margin-top-30">	
	<div class="container">
		<div class="row details-product padding-bottom-10">
			<div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
				<div class="relative product-image-block">
					
					<div class="slider-big-video clearfix margin-bottom-10">
						<div class="slider slider-for">
							
							<a href="#" title="Click để xem">
								<img src="<?php echo $pathImgProduct ?>upload_a89e9dd9b502466b97efbbf6bd5c41a3_1024x1024.jpg" alt="Black Link" class="img-responsive center-block">
							</a>
							
							<a href="#" title="Click để xem">
								<img src="<?php echo $pathImgProduct ?>upload_56430257bb264300b9a9d0581ed22a21_1024x1024.jpg" alt="Black Link" class="img-responsive center-block">
							</a>
							
							<a href="#" title="Click để xem">
								<img src="<?php echo $pathImgProduct ?>upload_77a9bc6745e3445dbf5b0045b38b7c66_1024x1024.jpg" alt="Black Link" class="img-responsive center-block">
							</a>
							
							<a href="#" title="Click để xem">
								<img src="<?php echo $pathimgproduct ?>upload_3f691c280a30444bae58809667e1417b_1024x1024.jpg" alt="Black Link" class="img-responsive center-block">
							</a>
							
						</div>
					</div>
					<div class="slider-has-video clearfix">
						<div class="slider slider-nav">
							
							<div class="fixs">
								<img src="<?php echo $pathimgproduct ?>upload_a89e9dd9b502466b97efbbf6bd5c41a3_compact.jpg" alt="Black Link" data-image="https://product.hstatic.net/200000268089/product/upload_a89e9dd9b502466b97efbbf6bd5c41a3.jpg">
							</div>
							
							<div class="fixs">
								<img src="<?php echo $pathimgproduct ?>upload_56430257bb264300b9a9d0581ed22a21_compact.jpg" alt="Black Link" data-image="https://product.hstatic.net/200000268089/product/upload_56430257bb264300b9a9d0581ed22a21.jpg">
							</div>
							
							<div class="fixs">
								<img src="<?php echo $pathimgproduct ?>upload_77a9bc6745e3445dbf5b0045b38b7c66_compact.jpg" alt="Black Link" data-image="https://product.hstatic.net/200000268089/product/upload_77a9bc6745e3445dbf5b0045b38b7c66.jpg">
							</div>
							
							<div class="fixs">
								<img src="<?php echo $pathimgproduct ?>upload_3f691c280a30444bae58809667e1417b_compact.jpg" alt="Black Link" data-image="https://product.hstatic.net/200000268089/product/upload_3f691c280a30444bae58809667e1417b.jpg">
							</div>
							
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-6 col-md-6 details-pro">
				<div class="product-top clearfix">
					<h1 class="title-head">Black Link</h1>
					
					<div class="sku-product">
						SKU: <span class="variant-sku">(Đang cập nhật...)</span>
						<span class="hidden">Evo Watch</span>
					</div>
						
				</div>
				<div>
					<div class="price-box clearfix">
						
						<div class="special-price">
							<span class="price product-price">3,400,000₫</span>
						</div> <!-- Giá -->
						
					</div>
					
<div class="inventory_quantity">
	<span class="stock-brand-title">Tình trạng:</span>
	
	<span class="a-stock a2"><link itemprop="availability" href="http://schema.org/InStock" />Còn hàng</span>
	
</div>
				</div>
				<div class="form-product">
					<form enctype="multipart/form-data" id="add-to-cart-form" action="https://evo-watch.myharavan.com/cart/add" method="post" class="clearfix form-inline">
						
						<div class="box-variant clearfix  hidden ">
							
							<input type="hidden" name="id" value="1065133589" />
							
						</div>
						<div class="clearfix form-group ">
							<div class="qty-ant clearfix custom-btn-number">
								<label>Số lượng:</label>
								<div class="custom custom-btn-numbers form-control">		
									<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
									<input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" />
									<button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
								</div>
							</div>
							<div class="btn-mua">
																	
								<button type="submit" data-role='addtocart' class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">
									<span class="txt-main">Mua ngay với giá <b class="product-price">3,400,000₫</b></span>
									<span class="text-add">Đặt mua giao hàng tận nơi</span>
								</button>
								
							</div>
						</div>
					</form>
				</div>
				<div class="clearfix"></div>
				<div class="hotline_product">
					Gọi đặt mua: <a href="tel:0123456789" title="0123456789">0123 456 789</a> <span>(miễn phí 8:30 - 21:30).</span>
				</div>
				
<div class="module_service_details clearfix">
	
	
	
	
	
	
	
	
	
	
	<div class="item_service clearfix">
		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="https://file.hstatic.net/200000268089/file/policy_images_2_2d048a42f9c04911b13c4f4004004fce.svg" alt="Miễn phí vận chuyển với đơn hàng từ 700.000đ" /> 
		<h4>Miễn phí vận chuyển với đơn hàng <strong>từ 700.000đ</strong></h4>
	</div>
	
	
	
	
	
	
	<div class="item_service clearfix">
		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="https://file.hstatic.net/200000268089/file/policy_images_3_126ec11654d74168aa76b63a37bde875.svg" alt="Bảo hành 10 năm do lỗi nhà sản xuất" /> 
		<h4>Bảo hành <strong>10 năm</strong> do lỗi nhà sản xuất</h4>
	</div>
	
	
	
	
	
	
	<div class="item_service clearfix">
		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="https://file.hstatic.net/200000268089/file/policy_images_4_2e64e49cece7495abb624c3c141e29d5.svg" alt="Cam kết 100% chính hãng" /> 
		<h4>Cam kết <strong>100% chính hãng</strong></h4>
	</div>
	
	
</div>

			</div>
			<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 margin-top-20">
				<div class="product-tab e-tabs padding-bottom-10 evo-tab-product-mobile">	
					<ul class="tabs tabs-title clearfix hidden-xs">	
						<li class="tab-link" data-tab="tab-1">Mô tả</li>
						<li class="tab-link" data-tab="tab-2">Giới thiệu</li>
						
					</ul>																									
					
					<div id="tab-1" class="tab-content active">
						<a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
							<span>Mô tả</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
								<path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
							</svg>
						</a>
						<div class="rte">
							
							
							<p>Đồng hồ MVMT Black Link dòng Classic với thiết kế tối giản tinh tế cho các quý ông hiện đại. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!</p>
<table>
<tbody>
<tr>
	<td>Loại máy</td>
	<td>Japanese Miyota Precison Quartz</td>
</tr>
<tr>
	<td>Hiển thị</td>
	<td>Analog</td>
</tr>
<tr>
	<td>Chất liệu vỏ</td>
	<td>316 Low Carbon&nbsp;Stainless Steel</td>
</tr>
<tr>
	<td>Đường kính vỏ</td>
	<td>45mm</td>
</tr>
<tr>
	<td>Độ dày vỏ</td>
	<td>9mm</td>
</tr>
<tr>
	<td>Chất liệu dây đeo</td>
	<td>316 Low Carbon&nbsp;Stainless Steel</td>
</tr>
<tr>
	<td>Chiều rộng dây đeo</td>
	<td>24mm</td>
</tr>
<tr>
	<td>Chất liệu mặt kính&nbsp;</td>
	<td>Mineral (Kính Khoáng Chất)</td>
</tr>
<tr>
	<td>Khả năng chịu nước</td>
	<td>3ATM (30m)</td>
</tr>
</tbody></table>
							
						</div>
					</div>
					
					
					<div id="tab-2" class="tab-content">
						<a class="evo-product-tabs-header hidden-lg hidden-md hidden-sm" href="javascript:void(0);">
							<span>Giới thiệu</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903" viewBox="0 0 5.658 9.903">
								<path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c" stroke-linecap="round" fill="none" transform="translate(-5428.5 -1331.44)"></path>
							</svg>
						</a>
						<div class="rte">
							<p>Kiến thức về đồng hồ, thông tin khuyến mãi, tin tức &amp; sự kiện, hình ảnh, video clip về đồng hồ đeo tay mới nhất hiện nay, cập nhật liên tục nhanh và đầy đủ...</p>
						</div>
					</div>
					
					
				</div>				
			</div>
		</div>
		
		
		
		
							
		
		<div class="row margin-top-20 margin-bottom-10">
			<div class="col-lg-12">
				<div class="related-product">
					<div class="home-title text-center">
						<h2><a href="../collections/hot-products.html" title="Sản phẩm liên quan">Sản phẩm <strong>liên quan</strong></a></h2>
					</div>
					<div class="evo-owl-product owl-carousel not-dqowl clearfix" data-dot="false" data-nav="true" data-lg-items='4' data-md-items='4' data-sm-items='3' data-xs-items="2" data-xss-items="2" data-margin='10' data-loop="false" data-autoplay="false">
						
						
						
						
						 
<div class="product-card">
	<a class="product-url" href="calm.html" title="Calm"></a>
	
	
	<span class="sale-box">- 34% </span>
	
	
	<div class="product-card__inner">
		<div class="product-card__image">
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_197af371cc8d4259b0ae51199f594855_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_197af371cc8d4259b0ae51199f594855_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_197af371cc8d4259b0ae51199f594855_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_197af371cc8d4259b0ae51199f594855_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_197af371cc8d4259b0ae51199f594855_large.jpg" class="product-card-image-front img-responsive center-block" alt="Calm" />
			</picture>
			
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_83c446b530d946168b4f794d887ec178_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_83c446b530d946168b4f794d887ec178_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_83c446b530d946168b4f794d887ec178_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_83c446b530d946168b4f794d887ec178_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_83c446b530d946168b4f794d887ec178_large.jpg" class="product-card-image-back img-responsive center-block" alt="Calm" />
			</picture>
			
		</div>
		<h4 class="product-single__series">Khác</h4>
		<h3 class="product-card__title">Calm</h3>
		<div class="product-price">
			
			
			<strong>2,299,000₫</strong>
			
			<span>3,500,000₫</span>
			
			
			
		</div>
	</div>
	<form action="https://evo-watch.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-1029334234">
		<div class="product-card__actions">
			
			
			<input type="hidden" name="id" value="1065133596" />
			<a class="button ajax_addtocart add_to_cart" href="calm.html" title="Thêm vào giỏ hàng">Thêm vào giỏ hàng</a>
			
			
		</div>
	</form> 
</div>
						
						
						
						 
<div class="product-card">
	<a class="product-url" href="cognac-leather-20mm.html" title="Cognac Leather 20mm"></a>
	
	
	
	<div class="product-card__inner">
		<div class="product-card__image">
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_ec5eef3a2b9748479718d99e9b1e7afd_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_ec5eef3a2b9748479718d99e9b1e7afd_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_ec5eef3a2b9748479718d99e9b1e7afd_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_ec5eef3a2b9748479718d99e9b1e7afd_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_ec5eef3a2b9748479718d99e9b1e7afd_large.jpg" class="product-card-image-front img-responsive center-block" alt="Cognac Leather 20mm" />
			</picture>
			
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_585db1e6d4a7436782bca00b017a606a_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_585db1e6d4a7436782bca00b017a606a_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_585db1e6d4a7436782bca00b017a606a_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_585db1e6d4a7436782bca00b017a606a_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_585db1e6d4a7436782bca00b017a606a_large.jpg" class="product-card-image-back img-responsive center-block" alt="Cognac Leather 20mm" />
			</picture>
			
		</div>
		<h4 class="product-single__series">Khác</h4>
		<h3 class="product-card__title">Cognac Leather 20mm</h3>
		<div class="product-price">
			
			
			<strong>449,000₫</strong>
			
			
		</div>
	</div>
	<form action="https://evo-watch.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-1029334219">
		<div class="product-card__actions">
			
			
			<input type="hidden" name="id" value="1065133581" />
			<a class="button ajax_addtocart add_to_cart" href="cognac-leather-20mm.html" title="Thêm vào giỏ hàng">Thêm vào giỏ hàng</a>
			
			
		</div>
	</form> 
</div>
						
						
						
						 
<div class="product-card">
	<a class="product-url" href="fearless.html" title="Fearless"></a>
	
	
	
	<div class="product-card__inner">
		<div class="product-card__image">
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_c6354bb93e414848a119d80815ed2770_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_c6354bb93e414848a119d80815ed2770_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_c6354bb93e414848a119d80815ed2770_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_c6354bb93e414848a119d80815ed2770_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_c6354bb93e414848a119d80815ed2770_large.jpg" class="product-card-image-front img-responsive center-block" alt="Fearless" />
			</picture>
			
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_597f3b2dfeda4341a2b08653c49345c4_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_597f3b2dfeda4341a2b08653c49345c4_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_597f3b2dfeda4341a2b08653c49345c4_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_597f3b2dfeda4341a2b08653c49345c4_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_597f3b2dfeda4341a2b08653c49345c4_large.jpg" class="product-card-image-back img-responsive center-block" alt="Fearless" />
			</picture>
			
		</div>
		<h4 class="product-single__series">Classic</h4>
		<h3 class="product-card__title">Fearless</h3>
		<div class="product-price">
			
			
			<strong>2,199,000₫</strong>
			
			
		</div>
	</div>
	<form action="https://evo-watch.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-1029334235">
		<div class="product-card__actions">
			
			
			<a class="button ajax_addtocart" href="fearless.html" title="Hết hàng">Hết hàng</a>
			
			
		</div>
	</form> 
</div>
						
						
						
						 
<div class="product-card">
	<a class="product-url" href="gotham.html" title="Gotham"></a>
	
	
	
	<div class="product-card__inner">
		<div class="product-card__image">
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_2dd089639b3b4d12ad93d13d10a1a979_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_2dd089639b3b4d12ad93d13d10a1a979_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_2dd089639b3b4d12ad93d13d10a1a979_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_2dd089639b3b4d12ad93d13d10a1a979_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_2dd089639b3b4d12ad93d13d10a1a979_large.jpg" class="product-card-image-front img-responsive center-block" alt="Gotham" />
			</picture>
			
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_0448689bf05b4344b310d119f8c4c4bc_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_0448689bf05b4344b310d119f8c4c4bc_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_0448689bf05b4344b310d119f8c4c4bc_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_0448689bf05b4344b310d119f8c4c4bc_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_0448689bf05b4344b310d119f8c4c4bc_large.jpg" class="product-card-image-back img-responsive center-block" alt="Gotham" />
			</picture>
			
		</div>
		<h4 class="product-single__series">Khác</h4>
		<h3 class="product-card__title">Gotham</h3>
		<div class="product-price">
			
			
			<strong>4,600,000₫</strong>
			
			
		</div>
	</div>
	<form action="https://evo-watch.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-1029334228">
		<div class="product-card__actions">
			
			
			<input type="hidden" name="id" value="1065133590" />
			<a class="button ajax_addtocart add_to_cart" href="gotham.html" title="Thêm vào giỏ hàng">Thêm vào giỏ hàng</a>
			
			
		</div>
	</form> 
</div>
						
						
						
						 
<div class="product-card">
	<a class="product-url" href="gunmetal-sandstone.html" title="Gunmetal Sandstone"></a>
	
	
	
	<div class="product-card__inner">
		<div class="product-card__image">
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_7511ef8b6b3148608a879058d64231de_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_7511ef8b6b3148608a879058d64231de_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_7511ef8b6b3148608a879058d64231de_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_7511ef8b6b3148608a879058d64231de_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_7511ef8b6b3148608a879058d64231de_large.jpg" class="product-card-image-front img-responsive center-block" alt="Gunmetal Sandstone" />
			</picture>
			
			<picture>
				<source 
						media="(min-width: 1200px)"
						srcset="<?php echo $pathimgproduct ?>upload_f739806990c84395bcc8a8fa006c1a85_large.jpg">
				<source 
						media="(min-width: 992px)"
						srcset="<?php echo $pathimgproduct ?>upload_f739806990c84395bcc8a8fa006c1a85_large.jpg">
				<source 
						media="(min-width: 569px)"
						srcset="<?php echo $pathimgproduct ?>upload_f739806990c84395bcc8a8fa006c1a85_large.jpg">
				<source 
						media="(min-width: 480px)"
						srcset="<?php echo $pathimgproduct ?>upload_f739806990c84395bcc8a8fa006c1a85_medium.jpg">
				<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="//product.hstatic.net/200000268089/product/upload_f739806990c84395bcc8a8fa006c1a85_large.jpg" class="product-card-image-back img-responsive center-block" alt="Gunmetal Sandstone" />
			</picture>
			
		</div>
		<h4 class="product-single__series">Khác</h4>
		<h3 class="product-card__title">Gunmetal Sandstone</h3>
		<div class="product-price">
			
			
			<strong>4,500,000₫</strong>
			
			
		</div>
	</div>
	<form action="https://evo-watch.myharavan.com/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-1029334229">
		<div class="product-card__actions">
			
			
			<input type="hidden" name="id" value="1065133591" />
			<a class="button ajax_addtocart add_to_cart" href="gunmetal-sandstone.html" title="Thêm vào giỏ hàng">Thêm vào giỏ hàng</a>
			
			
		</div>
	</form> 
</div>
						
						
					</div>
				</div>
			</div>
		</div>	
							
		
	</div>
</section>
<script>
	$('.slider-nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: false,
		infinite: false,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 4
				}
			}
		]
	});
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		infinite: false,
		asNavFor: '.slider-nav',
		adaptiveHeight: true
	});
	$('.slider-big-video .slider-for a').each(function() {
		$(this).attr('rel','lightbox-demo'); 
	});
	var product = {"available":true,"compare_at_price_max":0.0,"compare_at_price_min":0.0,"compare_at_price_varies":false,"compare_at_price":0.0,"content":null,"description":"<p>Đồng hồ MVMT Black Link dòng Classic với thiết kế tối giản tinh tế cho các quý ông hiện đại. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!</p>\n<table>\n<tbody>\n<tr>\n\t<td>Loại máy</td>\n\t<td>Japanese Miyota Precison Quartz</td>\n</tr>\n<tr>\n\t<td>Hiển thị</td>\n\t<td>Analog</td>\n</tr>\n<tr>\n\t<td>Chất liệu vỏ</td>\n\t<td>316 Low Carbon&nbsp;Stainless Steel</td>\n</tr>\n<tr>\n\t<td>Đường kính vỏ</td>\n\t<td>45mm</td>\n</tr>\n<tr>\n\t<td>Độ dày vỏ</td>\n\t<td>9mm</td>\n</tr>\n<tr>\n\t<td>Chất liệu dây đeo</td>\n\t<td>316 Low Carbon&nbsp;Stainless Steel</td>\n</tr>\n<tr>\n\t<td>Chiều rộng dây đeo</td>\n\t<td>24mm</td>\n</tr>\n<tr>\n\t<td>Chất liệu mặt kính&nbsp;</td>\n\t<td>Mineral (Kính Khoáng Chất)</td>\n</tr>\n<tr>\n\t<td>Khả năng chịu nước</td>\n\t<td>3ATM (30m)</td>\n</tr>\n</tbody></table>","featured_image":"https://product.hstatic.net/200000268089/product/upload_a89e9dd9b502466b97efbbf6bd5c41a3.jpg","handle":"black-link","id":1029334227,"images":["https://product.hstatic.net/200000268089/product/upload_a89e9dd9b502466b97efbbf6bd5c41a3.jpg","<?php echo $pathimgproduct ?>upload_56430257bb264300b9a9d0581ed22a21.jpg","<?php echo $pathimgproduct ?>upload_77a9bc6745e3445dbf5b0045b38b7c66.jpg","https://product.hstatic.net/200000268089/product/upload_3f691c280a30444bae58809667e1417b.jpg"],"options":["Tiêu đề"],"price":340000000.0,"price_max":340000000.0,"price_min":340000000.0,"price_varies":false,"tags":[],"template_suffix":null,"title":"Black Link","type":"Khác","url":"/products/black-link","pagetitle":"Black Link","metadescription":"Đồng hồ MVMT Black Link dòng Classic với thiết kế tối giản tinh tế cho các quý ông hiện đại. Nhập khẩu chính hãng từ US. Free Ship toàn quốc!","variants":[{"id":1065133589,"barcode":null,"available":true,"price":340000000.0,"sku":null,"option1":"Default Title","option2":"","option3":"","options":["Default Title"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"Default Title","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":null}],"vendor":"Khác","published_at":"2020-12-06T12:44:26.181Z","created_at":"2020-12-06T12:44:28.786Z","not_allow_promotion":false};
	var variantsize = false;
	var alias = 'black-link';
	var getLimit = 10;
	var productOptionsSize = 1;
	var selectCallback = function(variant, selector) {
		if (variant) {
			var form = jQuery('#' + selector.domIdPrefix).closest('form');
			for (var i=0,length=variant.options.length; i<length; i++) {
				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
				if (radioButton.size()) {
					radioButton.get(0).checked = true;
				}
			}
		}
		var addToCart = jQuery('.form-product .btn-cart'),
			form = jQuery('.form-product .form-group'),
			productPrice = jQuery('.details-pro .special-price .product-price'),
			productPrice2 = '',
			qty = jQuery('.inventory_quantity .a-stock'),
			comparePrice = jQuery('.details-pro .old-price .product-price-old'),
			comparePriceText = jQuery('.details-pro .old-price'),
			savePrice = jQuery('.details-pro .save-price .product-price-save'),
			savePriceText = jQuery('.details-pro .save-price'),
			qtyBtn = jQuery('.form-product .form-group .custom-btn-number'),
			BtnSold = jQuery('.form-product .form-group .btn-mua'),
			product_sku = jQuery('.details-product .sku-product .variant-sku');
		if (variant && variant.sku != "" && variant.sku != null) {
			product_sku.html(variant.sku);
		} else {
			product_sku.html('(Đang cập nhật...)');
		}
		if (variant && variant.available) {
			if(variant.inventory_management == "haravan"){
				if (variant.inventory_quantity != 0) {
					qty.html('<span class="a-stock">Còn hàng</span>');
				} else if (variant.inventory_quantity == ''){
					if (variant.inventory_policy == "continue"){
						qty.html('<span class="a-stock">Còn hàng</span>');
					} else {
						qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
					}
				}
			}else{
				qty.html('<span class="a-stock">Còn hàng</span>');
			}
			addToCart.html('<span class="txt-main">Mua ngay với giá <b class="product-price"></b></span><span class="text-add">Đặt mua giao hàng tận nơi</span>').removeAttr('disabled');	
			BtnSold.removeClass('btnsold');
			qtyBtn.removeClass('hidden');
			if(variant.price == 0){
				productPrice.html('Liên hệ');
				productPrice2 == 'Liên hệ';
				comparePrice.hide();
				savePrice.hide();
				comparePriceText.hide();
				savePriceText.hide();
				form.addClass('hidden');
			}else{
				form.removeClass('hidden');	
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
													 productPrice2 = Haravan.formatMoney(variant.price, "{{amount}}₫");
													 addToCart.html('<span class="txt-main">Mua ngay với giá <b class="product-price">' + productPrice2 + '</b></span><span class="text-add">Đặt mua giao hàng tận nơi</span>');
								  if ( variant.compare_at_price > variant.price ) {
					comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
														 savePrice.html(Haravan.formatMoney(variant.compare_at_price - variant.price, "{{amount}}₫")).show();
														 comparePriceText.show();
									  savePriceText.show();
				} else {
					comparePrice.hide();   
					savePrice.hide();
					comparePriceText.hide();
					savePriceText.hide();
				}       										
			}
		} else {	
			qty.html('<span class="a-stock a-stock-out">Hết hàng</span>');
			addToCart.html('<span class="txt-main"><i class="fa fa-cart-arrow-down padding-right-10"></i> Hết hàng</span>').attr('disabled', 'disabled');
			BtnSold.addClass('btnsold');
			qtyBtn.addClass('hidden');
			if(variant){
				if(variant.price != 0){
					form.removeClass('hidden');
					productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
														 if ( variant.compare_at_price > variant.price ) {
									  comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫")).show();
									  savePrice.html(Haravan.formatMoney(variant.compare_at_price - variant.price, "{{amount}}₫")).show();
									  comparePriceText.show();
					savePriceText.show();
				} else {
					comparePrice.hide();  
					savePrice.hide();
					comparePriceText.hide();
					savePriceText.hide();
				}     
			}else{
				productPrice.html('Liên hệ');
				comparePrice.hide();
				savePrice.hide();
				comparePriceText.hide();
				savePriceText.hide();
				form.addClass('hidden');
			}
		}else{
			productPrice.html('Liên hệ');
			comparePrice.hide();
			savePrice.hide();
			comparePriceText.hide();
			savePriceText.hide();
			form.addClass('hidden');
		}
	}
	/*begin variant image*/
	if (variant && variant.featured_image) {  
		var originalImage = jQuery(".slider-nav img");
		var newImage = variant.featured_image;
		var element = originalImage[0];
		Haravan.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
			$('.slider-nav .slick-slide').each(function(){
				var $this = $(this);
				var imgThis = $this.find('img').attr('src');
				if(newImageSizedSrc == imgThis.split("?")[0]){
					var pst = $this.attr('data-slick-index');
					jQuery(".slider-for").slick( 'slickGoTo', pst);
				}
			});
		});
	}
	/*end of variant image*/
	};
	jQuery(function($) {
		
		
		$('.selector-wrapper:eq(0)').prepend('<label>Tiêu đề</label>');
											 
											 
											 $('.selector-wrapper').hide();
		 
		$('.selector-wrapper').css({
			'text-align':'left',
			'margin-bottom':'15px'
		});
	});
	jQuery('.swatch :radio').change(function() {
		var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
		var optionValue = jQuery(this).val();
		jQuery(this)
			.closest('form')
			.find('.single-option-selector')
			.eq(optionIndex)
			.val(optionValue)
			.trigger('change');
	});
	function scrollToxx() {
		if ($(window).width() > 767) {
			$('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
			$('.tab-content, .product-tab .tab-link').removeClass('current');
			$('#tab-3, .product-tab .tab-link:nth-child(3)').addClass('current');
			return false;
		}else{
			$('html, body').animate({ scrollTop: $('.product-tab.e-tabs #tab-3').offset().top }, 'slow');
			$('.product-tab.e-tabs #tab-3').addClass('active');
		}
	}
	function scrollToxxs() {
		$('html, body').animate({ scrollTop: $('.product-tab.e-tabs').offset().top }, 'slow');
		return false;
	}
	$('.btn--view-more .less-text').click(function(){
		scrollToxxs();
	})
</script>
		

<footer class="footer bg-footer">
	<div class="site-footer">		
		<div class="container">			
			<div class="footer-inner padding-bottom-20">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget footer-contact">
							<h3>
								<a href="../index.html" class="logo-wrapper" title="Evo Watch">
									<img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" data-lazyload="https://file.hstatic.net/200000268089/file/logo_1ce545843a2d4fe9850188841768f3b3.png" alt="Evo Watch" class="img-responsive center-block" />
								</a>
							</h3>
							<ul class="list-menu">
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> 30 Đường 2/9, Phường Bình Hiên, Quận Hải Châu, Đà Nẵng</li>
								<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:0123456789" title="0123456789">0123 456 789</a></li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:evoteamthemes@gmail.com" title="evoteamthemes@gmail.com">evoteamthemes@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget had-click">
							<h3>Mua hàng <span class="Collapsible__Plus"></span></h3>
							<ul class="list-menu has-click">
								
								<li><a href="../index.html" title="Trang chủ" rel="nofollow">Trang chủ</a></li>
								
								<li><a href="../pages/about-us.html" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>
								
								<li><a href="../collections/all.html" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
								
								<li><a href="../collections/nam.html" title="Nam" rel="nofollow">Nam</a></li>
								
								<li><a href="../collections/nu.html" title="Nữ" rel="nofollow">Nữ</a></li>
								
								<li><a href="../collections/phu-kien.html" title="Phụ kiện" rel="nofollow">Phụ kiện</a></li>
								
								<li><a href="../blogs/news.html" title="Blog" rel="nofollow">Blog</a></li>
								
								<li><a href="../pages/lien-he.html" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget had-click">
							<h3>Dịch vụ khách hàng <span class="Collapsible__Plus"></span></h3>
							<ul class="list-menu has-click">
								
								<li><a href="../index.html" title="Trang chủ" rel="nofollow">Trang chủ</a></li>
								
								<li><a href="../pages/about-us.html" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>
								
								<li><a href="../collections/all.html" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
								
								<li><a href="../collections/nam.html" title="Nam" rel="nofollow">Nam</a></li>
								
								<li><a href="../collections/nu.html" title="Nữ" rel="nofollow">Nữ</a></li>
								
								<li><a href="../collections/phu-kien.html" title="Phụ kiện" rel="nofollow">Phụ kiện</a></li>
								
								<li><a href="../blogs/news.html" title="Blog" rel="nofollow">Blog</a></li>
								
								<li><a href="../pages/lien-he.html" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="footer-widget footer-subcrible">
							<h3>Đăng ký nhận tin</h3>           
							<p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
							<form accept-charset='UTF-8' action='https://evo-watch.myharavan.com/account/contact' class='contact-form' method='post'>
<input name='form_type' type='hidden' value='customer'>
<input name='utf8' type='hidden' value='✓'>

							
							<input type="hidden" id="contact_tags" name="contact[tags]" value="Đăng kí nhận tin" /> 
							<input type="email" class="form-control" value="" placeholder="Email của bạn" name="contact[email]" id="mail">
							<button class="evo-button btn btn-default" name="subscribe" id="subscribe" type="submit">Đăng ký</button>
							
<input id='bc9adeef20b94435b031910d9c4f8d32' name='g-recaptcha-response' type='hidden'><script src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('bc9adeef20b94435b031910d9c4f8d32').value = token;});});</script></form>
							<div class="footer-payment">
								<ul class="list-menu clearfix">
									
									
									
									
									<li class="item">
										<img src="https://file.hstatic.net/200000268089/file/payment_1_85546345cde64c20b5b74bbbbf1c2740.svg" alt="" />
									</li>
									
									
									
									
									
									<li class="item">
										<img src="https://file.hstatic.net/200000268089/file/payment_2_ac09d056e2884e1db2b41a3a236b2340.svg" alt="" />
									</li>
									
									
									
									
									
									<li class="item">
										<img src="https://file.hstatic.net/200000268089/file/payment_3_82bbadbd26234bebb6d32efe70f28424.svg" alt="" />
									</li>
									
									
									
									
									
									<li class="item">
										<img src="https://file.hstatic.net/200000268089/file/payment_4_c6d2dcf421ec47b38f16e77b7c698a2f.svg" alt="" />
									</li>
									
									
									
									
									
									<li class="item">
										<img src="https://file.hstatic.net/200000268089/file/payment_5_8f83dcfe06624a2398ff5718cefd508e.svg" alt="" />
									</li>
									
									
									
									
									
									
									
									
									
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="copyright clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<span>© Bản quyền thuộc về <b>Evo Themes</b> <span class="s480-f">|</span> Cung cấp bởi <a href="javascript:;">Haravan</a></span>
					
				</div>
			</div>
			
			<div class="back-to-top" title="Lên đầu trang">Lên đầu trang <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
			
		</div>
	</div>
</footer> 
		<div class="backdrop__body-backdrop___1rvky"></div>
		<link rel="preload" as="script" href="../../cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" />
		<script src='../../cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js' type='text/javascript'></script>
		<script>$.validate({});</script>	
		<div class="ajax-load"> 
	<span class="loading-icon">
		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</span>
</div>
<div class="loading awe-popup">
	<div class="overlay"></div>
	<div class="loader" title="2">
		<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
				<animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
				<animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>
	</div>
</div>
<div class="addcart-popup product-popup awe-popup">
	<div class="overlay no-background"></div>
	<div class="content">
		<div class="row row-noGutter">
			<div class="col-xl-6 col-xs-12">
				<div class="btn btn-full btn-primary a-left popup-title"><i class="fa fa-check"></i>Thêm vào giỏ hàng thành công
				</div>
				<a href="javascript:void(0)" class="close-window close-popup"><i class="fa fa-close"></i></a>
				<div class="info clearfix">
					<div class="product-image margin-top-5"><img alt="popup" src="../../file.hstatic.net/200000268089/file/logo_1ce545843a2d4fe9850188841768f3b3.png" style="max-width:150px; height:auto"/></div>
					<div class="product-info"><p class="product-name"></p><p class="quantity color-main"><span>Số lượng: </span></p><p class="total-money color-main"><span>Tổng tiền: </span></p></div>
					<div class="actions"><button class="btn  btn-primary  margin-top-5 btn-continue">Tiếp tục mua hàng</button><button class="btn btn-gray margin-top-5" onclick="window.location='../cart.html'">Kiểm tra giỏ hàng</button></div> 
				</div>
			</div>			
		</div>
	</div>    
</div>
<div class="error-popup awe-popup"><div class="overlay no-background"></div><div class="popup-inner content"><div class="error-message"></div></div></div>
		<script>
	$(document).on('click', '.add_to_cart_detail', function(e) {  
		e.preventDefault();   
		$('#quickview').modal('hide');
		var $this = $(this);
		var form = $this.parents('form'); 
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			async: false,
			data: form.serialize(),
			dataType: 'json',
			error: addToCartFail,
			beforeSend: function() {  
			},
			success: addToCartSuccess,
			cache: false
		});
	});
	var GLOBAL = {
		common : {
			init: function(){
				$('.add_to_cart').bind( 'click', addToCart );
			}
		},
		templateIndex : {
			init: function(){
			}
		},
		templateProduct : {
			init: function(){
			}
		},
		templateCart : {
			init: function(){
			}
		}
	}
	var UTIL = {
		fire : function(func,funcname, args){
			var namespace = GLOBAL;
			funcname = (funcname === undefined) ? 'init' : funcname;
			if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
				namespace[func][funcname](args);
			}
		},
		loadEvents : function(){
			var bodyId = document.body.id;
			UTIL.fire('common');
			$.each(document.body.className.split(/\s+/),function(i,classnm){
				UTIL.fire(classnm);
				UTIL.fire(classnm,bodyId);
			});
		}
	};
	$(document).ready(UTIL.loadEvents);
	Number.prototype.formatMoney = function(c, d, t){
		var n = this, 
				c = isNaN(c = Math.abs(c)) ? 2 : c, 
				d = d == undefined ? "." : d, 
				t = t == undefined ? "." : t, 
				s = n < 0 ? "-" : "", 
				i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
				j = (j = i.length) > 3 ? j % 3 : 0;
		return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	};
	function addToCart(e){
		if (typeof e !== 'undefined') e.preventDefault();
		var $this = $(this);
		var form = $this.parents('form');   
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			async: false,
			data: form.serialize(),
			dataType: 'json',
			error: addToCartFail,
			beforeSend: function() {  
			},
			success: addToCartSuccess,
			cache: false
		});
	}
	function addToCartSuccess (jqXHR, textStatus, errorThrown){
		$.ajax({
			type: 'GET',
			url: '/cart.js',
			async: false,
			cache: false,
			dataType: 'json',
			success: function (cart){
				awe_hidePopup('.loading');
				Haravan.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
				Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
				Haravan.updateCartPageForm(cart, '.cart_desktop_page .page_cart');
			}
		});
		var url_product = jqXHR['url'];
		var class_id = jqXHR['product_id'];
		var name = jqXHR['title'];
		var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
		var id = jqXHR['variant_id'];
		if( jqXHR['image'] != null){
			var src = Haravan.resizeImage(jqXHR['image'], 'medium');
		}else{
			var src = "../../theme.hstatic.net/200000247197/1000652159/14/noimage.gif";
		}
		var dataList = $(".item-name a").map(function() {
			var plus = $(this).text();
			return plus;
		}).get();
		$('.title-popup-cart .cart-popup-name').html('<a href="'+ url_product +'"style="color:red;" title="'+name+'">'+ name + '</a> ');
		var nameid = dataList,
				found = $.inArray(name, nameid);
		var textfind = found;
		$(".item-info > p:contains("+id+")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm!</span>');
		var windowW = $(window).width();
		if(windowW > 768){        
			$('#popup-cart').modal();
		}else{
			$('#myModal').html('');
			var $popupMobile = '<div class="modal-dialog"><div class="modal-content"><div class="modal-header">'
			+ '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>'
			+ '<h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng thành công</h4></div>'
			+ '<div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1">'
			+ '<img width="70px" src="'+ src +'" alt="'+ jqXHR['title'] +'"></div></div>'
			+ '<div class="media-body"><div class="product-title">'+ jqXHR['title'] +'</div>'
			+ '<div class="product-new-price"><span>' + (jqXHR['price']).formatMoney(0) + ' đ</span></div></div></div>'
			+ '<button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button>'
			+ '<a href="/checkout" class="btn btn-block btn-red">Tiến hành thanh toán »</a></div></div></div>';
			$('#myModal').html($popupMobile);
			$('#myModal').modal();
			clearTimeout($('#myModal').data('hideInterval'));
		}
	}
	function addToCartFail(jqXHR, textStatus, errorThrown){
		var response = $.parseJSON(jqXHR.responseText);
		var $info = '<div class="error">'+ response.description +'</div>';
	}
	$(document).on('click', ".remove-item-cart", function () {
		var variantId = $(this).attr('data-id');
		removeItemCart(variantId);
	});
	$(document).on('click', ".items-count", function () {
		$(this).parent().children('.items-count').prop('disabled', true);
		var thisBtn = $(this);
		var variantId = $(this).parent().find('.variantID').val();
		var qty =  $(this).parent().children('.number-sidebar').val();
		updateQuantity(qty, variantId);
	});
	$(document).on('change', ".number-sidebar", function () {
		var variantId = $(this).parent().children('.variantID').val();
		var qty =  $(this).val();
		updateQuantity(qty, variantId);
	});
	function updateQuantity (qty, variantId){
		var variantIdUpdate = variantId;
		$.ajax({
			type: "POST",
			url: "/cart/change.js",
			data: {"quantity": qty, "id": variantId},
			dataType: "json",
			success: function (cart, variantId) {
				Haravan.onCartUpdateClick(cart, variantIdUpdate);
			},
			error: function (qty, variantId) {
				Haravan.onError(qty, variantId)
			}
		})
	}
	function removeItemCart (variantId){
		var variantIdRemove = variantId;
		$.ajax({
			type: "POST",
			url: "/cart/change.js",
			data: {"quantity": 0, "id": variantId},
			dataType: "json",
			success: function (cart, variantId) {
				Haravan.onCartRemoveClick(cart, variantIdRemove);
				$('.productid-'+variantIdRemove).remove();
				if($('.tbody-popup>div').length == '0' ){
					$('#popup-cart').modal('hide');
				}
				if($('.list-item-cart>li').length == '0' ){
					$('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>');
				}
				if($('.cart_page_mobile>div').length == '0' ){
					$('.cart_page_mobile').remove();
					$('.header-cart-price').remove();
					$('.header-cart').remove();
					jQuery('<div class="cart-empty">'
								 + '<img src="//theme.hstatic.net/200000268089/1000665157/14/empty-cart_large.png" class="img-responsive center-block" alt="Giỏ hàng trống" />'
								 + '<div class="btn-cart-empty">'
								 + '<a class="btn btn-default" href="/" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>'
								 + '</div>'
								 + '</div>').appendTo('.header-cart-content');
				}
				if($('.cart-tbody>div').length == '0' ){
					$('.bg-cart-page').remove();
					$('.bg-cart-page-mobile').remove();
					jQuery('<div class="bg-cart-page" style="min-height: auto"><p>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="../index.html">cửa hàng</a> để tiếp tục mua sắm.</p></div>').appendTo('.cart');
				}
				if($('.cart-tbody>div').length == '0' ){
					$('.bg-cart-page').remove();
					$('.bg-cart-page-mobile').remove();
					$('.cart_des_page').remove();
					jQuery('<div class="cart-empty">'
								 + '<img src="//theme.hstatic.net/200000268089/1000665157/14/empty-cart_large.png" class="img-responsive center-block" alt="Giỏ hàng trống" />'
								 + '<div class="btn-cart-empty">'
								 + '<a class="btn btn-default" href="/" title="Tiếp tục mua sắms">Tiếp tục lựa chọn</a>'
								 + '</div>'
								 + '</div>').appendTo('.cart_desktop_page');
				}
			},
			error: function (variantId, r) {
				Haravan.onError(variantId, r)
			}
		})
	}
	Haravan.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
		if ((typeof cart_summary_id) === 'string') {
			var cart_summary = jQuery(cart_summary_id);
			if (cart_summary.length) {
				cart_summary.empty();      
				jQuery.each(cart, function(key, value) {
					if (key === 'items') {
						var table = jQuery(cart_summary_id);           
						if (value.length) {   
							jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
							jQuery.each(value, function(i, item) {  
								var src = item.image;
								if(src == null){
									src = "../../theme.hstatic.net/200000247197/1000652159/14/noimage.gif";
								}
								var buttonQty = "";
								if(item.quantity == '1'){
									buttonQty = 'disabled';
								}else{
									buttonQty = '';
								}
								jQuery('<li class="item productid-' + item.variant_id +'"><a class="product-image" href="' + item.url + '" title="' + item.title + '">'
											 + '<img alt="'+  item.title  + '" src="' + src +  '"width="'+ '80' +'"\></a>'
											 + '<div class="detail-item"><div class="product-details"> <a href="javascript:;" data-id="'+ item.variant_id +'" title="Xóa" class="remove-item-cart fa fa-remove">&nbsp;</a>'
											 + '<p class="product-name"> <a href="' + item.url + '" title="' + item.title + '">' + item.title + '</a></p></div>'
											 + '<div class="product-details-bottom"><span class="price pricechange">' + Haravan.formatMoney(item.price, "{{amount}}₫") + '</span>'
											 + '<div class="quantity-select"><input class="variantID" type="hidden" name="id" value="'+ item.variant_id +'"><button onClick="var result = document.getElementById(\'qty'+ item.variant_id +'\'); var qty'+ item.variant_id +' = result.value; if( !isNaN( qty'+ item.variant_id +' ) &amp;&amp; qty'+ item.variant_id +' &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus" ' + buttonQty + ' type="button">–</button><input type="text" disabled maxlength="3" min="1" onchange="if(this.value == 0)this.value=1;" class="input-text number-sidebar qty'+ item.variant_id +'" id="qty'+ item.variant_id +'" name="Lines" id="updates_'+ item.variant_id +'" size="4" value="'+ item.quantity +'"><button onClick="var result = document.getElementById(\'qty'+ item.variant_id +'\'); var qty'+ item.variant_id +' = result.value; if( !isNaN( qty'+ item.variant_id +' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div></div></li>').appendTo(table.children('.list-item-cart'));
							}); 
							jQuery('<div><div class="top-subtotal">Tổng cộng: <span class="price">' + Haravan.formatMoney(cart.total_price, "{{amount}}₫") + '</span></div></div>').appendTo(table);
							jQuery('<div><div class="actions clearfix"><a href="/checkout" class="btn btn-gray btn-checkout" title="Thanh toán"><span>Thanh toán</span></a><a href="/cart" class="view-cart btn btn-white margin-left-5" title="Giỏ hàng"><span>Giỏ hàng</span></a></div></div>').appendTo(table);
						}
						else {
							jQuery('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>').appendTo(table);
						}
					}
				});
			}
		}
		updateCartDesc(cart);
		var numInput = document.querySelector('#cart-sidebar input.input-text');
		if (numInput != null){
			numInput.addEventListener('input', function(){
				var num = this.value.match(/^\d+$/);
				if (num == 0) {
					this.value = 1;
				}
				if (num === null) {
					this.value = "";
				}
			}, false)
		}
	}
	Haravan.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
		if ((typeof cart_summary_id) === 'string') {
			var cart_summary = jQuery(cart_summary_id);
			if (cart_summary.length) {
				cart_summary.empty();      
				jQuery.each(cart, function(key, value) {
					if (key === 'items') {
						var table = jQuery(cart_summary_id);           
						if (value.length) {  
							var pageCart = '<div class="cart page_cart cart_des_page hidden-xs-down">'
							+ '<div class="col-xs-9 cart-col-1">'
							+ '<div class="cart-tbody">'
							+ '</div>'
							+ '</div>'
							+ '</div>';
							var pageCartCheckout = '<div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">'
							+ '<div id="right-affix">'
							+ '<div class="each-row">'
							+ '<div class="box-style fee">'
							+ '<p class="list-info-price">'
							+ '<span>Tạm tính: </span>'
							+ '<strong class="totals_price price _text-right text_color_right1">65756756756</strong></p></div>'
							+ '<div class="box-style fee">'
							+ '<div class="total2 clearfix">'
							+ '<span class="text-label">Thành tiền: </span>'
							+ '<div class="amount">'
							+ '<p><strong class="totals_price">' + Haravan.formatMoney(cart.total_price, "{{amount}}₫") + '</strong></p>'
							+ '</div></div></div>'
							+ '<button class="button btn btn-large btn-block btn-danger btn-checkout evo-button" title="Thanh toán ngay" type="button" onclick="window.location.href=\'/checkout\'">Thanh toán ngay</button>'
							+ '<button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'">Tiếp tục mua hàng</button>'
							+ '</div></div></div>';
							jQuery(pageCart).appendTo(table);
							jQuery.each(value, function(i, item) {
								var buttonQty = "";
								if(item.quantity == '1'){
									buttonQty = 'disabled';
								}else{
									buttonQty = '';
								}
								var link_img1 = Haravan.resizeImage(item.image, 'medium');
								if(link_img1=="null" || link_img1 =='' || link_img1 ==null){
									link_img1 = '../../theme.hstatic.net/200000247197/1000652159/14/noimage.gif';
								}
								if(item.price == 0){
									var price = "Tặng kèm";
									var hidden = "hidden";
								}else{
									var hidden = "";
									var price = Haravan.formatMoney(item.price, "{{amount}}₫");
								}
								var title_va = item.variant_options;
								if( title_va == 'Default Title'){
									title_va = "";
								}else {
									title_va = item.variant_options;
								}
								var item_price = item.price * item.quantity;
								var pageCartItem = '<div class="row shopping-cart-item productid-' + item.variant_id +'">'
								+ '<div class="col-xs-3 img-thumnail-custom">'
								+ '<p class="image">'
								+ '<a href="' + item.url + '" title="' + item.title + '" target="_blank">'
								+ '<img class="img-responsive" src="' + link_img1 +  '" alt="' + item.title + '" />'
								+ '</a>'
								+ '</p>'
								+ '</div>'
								+ '<div class="col-right col-xs-9">'
								+ '<div class="box-info-product">'
								+ '<p class="name">'
								+ '<a href="' + item.url + '" title="' + item.title + '" target="_blank">' + item.title + '</a>'
								+ '</p>'
								+ '<p class="seller-by">' + title_va + '</p>'
								+ '<p class="action">'
								+ '<a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" data-id="'+ item.variant_id +'" title="Xóa">Xóa</a>'
								+ '</p>'
								+ '</div>'
								+ '<div class="box-price">'
								+ '<p class="price pricechange">' + price + '</p>'
								+ '</div>'
								+ '<div class="quantity-block">'
								+ '<div class="input-group bootstrap-touchspin">'
								+ '<div class="input-group-btn">'
								+ '<input class="variantID" type="hidden" name="id" value="'+ item.variant_id +'">'
								+ '<button onClick="var result = document.getElementById(\'qtyItem'+ item.variant_id +'\'); var qtyItem'+ item.variant_id +' = result.value; if( !isNaN( qtyItem'+ item.variant_id +' )) result.value++;return false;" class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button">+</button>'
								+ '<input type="text" onchange="if(this.value == 0)this.value=1;" maxlength="12" min="1" disabled class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem'+ item.variant_id +'" id="qtyItem'+ item.variant_id +'" name="Lines" id="updates_'+ item.variant_id +'" size="4" value="'+ item.quantity +'">'
								+ '<button onClick="var result = document.getElementById(\'qtyItem'+ item.variant_id +'\'); var qtyItem'+ item.variant_id +' = result.value; if( !isNaN( qtyItem'+ item.variant_id +' ) &amp;&amp; qtyItem'+ item.variant_id +' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button">–</button>'
								+ '</div>'
								+ '</div>'
								+ '</div>'
								+ '</div>'
								+ '</div>';
								jQuery(pageCartItem).appendTo(table.find('.cart-tbody'));
							}); 
							jQuery(pageCartCheckout).appendTo(table.children('.cart'));
						}else {
							jQuery('<p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
							jQuery('.cart_desktop_page').css('min-height', 'auto');
						}
					}
				});
			}
		}
		updateCartDesc(cart);
		jQuery('#wait').hide();
	}
	Haravan.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {
		if ((typeof cart_summary_id) === 'string') {
			var cart_summary = jQuery(cart_summary_id);
			if (cart_summary.length) {
				cart_summary.empty();      
				jQuery.each(cart, function(key, value) {
					if (key === 'items') {
						var table = jQuery(cart_summary_id);           
						if (value.length) { 
							jQuery.each(value, function(i, item) {
								var link_img1 = Haravan.resizeImage(item.image, 'small');
								if(link_img1=="null" || link_img1 =='' || link_img1 ==null){
									link_img1 = '../../theme.hstatic.net/200000247197/1000652159/14/noimage.gif';
								}
								var buttonQty = "";
								if(item.quantity == '1'){
									buttonQty = 'disabled';
								}else{
									buttonQty = '';
								}
								var title_va = item.variant_options;
								if( title_va == 'Default Title'){
									title_va = "";
								}else {
									title_va = item.variant_options;
								}
								var pageCartItem = '<div class="item-popup productid-' + item.variant_id +'"><div style="width: 55%;" class="text-left"><div class="item-image">'
								+ '<a class="product-image" href="' + item.url + '" title="' + item.title + '"><img alt="'+  item.title  + '" src="' + link_img1 +  '"width="'+ '80' +'"\></a>'
								+ '</div><div class="item-info"><p class="item-name"><a href="' + item.url + '" title="' + item.title + '">' + item.title + '</a></p>'
								+ '<p class="variant-title-popup">' + title_va + '</span>'
								+ '<p class="item-remove"><a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="'+ item.variant_id +'"><i class="fa fa-close"></i> Bỏ sản phẩm</a></p><p class="addpass" style="color:#fff;">'+ item.variant_id +'</p></div></div>'
								+ '<div style="width: 15%;" class="text-right"><div class="item-price"><span class="price pricechange">' + Haravan.formatMoney(item.price, "{{amount}}₫") + '</span>'
								+ '</div></div><div style="width: 15%;" class="text-center"><input class="variantID" type="hidden" name="id" value="'+ item.variant_id +'">'
								+ '<button onClick="var result = document.getElementById(\'qtyItem'+ item.variant_id +'\'); var qtyItem'+ item.variant_id +' = result.value; if( !isNaN( qtyItem'+ item.variant_id +' ) &amp;&amp; qtyItem'+ item.variant_id +' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced items-count btn-minus" type="button">–</button>'
								+ '<input disabled type="text" maxlength="12" min="0" class="input-text number-sidebar qtyItem'+ item.variant_id +'" id="qtyItem'+ item.variant_id +'" name="Lines" id="updates_'+ item.variant_id +'" size="4" value="'+ item.quantity +'">'
								+ '<button onClick="var result = document.getElementById(\'qtyItem'+ item.variant_id +'\'); var qtyItem'+ item.variant_id +' = result.value; if( !isNaN( qtyItem'+ item.variant_id +' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div>'
								+ '<div style="width: 15%;" class="text-right"><span class="cart-price"> <span class="price">'+ Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫") +'</span> </span></div>'
								+ '</div>';
								jQuery(pageCartItem).prependTo(table);
								$('.link_product').text();
							}); 
						}
					}
				});
			}
		}
		jQuery('.total-price').html(Haravan.formatMoney(cart.total_price, "{{amount}}₫"));
		updateCartDesc(cart);
	}
	Haravan.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
		if ((typeof cart_summary_id) === 'string') {
			var cart_summary = jQuery(cart_summary_id);
			if (cart_summary.length) {
				cart_summary.empty();      
				jQuery.each(cart, function(key, value) {
					if (key === 'items') {
						var table = jQuery(cart_summary_id);           
						if (value.length) {   
							jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
							jQuery.each(value, function(i, item) {
								if( item.image != null){
									var src = Haravan.resizeImage(item.image, 'small');
								}else{
									var src = "../../theme.hstatic.net/200000247197/1000652159/14/noimage.gif";
								}
								jQuery('<div class="item-product item productid-' + item.variant_id +' "><div class="item-product-cart-mobile"><a class="product-images1" href="' + item.url + '"  title="' + item.title + '"><img width="80" height="150" alt="" src="' + src +  '" alt="' + item.title + '"></a></div>'
											 + '<div class="title-product-cart-mobile"><h3><a href="' + item.url + '" title="' + item.title + '">' + item.title + '</a></h3><p>Giá: <span class="pricechange">' + Haravan.formatMoney(item.price, "{{amount}}₫") + '</span></p></div>'
											 + '<div class="select-item-qty-mobile"><div class="txt_center">'
											 + '<input class="variantID" type="hidden" name="id" value="'+ item.variant_id +'"><button onClick="var result = document.getElementById(\'qtyMobile'+ item.variant_id +'\'); var qtyMobile'+ item.variant_id +' = result.value; if( !isNaN( qtyMobile'+ item.variant_id +' ) &amp;&amp; qtyMobile'+ item.variant_id +' &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button><input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile'+ item.variant_id +'" id="qtyMobile'+ item.variant_id +'" name="Lines" id="updates_'+ item.variant_id +'" size="4" value="'+ item.quantity +'"><button onClick="var result = document.getElementById(\'qtyMobile'+ item.variant_id +'\'); var qtyMobile'+ item.variant_id +' = result.value; if( !isNaN( qtyMobile'+ item.variant_id +' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div>'
											 + '<a class="button remove-item remove-item-cart" href="javascript:;" data-id="'+ item.variant_id +'" title="Xóa">Xoá</a></div>').appendTo(table.children('.content-product-list'));
							});
							jQuery('<div class="header-cart-price" style=""><div class="title-cart clearfix"><h3 class="text-xs-left">Tổng tiền</h3><a class="text-xs-right totals_price_mobile" title="' + Haravan.formatMoney(cart.total_price, "{{amount}}₫") + '">' + Haravan.formatMoney(cart.total_price, "{{amount}}₫") + '</a></div>'
										 + '<div class="checkout"><button class="btn-proceed-checkout-mobile" title="Thanh toán ngay" type="button" onclick="window.location.href=\'/checkout\'">'
										 + '<span>Thanh toán ngay</span></button></div>'
										 + '<button class="btn btn-proceed-continues-mobile" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'">Tiếp tục mua hàng</button>'
										 +'</div>').appendTo(table);
						}
					}
				});
			}
		}
		updateCartDesc(cart);
	}
	function updateCartDesc(data){
		var $cartPrice = Haravan.formatMoney(data.total_price, "{{amount}}₫"),
				$cartMobile = $('#header .cart-mobile .quantity-product'),
				$cartDesktop = $('.count_item_pr'),
				$cartDesktopList = $('.cart-counter-list'),
				$cartPopup = $('.cart-popup-count');
		switch(data.item_count){
			case 0:
				$cartMobile.text('0');
				$cartDesktop.text('0');
				$cartDesktopList.text('0');
				$cartPopup.text('0');
				break;
			case 1:
				$cartMobile.text('1');
				$cartDesktop.text('1');
				$cartDesktopList.text('1');
				$cartPopup.text('1');
				break;
			default:
				$cartMobile.text(data.item_count);
				$cartDesktop.text(data.item_count);
				$cartDesktopList.text(data.item_count);
				$cartPopup.text(data.item_count);
				break;
		}
		$('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
		$('.popup-total .total-price').html($cartPrice);
		$('.cart-collaterals .totals_price').html($cartPrice);
		$('.header-cart-price .totals_price_mobile').html($cartPrice);
		$('.cartCount, .cart-products-count').html(data.item_count);
	}
	Haravan.onCartUpdate = function(cart) {
		Haravan.updateCartFromForm(cart, '.mini-products-list');
		Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
		
                    };
		 Haravan.onCartUpdateClick = function(cart, variantId) {
			 jQuery.each(cart, function(key, value) {
				 if (key === 'items') {    
					 jQuery.each(value, function(i, item) {  
						 if(item.variant_id == variantId){
							 $('.productid-'+variantId).find('.pricechange').html(Haravan.formatMoney(item.price, "{{amount}}₫"));
							 $('.productid-'+variantId).find('.cart-price span.price').html(Haravan.formatMoney(item.price * item.quantity, "{{amount}}₫"));
							 $('.productid-'+variantId).find('.items-count').prop("disabled", false);
							 $('.productid-'+variantId +' .number-sidebar').val(item.quantity);
							 if(item.quantity == '1'){
								 $('.productid-'+variantId).find('.items-count.btn-minus').prop("disabled", true);
							 }
						 }
					 }); 
				 }
			 });
			 updateCartDesc(cart);
		 }
		 Haravan.onCartRemoveClick = function(cart, variantId) {
			 jQuery.each(cart, function(key, value) {
				 if (key === 'items') {    
					 jQuery.each(value, function(i, item) {  
						 if(item.variant_id == variantId){
							 $('.productid-'+variantId).remove();
						 }
					 }); 
				 }
			 });
			 updateCartDesc(cart);
		 }
		 $(window).ready(function(){
			 $.ajax({
				 type: 'GET',
				 url: '/cart.js',
				 async: false,
				 cache: false,
				 dataType: 'json',
				 success: function (cart){
					 Haravan.updateCartFromForm(cart, '.mini-products-list');
					 Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup'); 
					 
						}
					 });
				 });
</script>		
		<div id="popup-cart" class="modal fade" role="dialog">
	<div id="popup-cart-desktop" class="clearfix">
		<div class="title-popup-cart"><i class="ion ion-md-notifications-outline" aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name"></span> vào giỏ hàng</div>
		<div class="title-quantity-popup"><a href="../cart.html" title="Giỏ hàng của bạn">Giỏ hàng của bạn có <span class="cart-popup-count"></span> sản phẩm</a></div>
		<div class="content-popup-cart clearfix">
			<div class="thead-popup"><div style="width: 55%;" class="text-left">Sản phẩm</div><div style="width: 15%;" class="text-center">Đơn giá</div><div style="width: 15%;" class="text-center">Số lượng</div><div style="width: 15%;" class="text-center">Thành tiền</div></div>
			<div class="tbody-popup"></div>
			<div class="tfoot-popup">
				<div class="tfoot-popup-1 clearfix">
					<div class="pull-left popupcon"><a class="button btn-continue" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span><i class="fa fa-caret-left" aria-hidden="true"></i> Tiếp tục mua hàng</span></span></a></div>
					<div class="pull-right popup-total"><p>Thành tiền: <span class="total-price"></span></p></div>
				</div>
				<div class="tfoot-popup-2 clearfix"><a class="button btn-proceed-checkout" title="Thanh toán đơn hàng" href="../cart.html"><span>Thanh toán đơn hàng</span></a></div>
			</div>
		</div>
		<a class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');" title="Đóng"><i class="fa fa-times"></i></a>
	</div>
</div>
<div id="myModal" class="modal fade" role="dialog"></div>
		<link rel="preload" as="script" href="../../theme.hstatic.net/200000268089/1000665157/14/mainfd6a.js?v=151" />
		<script src='../../theme.hstatic.net/200000268089/1000665157/14/mainfd6a.js?v=151' type='text/javascript'></script>				
		
		
		<script type="text/javascript">
			WebFontConfig = {
				custom: {
					families: ['FontAwesome'],
					urls: ['https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css']
				}
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = '../../ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>
		
	</body>

<!-- Mirrored from evo-watch.myharavan.com/products/black-link by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 05:50:52 GMT -->
</html>