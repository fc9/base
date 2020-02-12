@extends('templates.main')

@section('title', 'Checkout')

@push('before-styles')

@endpush

@push('after-scripts')

@endpush

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-12 col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h5 class="font-weight-bold">Seu pedido de (Produto) foi realizado com sucesso.</h5>
                            <h5 class="font-weight-bold">Favor enviar o valor exato para que seja confirmado o pagamento do seu pedido.</h5>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="{{ $qrcode }}" /><br>
                            <strong> {{ '$blockio->wallet_address' }} </strong>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="mb-5">ID DO PEDIDO: 00051</h6>

                            <h1>
                                <i class="fab fa-bitcoin mr-3" style="font-size: 35px;"></i>
                                {{ '$blockio->amount' }}
                            </h1>
                            <h1 class="mb-5">
                                <i class="fas fa-dollar-sign mr-3" style="font-size: 35px;"></i>
                                {{ $amount_USD }},00
                            </h1>

                            <h5 class="mb-5">
                                Status: <span class="badge badge-danger pl-2" style="color: #FFF !important; padding: 5px 20px;">Pendente</span>
                                        <span class="d-none badge badge-success pl-2" style="color: #FFF !important; padding: 5px 20px;">Pago</span>
                            </h5>

                            <button type="button" class="btn btn-sm btn-info btn-rounded waves-effect waves-light">
                                Ir para meus pedidos
                            </button>

                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <h5 class="font-weight-bold">Obs: Usar taxa prioritária para que não haja demora na confirmação do seu pagamento.</h5>
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
