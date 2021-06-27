<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Admin</title>
    <link href="{{ asset('vendor/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


    @if(config('services.recaptcha.enable'))
        <script
            src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}">
        </script>
        <script>
            function onSubmit(token) {
                document.getElementsByClassName("recaptcha")[0].submit();
            }
        </script>
    @endif
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <form method="post" class="recaptcha" action="">
                        @csrf
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <label for="email"></label>
                                <input type="email" required value="" autocomplete="off"
                                       class="form-control"
                                       placeholder="Username" id="email" name="email">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock" ></i></span>
                                </div>
                                <label for="password"></label>
                                <input type="password" required autocomplete="off" class="form-control"
                                       placeholder="Password"
                                       id="password"
                                       name="password">
                            </div>
                            <div class="row">
                                <div class="col-12" style="text-align: center;">
                                    
                                    <button class="g-recaptcha btn btn-primary px-4"
                                    
                                    data-action='submit'>
                                    <a class="btn btn-primary px-4" style="color:#fff;">Đăng Nhập </a>
                                    
                                    </button>
                                   
                                   
                                </div>

                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card text-white py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/logo.png') }}" style="width: 100%" alt="auth">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
