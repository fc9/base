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
    <script>
        $(function () {
            $("#back-to-login").click(function () {
                $("#loginform").slideDown()
                $("#recoverform").fadeOut()
            })
        })
    </script>
    @toastr_js
    @toastr_render
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register" style="background-image:url('/images/empireasy/auth_background.jpg');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{ url('/login') }}"
                          method="post">
                        @csrf
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="{{ __('auth.logo_src') }}" alt="{{ env('APP_NAME') }}" width="auto"
                                 height="60px"/>
                        </a>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="username" name="username" required=""
                                       minlength="3" maxlength="45"
                                       value="{{ old('username') }}" placeholder="{{ __('auth.username_or_email') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" id="password" name="password" required=""
                                       minlength="8" maxlength="16"
                                       value="" placeholder="{{ __('auth.password') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success pt-0 pl-2">
                                    <input id="checkbox-signup" type="checkbox" name="remember">
                                    <label for="checkbox-signup">{{ __('auth.remember_me') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                        type="submit">
                                   {{ __('auth.submit_register') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                <p>{{ __('auth.question_register') }}
                                    <a href="{{ route('register') }}" class="text-info ml-1">
                                        <b>{{ __('auth.link_register') }}</b>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <a href="{{ route('password.request') }}">
                                    {{ __('auth.forgot_your_password') }}
                                </a>
                                {{--<button class="btn btn-secondary  btn-block text-uppercase waves-effect waves-green"
                                        type="submit">{{ __('auth.forgot_password') }}</button>--}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
