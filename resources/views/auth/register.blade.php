@extends('templates.master')

@section('title', config('app.name'))

@section('template-css')
    <style>
        input.phone_error {
            color: #800 !important;
            background-color: #fdd !important;
        }

        #show {
            display: none;
        }

        #show.visible {
            display: block;
        }
    </style>
    <link href="/css/monster/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/component/progress-bar.css">
    <link rel="stylesheet" href="/component/intl-tel-input-16.0.0/build/css/intlTelInput.min.css">
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
    <script src="/component/intl-tel-input-16.0.0/build/js/intlTelInput.js"></script>
    <script src="/js/auth/register.js"></script>
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register"
             style="background-color:#f6f6f6;background-image:url('/images/template/auth/background.png');">
            <div class="login-box card">
                <div class="card-body">
                    <form method="post" action="{{ url('/signup/register') }}" id="registerform"
                          class="form-horizontal form-material">
                        @csrf
                        <input type="hidden" name="indicator" value="{{ $indicator }}">
                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="agree_to_terms" value="{{ $agree_to_terms }}">
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="@lang('app.logo')" alt="{{ env('APP_NAME') }}" width="auto" height="45px"/>
                        </a>
                        <h3 class="text-center" style="font-weight:700">@lang('auth.enter_your_details')</h3>
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
                        <div class="form-row">
                            <div class="form-group col-md-6" style="max-width:47%">
                                <input type="text" id="firtname" minlength="3" maxlength="18" required=""
                                       placeholder="@lang('auth.label_firstname')*" autocomplete="off"
                                       title="@lang('auth.label_firstname')" name="firstname"
                                       class="form-control" value="{{ old('firstname')}}">
                            </div>
                            <div class="form-group col-md-6" style="max-width:47%">
                                <input type="text" id="lastname" minlength="3" maxlength="45"
                                       placeholder="@lang('auth.label_lastname')" autocomplete="off"
                                       title="@lang('auth.label_lastname')" name="lastname"
                                       class="form-control" value="{{ old('lastname')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" minlength="6" maxlength="18" required=""
                                       placeholder="@lang('auth.label_username')*" autocomplete="off"
                                       title="@lang('auth.label_username')" name="username"
                                       class="form-control btn-lg text-center" value="{{ old('username') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" minlength="8" maxlength="24" required=""
                                       placeholder="@lang('auth.label_password')"
                                       title="@lang('auth.label_password')" name="password"
                                       class="form-control btn-lg text-center is-invalid2" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" minlength="8" maxlength="24" required=""
                                       placeholder="@lang('auth.label_confirm_password')"
                                       title="@lang('auth.label_confirm_password')"
                                       name="confirm_password"
                                       class="form-control btn-lg text-center" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <select class="form-control btn-lg m-bot15 text-center" required="" name="country"
                                        id="country">
                                    @if ($countries->count() > 0)
                                        @foreach($countries as $country)
                                            <option value="{{ $country->getCode() }}"
                                                    {{ $country->getCode() === old('country', $selected_country) ? 'selected="selected"' : '' }}>
                                                {{ $country->getShortName() }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="overflow:initial">
                            <div class="col-xs-12">
                                <input type="tel" maxlength="24" required="" placeholder="" name="phone"
                                       id="phone" class="form-control btn-lg" value="{{ old('phone') }}">
                                <div class="invalid-feedback errormsg" id="show">??</div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase"
                                        style="width:calc(100% - 3.2rem)">
                                    @lang('auth.sign_up')
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                @include('templates.components.progress-bar')
                                {{--@include('templates.components.dropdown-lang')--}}
                            </div>
                        </div>
                        @if (Route::has('login'))
                            <div class="form-group" style="margin:3vh 0 0">
                                <div class="col-sm-12" style="padding:0">
                                    <br>
                                    <p>
                                        <a href="{{ route('login') }}" class="text-info ml-1">
                                            <b>{{ __('auth.have_an_account') }}</b>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="{{ route('signup') }}" class="text-info ml-1">
                                            <b>@lang('auth.back')</b>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
