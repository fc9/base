@extends('templates.master')

@section('title', config('app.name'))

@section('template-css')
    <!-- toast CSS -->
    <link href="/css/monster/style.css" rel="stylesheet">
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register"
             style="background-color:#f6f6f6;background-image:url('/images/template/auth/background.png');">
            <div class="login-box card">
                <div class="card-body">
                    <form method="post" action="{{ route('password.email') }}" class="form-horizontal form-material"
                          id="emailform" role="form">
                        @csrf
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="@lang('app.logo')" alt="{{ env('APP_NAME') }}" width="auto" height="45px"/>
                        </a>
                        <h3 class="text-center" style="font-weight:700">@lang('auth.forgot_password')</h3>
                        <p class="text-muted">{{ __('auth.forgot_password_instructions') }}</p>
                        <div class="form-group">
                            <div class="col-xs-12">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul style="margin:0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @elseif(session()->has('status'))
                                    <div class="alert alert-success">
                                        {{ session()->get('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" minlength="8" maxlength="45" required=""
                                       placeholder="@lang('auth.label_email')" autocomplete="off"
                                       title="@lang('auth.label_email')" name="email"
                                       class="form-control btn-lg text-center" value="{{ old('email') }}">
                                {{--@error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block">
                                    @lang('auth.send_password_reset_link')
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
                                @if (Route::has('signup.check'))
                                    <p>
                                        <a href="{{ route('signup.check') }}" class="text-info ml-1">
                                            <b>@lang('auth.create_account2')</b>
                                        </a>
                                    </p>
                                @endif
                                @if (Route::has('home'))
                                    <p>
                                        <a href="{{ route('home') }}" class="text-info ml-1">
                                            <b>@lang('auth.go_home')</b>
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
