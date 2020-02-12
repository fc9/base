@extends('templates.main')

@section('title', 'Configuração do e-mail')

@push('before-styles')

    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />

@endpush

@push('after-scripts')

    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/dropzone-master/dist/dropzone.js"></script>
    <script>
        $(document).ready(function() {

            $('.textarea_editor').wysihtml5();

        });
    </script>

@endpush

@section('content')

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-xlg-2 col-lg-4 col-md-5">
                    <div class="card-body inbox-panel">
                        <h6 class="font-weight-bold">Tipos de e-mail</h6>

                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Boas Vindas</a>
                            <a class="nav-link" id="v-pills-pedido-tab" data-toggle="pill" href="#v-pills-pedido" role="tab" aria-controls="v-pills-pedido" aria-selected="false">Pagamento de pedido confirmado</a>
                            <a class="nav-link" id="v-pills-saque-tab" data-toggle="pill" href="#v-pills-saque" role="tab" aria-controls="v-pills-saque" aria-selected="false">Confirmação do saque</a>
                            <a class="nav-link" id="v-pills-aprovado-tab" data-toggle="pill" href="#v-pills-aprovado" role="tab" aria-controls="v-pills-aprovado" aria-selected="false">Saque Aprovado</a>
                            <a class="nav-link" id="v-pills-recuperar-tab" data-toggle="pill" href="#v-pills-recuperar" role="tab" aria-controls="v-pills-recuperar" aria-selected="true">Recuperação de Senha</a>
                            <a class="nav-link" id="v-pills-cancelar-tab" data-toggle="pill" href="#v-pills-cancelar" role="tab" aria-controls="v-pills-cancelar" aria-selected="false">Cancelamento de Cadastro</a>
                            <a class="nav-link" id="v-pills-bloqueio-tab" data-toggle="pill" href="#v-pills-bloqueio" role="tab" aria-controls="v-pills-bloqueio" aria-selected="false">Bloqueio de Cadastro</a>
                            <a class="nav-link" id="v-pills-titulos-tab" data-toggle="pill" href="#v-pills-titulos" role="tab" aria-controls="v-pills-titulos" aria-selected="false">Avanços de Titulos</a>
                        </div>
                    </div>
                </div>
                <div class="col-xlg-10 col-lg-8 col-md-7">
                    <div class="card-body">
                        <h3 class="card-title">Escrever nova mensagem</h3>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="form-group">
                                    <input class="form-control" placeholder="To:">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Subject:">
                                </div>
                                <div class="form-group">
                                    <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                </div>
                                <h4><i class="ti-link"></i> Anexo</h4>
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-success mt-3"><i class="fa fa-envelope-o"></i> Salvar</button>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pedido" role="tabpanel" aria-labelledby="v-pills-pedido-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-saque" role="tabpanel" aria-labelledby="v-pills-saque-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-aprovado" role="tabpanel" aria-labelledby="v-pills-aprovado-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-recuperar" role="tabpanel" aria-labelledby="v-pills-recuperar-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-cancelar" role="tabpanel" aria-labelledby="v-pills-cancelar-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-bloqueio" role="tabpanel" aria-labelledby="v-pills-bloqueio-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="v-pills-titulos" role="tabpanel" aria-labelledby="v-pills-titulos-tab">
                                ...
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->

@endsection
