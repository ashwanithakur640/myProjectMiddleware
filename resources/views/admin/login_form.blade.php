<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .error{
                color: red;
            }
        </style>
        <title>InspireMusic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script>
            addEventListener("load", function () { 
                setTimeout(hideURLbar, 0); 
            }, false); 
            function hideURLbar() { 
                window.scrollTo(0, 1); 
            }
        </script>
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login-style.css') }}" rel='stylesheet' type='text/css' media="all">
        <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="w3layouts-two-grids">
            <div class="mid-class">
                <div class="txt-left-side">
                    <h2> Login Here </h2>
                    <form id="loginForm" action="{{ asset('admin/login') }}" method="post">
                        @csrf
                        <div class="form-group {{ $errors->has('email') ? 'error' : ''}}">
                            <div class="form-left-to-w3l">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <input type="email" name="email" placeholder="Email" autocomplete="off">
                                <div class="clear"></div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'error' : ''}}">
                            <div class="form-left-to-w3l ">
                                <span class="fa fa-lock" aria-hidden="true"></span>
                                <input type="password" name="password" placeholder="Password" autocomplete="off">
                                <div class="clear"></div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="main-two-w3ls">
                            <div class="left-side-forget">
                                <input type="checkbox" name="remember_token" class="checked">
                                <span class="remenber-me">Remember me </span>
                            </div>
                            <div class="right-side-forget">
                                <a href="{{ asset('admin/forgot-password') }}" class="for">Forgot password...?</a>
                            </div>
                        </div>
                        <div class="btnn">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script>
            $('.alert-success').delay(5000).fadeOut('slow');
            $('.alert-warning').delay(5000).fadeOut('slow');
            $('.alert-error').delay(5000).fadeOut('slow');
        </script>
    </body>
</html>