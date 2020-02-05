@extends('templates.master')

@section('template-css')
    <!-- toast CSS -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
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
        <div class="login-register"
             style="background-image:url('/images/empireasy/auth_background.jpg');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{ url('/register') }}"  method="post">
                        @csrf
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="{{ __('auth.logo_src') }}" alt="{{ env('APP_NAME') }}" width="auto"
                                 height="60px"/>
                        </a>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                @if(isset($indicator_username))
                                    <input class="form-control" type="text" required readonly
                                           id="indicator_username" name="indicator_username" maxlength="16"
                                           value="{{$indicator_username}}" name="indicator_username_show"
                                           placeholder="{{ __('auth.indicator_username') }}*"
                                           title="{{ __('auth.indicator_username') }}" minlength="3">
                                    <input type="hidden" name="indicator_username" value="{{$indicator_username}}">
                                @else
                                    <input id="indicator_username" type="text" name="indicator_username" value="{{ old('indicator_username') }}"
                                           required autocomplete="sponsor_username" name="indicator_username"
                                           class="form-control" type="text" required="" minlength="3" maxlength="16"
                                           placeholder="{{ __('auth.indicator_username') }}*"
                                           title="{{ __('auth.indicator_username') }}">
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" value="{{ old('username') }}" required=""
                                       placeholder="{{ __('auth.username') }}*" name="username"
                                       title="{{ __('auth.username') }}" minlength="3" maxlength="16">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" value="{{ old('email') }}" required=""
                                       placeholder="{{ __('auth.email') }}" name="email"
                                       title="{{ __('auth.email') }}" minlength="8" maxlength="45">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" value="{{ old('whatsapp') }}" required=""
                                       placeholder="{{ __('auth.whatsapp') }}"
                                       title="{{ __('auth.whatsapp') }}" name="whatsapp_number"
                                       autocomplete="whastapp" minlength="8" maxlength="16">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" name="password"
                                       placeholder="{{ __('auth.password') }}"
                                       title="{{ __('auth.password') }}" minlength="8" maxlength="32">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" name="confirm_password"
                                       placeholder="{{ __('auth.confirm_password') }}"
                                       title="{{ __('auth.confirm_password') }}" minlength="8" maxlength="32">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success pt-0 pl-2">
                                    <input id="checkbox-signup" type="checkbox" name="agree_to_terms">
                                    <label for="checkbox-signup">
                                        {{ __('auth.agree_to_terms') }}
                                        <a href="#">{{ __('auth.link_terms') }}</a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                        type="submit">{{ __('auth.submit_register') }}</button>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                @if (Route::has('login'))
                                    <p>{{ __('auth.question_login') }} {{ config('config.name') }}
                                        <a href="{{ route('login') }}" class="text-info ml-1">
                                            <b>{{ __('auth.link_login') }}</b>
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
