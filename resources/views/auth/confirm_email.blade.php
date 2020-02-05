{{--@extends('templates.application')--}}
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
            <div class="login-box card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.request') }}">
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                <i class="icon-like" style="font-size:36px"></i>
                                <br><br>
                                <h4 class="font-light mb-0">{{ $title }}</h4>
                                <br>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                <p>{{ __('auth.go_home') }}
                                    <a href="{{ route('login') }}" class="text-info ml-1">
                                        <b>{{ __('auth.sign_in') }}</b>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
