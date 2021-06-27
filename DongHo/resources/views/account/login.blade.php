@include('home.head')

<body class="bg-body">
    @include('home.header')
    <div class="evo-search-bar">
        <form action="https://evo-watch.myharavan.com/search" method="get">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Bạn cần tìm gì hôm nay?" />
                <input type="hidden" name="type" value="product" />
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <button class="site-header__search" title="Đóng tìm kiếm"><svg xmlns="http://www.w3.org/2000/svg" width="26.045"
                height="26.044">
                <g data-name="Group 470">
                    <path
                        d="M19.736 17.918l-4.896-4.896 4.896-4.896a1.242 1.242 0 0 0-.202-1.616 1.242 1.242 0 0 0-1.615-.202l-4.896 4.896L8.127 6.31a1.242 1.242 0 0 0-1.615.202 1.242 1.242 0 0 0-.202 1.615l4.895 4.896-4.896 4.896a1.242 1.242 0 0 0 .202 1.615 1.242 1.242 0 0 0 1.616.202l4.896-4.896 4.896 4.896a1.242 1.242 0 0 0 1.615-.202 1.242 1.242 0 0 0 .202-1.615z"
                        data-name="Path 224" fill="#1c1c1c"></path>
                </g>
            </svg></button>
    </div>


    <link rel="preload" as="script" href="../../hstatic.net/0/0/global/option_selection.js" />
    <script src='../../hstatic.net/0/0/global/option_selection.js' type='text/javascript'></script>
    <link rel="preload" as="script" href="../../hstatic.net/0/0/global/api.jquery.js" />
    <script src='../../hstatic.net/0/0/global/api.jquery.js' type='text/javascript'></script>

    <section class="bread-crumb margin-bottom-10">
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
                    <strong itemprop="name">Tài khoản</strong>
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
                        <div class="text-center margin-bottom-30">
                            <h1 class="title-head">Tài khoản</h1>
                        </div>
                        <form accept-charset='UTF-8' action=''
                            id='customer_login' method='post'>
							@csrf
                            <input name='form_type' type='hidden' value='{{csrf_token()}}' name='_token'>
                            <input name='utf8' type='hidden' value='✓'>

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
                            <div class="form-signup clearfix">
                                
                                <fieldset class="form-group margin-bottom-20">
                                    <label>Email<span class="required">*</span></label>
                                    <input autocomplete="off" placeholder="Nhập Địa chỉ Email" type="email"
                                        class="form-control form-control-lg" value="" name="email"
                                        id="customer_email" required data-validation="email"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                        />
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Mật khẩu<span class="required">*</span></label>
                                    <input autocomplete="off" placeholder="Nhập Mật khẩu" type="password"
                                        class="form-control form-control-lg" value="" name="password"
                                        id="customer_password"
                                        data-validation="required" />
                                </fieldset>
                                <div class="pull-xs-left text-center" style="margin-top: 15px;">
                                    <button class="btn btn-style btn-blues" type="submit" value="Đăng nhập">Đăng
                                        nhập</button>
                                </div>
                                <div class="clearfix"></div>
                                <p class="text-center">
                                    <a href="#recover" class="btn-link-style" onclick="showRecoverPasswordForm();"
                                        title="Quên mật khẩu?">Quên mật khẩu?</a>
                                </p>
                                <div class="text-login text-center">
                                    <p>
                                        Bạn chưa có tài khoản. Đăng ký <a href="{{route('dangky')}}"
                                            title="Đăng ký">tại đây.</a>
                                    </p>
                                </div>
                            </div>

                            <input id='16d5e790c44b4852bb2be2064f56f0c6' name='g-recaptcha-response' type='hidden'>
                            <script
                                src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'>
                            </script>
                            <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                    action: 'submit'
                                }).then(function(token) {
                                    document.getElementById('16d5e790c44b4852bb2be2064f56f0c6').value =
                                        token;
                                });
                            });
                            </script>
                        </form>
                    </div>
                    <div id="recover-password" class="form-signup" style="display:none;">
                        <div class="text-center">
                            <h2 class="title-head"><span>Đặt lại mật khẩu</span></h2>
                        </div>
                        <div class="fix-sblock text-center">
                            Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                        </div>
                        <form accept-charset='UTF-8' action=""
                            method='post'>
							@csrf
                            <input name='form_type' type='hidden' value='recover_customer_password'>
                            <input name='utf8' type='hidden' value='✓'>

                            <div class="form-signup">

                            </div>

                            <div class="form-signup clearfix">
                                <fieldset class="form-group">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" class="form-control form-control-lg" value="" name="email"
                                        id="recover-email" placeholder="Nhập địa chỉ Email" data-validation="email"
                                        
                                        data-validation-error-msg="Email sai định dạng" required />
                                </fieldset>
                            </div>
                            <div class="action_bottom text-center">
                                <button class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit"
                                    value="Lấy lại mật khẩu">Lấy lại mật khẩu</button>
                            </div>
                            <div class="text-login text-center">
                                <p>Quay lại <a href="javascript:;" class="btn-link-style btn-register"
                                        onclick="hideRecoverPasswordForm();" title="Quay lại">tại đây.</a></p>
                            </div>

                            <input id='6e9a94a357a04be38ca0cdc6b2e12797' name='g-recaptcha-response' type='hidden'>
                            <script
                                src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'>
                            </script>
                            <script>
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                    action: 'submit'
                                }).then(function(token) {
                                    document.getElementById('6e9a94a357a04be38ca0cdc6b2e12797').value =
                                        token;
                                });
                            });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function showRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'block';
        document.getElementById('login').style.display = 'none';
    }

    function hideRecoverPasswordForm() {
        document.getElementById('recover-password').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }
    </script>


    @include('home.footer')