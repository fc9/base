@extends('templates.master')

@section('template-css')
    <!-- toast CSS -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="/css/monster/style.css" rel="stylesheet">
{{--    <link href="/css/colors/default.css" id="theme" rel="stylesheet">--}}
@endsection

@section('template-custom-js')
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/custom.min.js"></script>
@endsection

@section('layout-content')

    @include('templates.topbar')
    @include('templates.left-sidebar')

    <div class="page-wrapper">
        <div class="container-fluid">

            @if(true)
                @include('templates.breadcrumb')
            @else
                <div class="row mb-4"></div>
            @endif

            @yield('content')

            @include('templates.footer')

        </div>
    </div>

@endsection
