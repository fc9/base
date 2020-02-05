@extends('templates.master')

@section('template-css')
    <!-- toast CSS -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/toast-master/css/jquery.toast.css"
          rel="stylesheet">
    <link href="/css/monster/style.css" rel="stylesheet">
    @toastr_css
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
    @toastr_js
    @toastr_render
@endsection

@section('layout-content')
    <section id="wrapper">

        <div class="login-register" style="background-image:url('/images/empireasy/auth_background.jpg');">
            <!--section id="wrapper" class="login-register login-sidebar" style="background-image:url(/vendor/wrappixel/monster-admin/4.2.1/assets/images/background/login-register.jpg);"-->
            <div class="login-box card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}" role="form">
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>{{ __('auth.forgot_password') }}</h3>
                                <p class="text-muted">{{ __('auth.forgot_password_instructions') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       maxlength="90" placeholder="mail@mail.com">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                        type="submit">
                                    {{ __('auth.send_password_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group mb-0">
                        <div class="col-sm-12 text-center">
                            <p>{{ __('auth.dont_account') }}
                                <a href="{{ route('register') }}" class="text-info ml-1">
                                    <b>{{ __('auth.sign_up') }}</b>
                                </a>
                            </p>
                            <p>{{ __('auth.go_home') }}
                                <a href="{{ route('login') }}" class="text-info ml-1">
                                    <b>{{ __('auth.sign_in') }}</b>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
