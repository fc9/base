@extends('templates.master')

@section('title', __('app.shortname'))

@section('template-css')
    <link href="/css/monster/style.css" rel="stylesheet">
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
    <script src="/js/auth/login.js"></script>
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register"
             style="background-color:#f6f6f6;background-image:url('/images/template/auth/background.png');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="{{ url('/login') }}"
                          method="post">
                        @csrf
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="@lang('app.logo')" alt="@lang('app.fullname')" width="auto" height="45px"/>
                        </a>
                        <h3 class="text-center" style="font-weight:700">@lang('auth.begin_session')</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul style="margin:0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="text" minlength="5" maxlength="45" required=""
                                       placeholder="@lang('auth.label_username_or_email')" autocomplete="off"
                                       title="@lang('auth.label_username_or_email')" name="username"
                                       class="form-control btn-lg text-center" value="{{ old('username') }}">
                                {{--@error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" minlength="8" maxlength="24" required=""
                                       placeholder="@lang('auth.label_password')"
                                       title="@lang('auth.label_password')" name="password"
                                       class="form-control btn-lg text-center is-invalid2" value="">
                                {{--@error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
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
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase">
                                    @lang('auth.sign_in')
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                @include('templates.components.dropdown-lang')
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12">
                                @if (Route::has('password.request'))
                                    <p>
                                        <a href="{{ route('password.request') }}" class="text-info ml-1">
                                            <b>@lang('auth.cant_login')</b>
                                        </a>
                                    </p>
                                @endif
                                @if (Route::has('signup.check'))
                                    <p>
                                        <a href="{{ route('signup.check') }}" class="text-info ml-1">
                                            <b>@lang('auth.create_account2')</b>
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
