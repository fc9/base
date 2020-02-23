@extends('templates.main')

@section('title', 'Árvore Binária')

@push('before-styles')

@endpush

@push('after-scripts')

@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <dl class="row m-0">
                                <dt class="col-sm-4">PV Esquerdo</dt>
                                <dd class="col-sm-8">0</dd>

                                <dt class="col-sm-4">PV Direito</dt>
                                <dd class="col-sm-8">0</dd>

                                <dt class="col-sm-4">Nome de usuário</dt>
                                <dd class="col-sm-8">criscamargo (Affilliate)</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row m-0">
                                <dt class="col-sm-4">Total usuário E.</dt>
                                <dd class="col-sm-8">0</dd>

                                <dt class="col-sm-4">Total usuário D.</dt>
                                <dd class="col-sm-8">0</dd>

                                <dt class="col-sm-4">Patrocinador</dt>
                                <dd class="col-sm-8">{{ $parent_username }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <ul class="list-inline d-flex align-items-center">
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-angle-double-up" style="color: #FFF;"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-info">
                                        <i class="fas fa-angle-up" style="color: #FFF;"></i>
                                    </button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Balanceado</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Esquerda</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline3" name="customRadioInline1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline3">Direita</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" id="button-addon1">
                                        <i class="fas fa-search" style="color: #FFF;"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Pesquisar"
                                       aria-describedby="button-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12" style="overflow-x: scroll;">
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('') }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon_binary.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
