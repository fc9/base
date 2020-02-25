{{--@extends('templates.application')--}}
@extends('templates.master')

@section('title', config('app.name'))

@section('template-css')
    <link href="/css/monster/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/component/progress-bar.css">
    <style>
        .type_field {
            width: 17%;
            margin: 0 auto;
            font-size: 3rem;
            height: 50px;
            font-weight: 500;
        }
    </style>
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
    <script src="/js/auth/confirm_email.js"></script>
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register"
             style="background-color:#f6f6f6;background-image:url('/images/template/auth/background.png');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="confirmform" action="{{ url('/signup/confirm') }}"
                          method="post">
                        @csrf
                        <input type="hidden" name="token" value="00000" id="token">
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="@lang('app.logo')" alt="{{ env('APP_NAME') }}" width="auto" height="45px"/>
                        </a>
                        <h4 class="text-center"
                            style="font-weight:700">@lang('auth.enter_code_sendded', ['email' => $email])</h4>
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
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" minlength="1" maxlength="1" required="" autofocus=""
                                       style="background-color:#ececec;padding:.5em 0;margin:0 3px" id="type1"
                                       placeholder="?" autocomplete="off" title="@lang('auth.label_type')" name="type1"
                                       class="form-control btn-lg text-center type_field" value="{{ old('type1') }}">
                                <input type="text" minlength="1" maxlength="1" required=""
                                       style="background-color:#ececec;padding:.5em 0;margin:0 3px" id="type2"
                                       placeholder="?" autocomplete="off" title="@lang('auth.label_type')" name="type2"
                                       class="form-control btn-lg text-center type_field" value="{{ old('type2') }}">
                                <input type="text" minlength="1" maxlength="1" required=""
                                       style="background-color:#ececec;padding:.5em 0;margin:0 3px" id="type3"
                                       placeholder="?" autocomplete="off" title="@lang('auth.label_type')" name="type3"
                                       class="form-control btn-lg text-center type_field" value="{{ old('type3') }}">
                                <input type="text" minlength="1" maxlength="1" required=""
                                       style="background-color:#ececec;padding:.5em 0;margin:0 3px" id="type4"
                                       placeholder="?" autocomplete="off" title="@lang('auth.label_type')" name="type4"
                                       class="form-control btn-lg text-center type_field" value="{{ old('type4') }}">
                                <input type="text" minlength="1" maxlength="1" required=""
                                       style="background-color:#ececec;padding:.5em 0;margin:0 3px" id="type5"
                                       placeholder="?" autocomplete="off" title="@lang('auth.label_type')" name="type5"
                                       class="form-control btn-lg text-center type_field" value="{{ old('type5') }}">
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase" id="submit"
                                        style="width:calc(100% - 3.2rem)" disabled="disabled">
                                    @lang('auth.confirm')
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                @include('templates.components.progress-bar')
                                {{--@include('templates.components.dropdown-lang')--}}
                            </div>
                        </div>
                        {{--
                        @if (Route::has('dashboard.home'))
                            <div class="form-group" style="margin:3vh 0 0">
                                <div class="col-sm-12" style="padding:0">
                                    <br>
                                    <p>
                                        <a href="{{ route('dashboard.home', ['username' => $user->username]) }}"
                                           class="text-info ml-1">
                                            <b>{{ __('auth.confirm_email_later') }}</b>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endif
                        --}}
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
