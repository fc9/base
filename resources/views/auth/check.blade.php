@extends('templates.master')

@section('title', config('app.name'))

@section('template-css')
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/toast-master/css/jquery.toast.css"
          rel="stylesheet">
    <link href="/css/monster/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/component/progress-bar.css">
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
    <script>
        $('#checkform').submit(function(){
            $(this).find('input[type=submit]').prop('disabled', true)
        })
    </script>
@endsection

@section('layout-content')
    <section id="wrapper">
        <div class="login-register"
             style="background-color:#f6f6f6;background-image:url('/images/template/auth/background.png');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="checkform" action="{{ url('/signup') }}"
                          method="post">
                        @csrf
                        <br>
                        <a href="javascript:void(0)" class="text-center db mb-3">
                            <img src="@lang('auth.logo')" alt="{{ env('APP_NAME') }}" width="auto" height="45px"/>
                        </a>
                        <h3 class="text-center" style="font-weight:700">@lang('auth.create_account')</h3>
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
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <input type="text" id="indicator" minlength="6" maxlength="18" required=""
                                       placeholder="@lang('auth.label_indicator')" autocomplete="off"
                                       title="@lang('auth.label_indicator')"
                                       name="indicator{{ $indicator !== '' ? '_readonly' : '' }}"
                                       class="form-control btn-lg text-center @error('indicator') is-invalid @enderror"
                                       value="{{ $indicator !== '' ? $indicator : old('indicator') }}"
                                    {{ $indicator !== '' ? 'readonly=""' : '' }}>
                                @if($indicator !== '')
                                    <input type="hidden" name="indicator" value="{{$indicator}}">
                                @endif
                                {{--@error('indicator')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="email" minlength="8" maxlength="45" required=""
                                       placeholder="@lang('auth.label_email')"
                                       title="@lang('auth.label_email')" name="email"
                                       class="form-control btn-lg text-center"
                                       value="{{ old('email') }}">
                                {{--@error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success pt-0 pl-2">
                                    <input id="checkbox-signup" type="checkbox" name="agree_to_terms">
                                    <label for="checkbox-signup">
                                        <a href="#">{{ __('auth.agree_to_all_terms') }}</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center mt-3">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase"
                                        style="width:calc(100% - 3.2rem)">
                                    @lang('auth.go')
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                @include('templates.components.progress-bar')
                                @include('templates.components.dropdown-lang')
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
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
