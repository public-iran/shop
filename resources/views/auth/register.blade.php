@extends('front'.config('global.theme_name').'layout.master')
@section('style_link')
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
                                <a href="/register">ثبت نام </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">ثبت نام </h1>
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
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form class="form-horizontal row login_form" action="{{ route('register') }}" method="POST" id="register_form" >
                        @csrf
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>ایجاد حساب کاربری</h3>
                                <p>لطفا موارد زیر را با دقت تکمیل کنید.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="name">نام </label>
                                    <input id="name" type="text" name="name" class="text_field {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="نام" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="family">نام خانوادگی </label>
                                    <input name="family" id="family" type="text" class="text_field {{ $errors->has('family') ? ' is-invalid' : '' }}" value="{{ old('family') }}" placeholder="نام خانوادگی">
                                    @if ($errors->has('family'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('family') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="user_name">ایمیل</label>
                                    <input name="email" id="user_name" type="email" class="text_field {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="ایمیل">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="password">کلمه عبور </label>
                                    <input name="password" id="password" type="password" class="text_field {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="کلمه عبور">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="con_pass">تایید رمز عبور</label>
                                    <input name="password_confirmation" id="con_pass" type="password" class="text_field" placeholder="تایید کلمه عبور">
                                </div>

                                <button class="btn btn--md btn--round register_btn" type="submit">ثبت نام</button>

                                <div class="login_assist">
                                    <p>قبلا حساب کاربری ایجاد کرده اید ؟
                                        <a href="/login">ورود</a>
                                    </p>
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
            END SIGNUP AREA
    =================================-->


@endsection
