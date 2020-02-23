@extends('templates..main')

@section('title', 'Crédito / Débito')

@push('before-styles')

@endpush

@push('after-scripts')

@endpush

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-12 col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Creditar</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Debitar</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label>Usuário</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label>E-mail</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label>Valor</label>
                            <input type="text" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true">
                        </div>
                        <div class="col-lg-3">
                            <label>Descrição</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Senha Master</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                Processar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
