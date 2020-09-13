@extends('front.layout.master')
@section('style_link')
    <link rel="stylesheet" href="{{asset('front/css/userlogin.css')}}">
@endsection
@section('style')
    <style>
        h3{
            font-family: Vazir!important;
        }
        .button{
            background: #7fad39;
            border: 1px solid #7fad39;
            border-radius: 0;
        }
        .button:hover{
            border-color: #7fad39;
        }
        .login_box_area .login_box_img:before{
            background: #7fad39;
        }
        .form-control.is-invalid, .was-validated .form-control:invalid{
            background-position: right calc(23.375em + .1875rem) center;
        }
        .invalid-feedback{

            font-size: 12px;
            color: red;

        }
    </style>
@endsection
@section('content')


    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="/">خانه</a>
                            </li>
                            <li>
                                <a href="/login">ورود </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">ورود </h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form class=" " method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>خوش آمدید</h3>
                                <p>شما می توانید با ایمیل خود وارد شوید</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">ایمیل</label>
                                    <input id="user_name" name="email" type="text" value="{{ old('email') }}" class="text_field {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="ایمیل">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pass">کلمه عبور </label>
                                    <input id="pass" name="password" type="password" class="text_field {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="رمز عبور">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">مرا به خاطر بسپار </span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">ورود </button>

                                <div class="login_assist">
                                    <p class="recover">
                                        <a href="">کلمه عبور </a> فراموش کرده اید ؟</p>
                                    <p class="signup">هنوز
                                        <a href="/register">ثبت نام </a>  نکرده اید ؟</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->




@endsection
