@extends('templates.main')

@section('title', 'Solicitar Saque')

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
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="font-weight-bold mb-3">Saldo Disponível</h6>
                                    <h4>
                                        <i class="fab fa-bitcoin mr-3" style="font-size: 25px;"></i>
                                        0,00
                                    </h4>
                                    <h4 class="mb-5">
                                        <i class="fas fa-dollar-sign mr-3" style="font-size: 25px;"></i>
                                        0,00
                                    </h4>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="font-weight-bold mb-3">Taxa de Saque</h6>
                                    <h4>
                                        <i class="fab fa-bitcoin mr-3" style="font-size: 25px;"></i>
                                        0,00
                                    </h4>
                                    <h4 class="mb-5">
                                        <i class="fas fa-dollar-sign mr-3" style="font-size: 25px;"></i>
                                        0,00
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12 text-center">
                            <label>CONFIRME SUA CARTEIRA</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label>Valor</label>
                            <input type="text" class="form-control" data-mask="000.000.000.000.000,00" disabled
                                   data-mask-reverse="true">
                        </div>
                        <div class="col-lg-3">
                            <label>Senha</label>
                            <input type="password" class="form-control" disabled>
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" disabled>
                                Solicitar
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold">Confirme em seu e-mail cadastrado sua solicitção de saque</h6>
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
