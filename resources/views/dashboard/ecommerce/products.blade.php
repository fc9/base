@extends('templates.main')

@section('title', 'Cadastro de Produto')

@push('before-styles')

    <link rel="stylesheet" type="text/css" href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/datatables/media/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/dropify/dist/css/dropify.min.css">

@endpush

@push('after-scripts')

    <!-- This is data table -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/datatables/datatables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    </script>

    <!-- jQuery file upload -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h6 class="font-weight-bold">INFORMAÇÕES BÁSICAS</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label>SKU</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label>NOME</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>PREÇO</label>
                                    <input type="text" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6 d-flex flex-column">
                                    <label>DESCRIÇÃO</label>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <label>SUB DESCRIÇÃO</label>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label>QUANTIDADE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label>CATEGORIA</label>
                                    <select class="form-control">
                                        <option selected>SELECIONE</option>
                                        <option>SELECIONE</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label>PAGAR POR</label>
                                    <select class="form-control">
                                        <option selected>SELECIONE</option>
                                        <option>SELECIONE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label>TRAIL</label>
                                    <select class="form-control">
                                        <option selected>SELECIONE</option>
                                        <option>SELECIONE</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-center flex-column">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Sessão Ativa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Ativa</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 mb-3">
                                <div class="col-lg-12">
                                    <h6 class="font-weight-bold">DIMENSÕES</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label>COMPRIMENTO</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>LARGURA</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>GERAÇÃO</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>PESO</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-5 mb-3">
                                <div class="col-lg-12">
                                    <h6 class="font-weight-bold">BÔNUS</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label>PONTO DE VOLUME</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>PONTO CARREIRA</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>BÔNUS BINÁRIO</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                    <label>BONUS INDICAÇÃO</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-5 mb-3">
                                <div class="col-lg-12">
                                    <h6 class="font-weight-bold">GALERIA</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <label>FOTO PRINCIPAL</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                                <div class="col-lg-8">
                                    <label>GALERIAS DE FOTOS</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Salvar</button>
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
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMAGEM</th>
                                <th>DESCRIÇÃO</th>
                                <th>QUANTIDADE</th>
                                <th>PREÇO</th>
                                <th>PONTO BINÁRIA</th>
                                <th>PONTO CARREIRA</th>
                                <th>STATUS</th>
                                <th>EDITAR</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th><i class="ti-pencil-alt"></i> | <i class="ti-trash text-danger"></i></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
