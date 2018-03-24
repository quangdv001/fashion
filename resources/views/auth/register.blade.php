<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="login">
<div>
    {{--<a class="hiddenanchor" id="signup"></a>--}}
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div id="register" class="animate form registration_form" style="opacity: 1;">
            <section class="login_content">
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{ old('name') }}" required="" />
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required="" />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div>
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required="" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div>
                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">
                            Submit
                        </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        {{--<p class="change_link">Already a member ?--}}
                            {{--<a href="#signin" class="to_register"> Log in </a>--}}
                        {{--</p>--}}

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Em18.vn!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
