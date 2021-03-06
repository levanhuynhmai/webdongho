@include('home.head')

<body>
    @include('home.header')
    <section class="awe-section-1">
        <div class="home-slider owl-carousel owl-loaded owl-drag" data-dot="true" data-nav="false" data-lg-items="1"
            data-md-items="1" data-sm-items="1" data-xs-items="1" data-xss-items="1" data-margin="0" data-loop="true"
            data-autoplay="true" data-time="4000">


            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-2698px, 0px, 0px); transition: all 0s ease 0s; width: 6745px;">
                    
                    <div class="owl-item cloned" style="width: 1349px;">
                        <div class="item">
                            <a href="#" class="clearfix" title="Evo Watch">
                                <picture>
								
								<img src="{{asset('/img/slider_1_d251ff2435a44459a2588ec79d21493f.jpg')}}"
									alt="Evo Watch" class="lazy img-responsive center-block">
                                </picture>
                            </a>
                        </div>
                    </div>
					
					<div class="owl-item cloned" style="width: 1349px;">
                        <div class="item">
                            <a href="#" class="clearfix" title="Evo Watch">
                                <picture>
								
								<img src="{{asset('/img/slider_1_d251ff2435a44459a2588ec79d21493f.jpg')}}"
									alt="Evo Watch" class="lazy img-responsive center-block">
                                </picture>
                            </a>
                        </div>
                    </div>
					<div class="owl-item cloned" style="width: 1349px;">
                        <div class="item">
                            <a href="#" class="clearfix" title="Evo Watch">
                                <picture>
								
								<img src="{{asset('/img/slider_1_d251ff2435a44459a2588ec79d21493f.jpg')}}"
									alt="Evo Watch" class="lazy img-responsive center-block">
                                </picture>
                            </a>
                        </div>
                    </div>



				
                </div>
            </div>
            <div class="owl-nav disabled">
                <div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <div class="owl-dots disabled">
                <div class="owl-dot active"><span></span></div>
            </div>
        </div>
    </section>


    <section class="awe-section-2">



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_product section_product_best_sell clearfix">
                        <div class="section-head clearfix text-center">
                            <h2 class="title_blog"><a href="collections/hot-products.html" title="S???n ph???m M???i">S???n ph???m
                                    <strong>M???i</strong></a></h2>
                            <div class="viewallcat hidden-xs">

                                <a href="collections/nam.html" title="Nam">Nam</a>

                                <a href="collections/nu.html" title="N???">N???</a>

                                <a href="collections/phu-kien.html" title="Ph??? ki???n">Ph??? ki???n</a>

                            </div>
                        </div>
                        <div class="product-blocks clearfix">

                            <div class="evo-owl-product owl-carousel not-dqowl clearfix owl-loaded owl-drag"
                                data-dot="false" data-nav="true" data-lg-items="4" data-md-items="4" data-sm-items="3"
                                data-xs-items="2" data-xss-items="2" data-margin="10" data-loop="false"
                                data-autoplay="false">

                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1160px;">
                                        
                                        @include('products.productcard')

                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>

                        </div>
                        <a href="collections/hot-products.html" title="Xem t???t c??? S???n ph???m M???i"
                            class="evo-button mobile-viewmore">Xem t???t c??? . S???n ph???m <strong>M???i</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="awe-section-4">
        <div class="section_banner">
            <div class="container">
                <div class="row">




                    <div class="col-sm-4 col-xs-12 evo-margin">
                        <div class="evo-banner">
                            <img src="{{ asset('img/banner/banner1.jpg')}}" alt="?????ng h???"
                                class="img-responsive center-block" />
                            <div class="evo-banner-content">
                                <h3>?????ng h???</h3>
                                <a href="collections/all.html" title="Xem th??m">Xem th??m</a>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-4 col-xs-12 evo-margin">
                        <div class="evo-banner">
                            <img src="{{ asset('img/banner/banner2.jpg')}}" alt="mat kinh"
                                class="img-responsive center-block" />
                            <div class="evo-banner-content">
                                <h3>M???t k??nh</h3>
                                <a href="collections/all.html" title="Xem th??m">Xem th??m</a>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-4 col-xs-12 evo-margin">
                        <div class="evo-banner">
                            <img src="{{ asset('img/banner/banner3.jpg')}}" alt="trang suc"
                                class="img-responsive center-block" />
                            <div class="evo-banner-content">
                                <h3>Trang S???c</h3>
                                <a href="collections/all.html" title="Xem th??m">Xem th??m</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section class="awe-section-5">



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_product section_product_best_sell clearfix">
                        <div class="section-head clearfix text-center">
                            <h2 class="title_blog"><a href="/collections/hot-products" title="D??nh cho Nam">D??nh cho
                                    <strong>Nam</strong></a></h2>
                            <div class="viewallcat hidden-xs">

                                <a href="/collections/nam" title="Nam">Nam</a>

                                <a href="/collections/nu" title="N???">N???</a>

                                <a href="/collections/phu-kien" title="Ph??? ki???n">Ph??? ki???n</a>

                            </div>
                        </div>
                        <div class="product-blocks clearfix">

                            <div class="evo-owl-product owl-carousel not-dqowl clearfix owl-loaded owl-drag"
                                data-dot="false" data-nav="true" data-lg-items="4" data-md-items="4" data-sm-items="3"
                                data-xs-items="2" data-xss-items="2" data-margin="10" data-loop="false"
                                data-autoplay="false">





                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1160px;">
                                     
                                        @include('products.productcard')
                                     

                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <div class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>

                        </div>
                        <a href="/collections/hot-products" title="Xem t???t c??? D??nh cho Nam"
                            class="evo-button mobile-viewmore">Xem t???t c??? . D??nh cho <strong>Nam</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <<section class="awe-section-7">

			<div class="container section_product_5">
				<div class="row">
					<div class="col-md-12">
						<div class="section_product section_product_best_sell clearfix">
							<div class="section-head clearfix text-center">
								<h2 class="title_blog"><a href="/collections/hot-products" title="Ph??? ki???n M???i"><strong>Ph???
											ki???n</strong> M???i</a></h2>
								<div class="viewallcat hidden-xs">

									<a href="/collections/nam" title="Nam">Nam</a>

									<a href="/collections/nu" title="N???">N???</a>

									<a href="/collections/phu-kien" title="Ph??? ki???n">Ph??? ki???n</a>

								</div>
							</div>
							<div class="product-blocks clearfix">

								<div class="evo-owl-product owl-carousel not-dqowl clearfix owl-loaded owl-drag"
									data-dot="false" data-nav="true" data-lg-items="4" data-md-items="4" data-sm-items="3"
									data-xs-items="2" data-xss-items="2" data-margin="10" data-loop="false"
									data-autoplay="false">


									<div class="owl-stage-outer">
										<div class="owl-stage"
											style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1160px;">
											
                                            @include('products.productcard')
											
											
										</div>
									</div>
									<div class="owl-nav disabled">
										<div class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i>
										</div>
										<div class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i>
										</div>
									</div>
									<div class="owl-dots disabled"></div>
								</div>

							</div>
							<a href="/collections/hot-products" title="Xem t???t c??? Ph??? ki???n M???i"
								class="evo-button mobile-viewmore">Xem t???t c??? . <strong>Ph??? ki???n</strong> M???i</a>
						</div>
					</div>
				</div>
			</div>
    </section>
	<section class="awe-section-9">	
	<div class="container section_blogs">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<h2 class="text-center"><a href="" title="Tin t???c Ervo Watch">Tin t???c <strong>Evo Watch</strong></a></h2>
			<div class="clearfix row">
				
				<div class="col-md-3 col-sm-6 col-xs-12 news-items">
					<a href="/blogs/news/3-mau-dong-ho-chronograph-6-kim-muc-gia-trung-binh-dang-mua-nhat" title="3 m???u ?????ng h??? Chronograph 6 kim m???c gi?? trung b??nh ????ng mua nh???t" class="clearfix">
						<div class="evo-article-image">
							
							<img src="{{ asset('/img/1552766551_26a5fafd85ee4640a197922d80370455.jpg') }}" 
							alt="3 m???u ?????ng h??? Chronograph 6 kim m???c gi?? trung b??nh ????ng mua nh???t" class="img-responsive center-block">
							
						</div>
						<h3 class="line-clamp">3 m???u ?????ng h??? Chronograph 6 kim m???c gi?? trung b??nh ????ng mua nh???t</h3>
						<p class="hidden-xs">1. ?????ng h??? Jacques Lemans JL-1-1654?????ng ?????u danh s??ch Top 3 ?????ng h??? 6 kim l?? m???u ?????ng h??? Jacques Lemans&nbsp;JL-...</p>
					</a>
				</div>
				
				
				
				
			</div>
			<div class="text-center">
				<a href="" title="Xem t???t c???" class="evo-button mobile-viewmore">Xem t???t c???</a>
			</div>
		</div>
	</div>
</div>
</section>
@include('home.footer')