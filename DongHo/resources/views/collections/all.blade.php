@include('home.head')

<body class="bg-body">

    @include('home.header')
    <div class="evo-blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="evo-blog-header-content">
                        <h1>Tất cả sản phẩm</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <section class="main_container collection col-md-9 col-md-push-3">
                <div class="category-products products category-products-grids">


                    <section class="products-view products-view-grid row">


                        
                            @include('products.productcard')
                        

                        <div class="clearfix"></div>
                        <div class="text-xs-right">

                            <nav class="text-center">
                                <ul class="pagination clearfix">

                                    <li class="page-item disabled"><a class="page-link" href="#" title="«">«</a></li>





                                    <li class="active page-item disabled"><a class="page-link" href="javascript:;"
                                            title="1">1</a></li>




                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;"
                                            title="2">2</a></li>




                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;"
                                            title="»">»</a></li>

                                </ul>
                            </nav>

                        </div>

                    </section>


                </div>
            </section>
            <aside class="evo-sidebar sidebar left-content col-md-3 col-md-pull-9">

                <aside class="aside-item collection-category">
                    <div class="aside-title">
                        <h3 class="title-head margin-top-0">Danh mục</h3>
                    </div>
                    <div class="aside-content">
                        <ul class="nav navbar-pills nav-category">


                            <li class="nav-item ">
                                <a class="nav-link" href="../index.html" title="Trang chủ">Trang chủ</a>
                            </li>



                            <li class="nav-item ">
                                <a href="../pages/about-us.html" class="nav-link" title="Giới thiệu">Giới thiệu</a>
                                <span class="Collapsible__Plus"></span>
                                <ul class="dropdown-menu">


                                    <li class="nav-item ">
                                        <a class="nav-link" href="../pages/chinh-sach-doi-hang.html"
                                            title="Chính sách đổi hàng">Chính sách đổi hàng</a>
                                    </li>



                                    <li class="nav-item ">
                                        <a class="nav-link" href="../pages/faq.html" title="FAQ">FAQ</a>
                                    </li>



                                    <li class="nav-item ">
                                        <a class="nav-link" href="../pages/huong-dan-thanh-toan.html"
                                            title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a>
                                    </li>



                                    <li class="nav-item ">
                                        <a class="nav-link" href="../pages/chinh-sach-van-chuyen.html"
                                            title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                                    </li>



                                    <li class="nav-item ">
                                        <a class="nav-link" href="../pages/he-thong-cua-hang.html"
                                            title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                                    </li>



                                </ul>
                            </li>



                            <li class="nav-item active">
                                <a href="all.html" class="nav-link" title="Sản phẩm">Sản phẩm</a>
                                <span class="Collapsible__Plus"></span>
                                <ul class="dropdown-menu">


                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="nam.html" title="Nam">Nam</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">


                                            <li class="nav-item ">
                                                <a class="nav-link" href="dong-ho-kashmir.html"
                                                    title="Đồng hồ KASHMIR">Đồng hồ KASHMIR</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="dong-ho-weimar.html"
                                                    title="Đồng hồ WEIMAR">Đồng hồ WEIMAR</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="dong-ho-colosseum.html"
                                                    title="Đồng hồ COLOSSEUM">Đồng hồ COLOSSEUM</a>
                                            </li>


                                        </ul>
                                    </li>



                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="nu.html" title="Nữ">Nữ</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">


                                            <li class="nav-item ">
                                                <a class="nav-link" href="ban-chay-nhat.html" title="Bán chạy nhất">Bán
                                                    chạy nhất</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="dong-ho-melissani.html"
                                                    title="Đồng hồ MELISSANI">Đồng hồ MELISSANI</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="dong-ho-moraine.html"
                                                    title="Đồng hồ MORAINE">Đồng hồ MORAINE</a>
                                            </li>


                                        </ul>
                                    </li>



                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="phu-kien.html" title="Phụ kiện">Phụ kiện</a>
                                        <span class="Collapsible__Plus"></span>
                                        <ul class="dropdown-menu">


                                            <li class="nav-item ">
                                                <a class="nav-link" href="day-dong-ho.html" title="Dây đồng hồ">Dây đồng
                                                    hồ</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="kinh-ram.html" title="Kính râm">Kính râm</a>
                                            </li>



                                            <li class="nav-item ">
                                                <a class="nav-link" href="kinh-mat.html" title="Kính mắt">Kính mắt</a>
                                            </li>


                                        </ul>
                                    </li>



                                </ul>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="nam.html" title="Nam">Nam</a>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="nu.html" title="Nữ">Nữ</a>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="phu-kien.html" title="Phụ kiện">Phụ kiện</a>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="../blogs/news.html" title="Blog">Blog</a>
                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" href="../pages/lien-he.html" title="Liên hệ">Liên hệ</a>
                            </li>


                        </ul>
                    </div>
                </aside>


                <script src='../../theme.hstatic.net/200000268089/1000665157/14/search_filterfd6a.js?v=151'
                    type='text/javascript'></script>

                <div class="aside-filter clearfix">
                    <div class="heading">
                        Tìm theo
                    </div>
                    <div class="aside-hidden-mobile">
                        <div class="filter-container">
                            <div class="filter-containers">
                                <div class="filter-container__selected-filter" style="display: none;">
                                    <div class="filter-container__selected-filter-header clearfix">
                                        <span class="filter-container__selected-filter-header-title">Bạn chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                            class="filter-container__clear-all" title="Bỏ hết">Bỏ hết <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <aside class="aside-item filter-vendor">
                                <div class="aside-title">
                                    Thương hiệu
                                </div>
                                <div class="aside-content filter-group">
                                    <ul class="filter-vendor">


                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="khác" for="filter-khac" class="khac">
                                                <input type="checkbox" id="filter-khac" onchange="toggleFilter(this)"
                                                    data-group="Hãng" data-field="" data-text="Khác"
                                                    value="(vendor:product**Khác)" data-operator="OR">
                                                <i class="fa"></i>
                                                Khác
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="quartz" for="filter-quartz" class="quartz">
                                                <input type="checkbox" id="filter-quartz" onchange="toggleFilter(this)"
                                                    data-group="Hãng" data-field="" data-text="Quartz"
                                                    value="(vendor:product**Quartz)" data-operator="OR">
                                                <i class="fa"></i>
                                                Quartz
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green ">
                                            <label data-filter="kashmir" for="filter-kashmir" class="kashmir">
                                                <input type="checkbox" id="filter-kashmir" onchange="toggleFilter(this)"
                                                    data-group="Hãng" data-field="" data-text="Kashmir"
                                                    value="(vendor:product**Kashmir)" data-operator="OR">
                                                <i class="fa"></i>
                                                Kashmir
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </aside>


                            <aside class="aside-item filter-price">
                                <div class="aside-title">
                                    Giá sản phẩm
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>





                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-duoi-100-000d">
                                                    <input type="checkbox" id="filter-duoi-100-000d"
                                                        onchange="toggleFilter(this);" data-group="Khoảng giá"
                                                        data-field="" data-text="Dưới 100.000đ"
                                                        value="(price:product<100000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Giá dưới 100.000đ
                                                </label>
                                            </span>
                                        </li>







                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-100-000d-200-000d">
                                                    <input type="checkbox" id="filter-100-000d-200-000d"
                                                        onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                        data-field="" data-text="100.000đ - 200.000đ"
                                                        value="(price:product>100000)&&(price:product<=200000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    100.000đ - 200.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-200-000d-300-000d">
                                                    <input type="checkbox" id="filter-200-000d-300-000d"
                                                        onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                        data-field="" data-text="200.000đ - 300.000đ"
                                                        value="(price:product>200000)&&(price:product<=300000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    200.000đ - 300.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-300-000d-500-000d">
                                                    <input type="checkbox" id="filter-300-000d-500-000d"
                                                        onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                        data-field="" data-text="300.000đ - 500.000đ"
                                                        value="(price:product>300000)&&(price:product<=500000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    300.000đ - 500.000đ
                                                </label>
                                            </span>
                                        </li>






                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-500-000d-1-000-000d">
                                                    <input type="checkbox" id="filter-500-000d-1-000-000d"
                                                        onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                        data-field="" data-text="500.000đ - 1.000.000đ"
                                                        value="(price:product>500000)&&(price:product<=1000000)"
                                                        data-operator="OR">
                                                    <i class="fa"></i>
                                                    500.000đ - 1.000.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-tren1-000-000d">
                                                    <input type="checkbox" id="filter-tren1-000-000d"
                                                        onchange="toggleFilter(this)" data-group="Khoảng giá"
                                                        data-field="" data-text="Trên 1.000.000đ"
                                                        value="(price:product>1000000)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Giá trên 1.000.000đ
                                                </label>
                                            </span>
                                        </li>



                                    </ul>
                                </div>
                            </aside>


                            <aside class="aside-item filter-type">
                                <div class="aside-title">
                                    Loại
                                </div>
                                <div class="aside-content filter-group">
                                    <ul class="filter-type">


                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="khác" for="filter-khac">
                                                <input type="checkbox" id="filter-khac" onchange="toggleFilter(this)"
                                                    data-group="Loại" data-field="" data-text="Khác"
                                                    value="(product_type:product**Khác)" data-operator="OR">
                                                <i class="fa"></i>
                                                Khác
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="classic" for="filter-classic">
                                                <input type="checkbox" id="filter-classic" onchange="toggleFilter(this)"
                                                    data-group="Loại" data-field="" data-text="Classic"
                                                    value="(product_type:product**Classic)" data-operator="OR">
                                                <i class="fa"></i>
                                                Classic
                                            </label>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <label data-filter="carbon" for="filter-carbon">
                                                <input type="checkbox" id="filter-carbon" onchange="toggleFilter(this)"
                                                    data-group="Loại" data-field="" data-text="Carbon"
                                                    value="(product_type:product**Carbon)" data-operator="OR">
                                                <i class="fa"></i>
                                                Carbon
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </aside>


                            <aside class="aside-item filter-tag-style-1 tag-filtster">
                                <div class="aside-title">
                                    Kích thước
                                </div>
                                <div class="aside-content filter-group">
                                    <ul>




                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-lon">
                                                    <input type="checkbox" id="filter-lon" onchange="toggleFilter(this)"
                                                        data-group="tag2" data-field="" data-text="Lớn"
                                                        value="(tag:product**Lớn)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Lớn
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-nho">
                                                    <input type="checkbox" id="filter-nho" onchange="toggleFilter(this)"
                                                        data-group="tag2" data-field="" data-text="Nhỏ"
                                                        value="(tag:product**Nhỏ)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Nhỏ
                                                </label>
                                            </span>
                                        </li>



                                        <li class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label for="filter-vua">
                                                    <input type="checkbox" id="filter-vua" onchange="toggleFilter(this)"
                                                        data-group="tag2" data-field="" data-text="Vừa"
                                                        value="(tag:product**Vừa)" data-operator="OR">
                                                    <i class="fa"></i>
                                                    Vừa
                                                </label>
                                            </span>
                                        </li>


                                    </ul>
                                </div>
                            </aside>




                        </div>
                    </div>
                </div>


            </aside>
            <div id="open-filters" class="open-filters hidden-lg hidden-md">
                <i class="fa fa-filter" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    @include('home.footer')