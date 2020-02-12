@extends('templates.main')

@section('title', 'Gerenciar Voucher')

@push('before-styles')

    <link rel="stylesheet" type="text/css" href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/datatables/media/css/dataTables.bootstrap4.css">

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
                        <div class="col-lg-3">
                            <label>NOME DE USUÁRIO</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label>CÓDIGO DO VOUCHER</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label>DATA DE CRIAÇÃO</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>DATA DE ULTILIZAÇÃO</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
                                <div class="input-group-append">
                                    <span class="input-group-text">até</span>
                                </div>
                                <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center pt-3">
                            <button type="button" class="btn btn-secondary waves-effect waves-light">PESQUISAR</button>
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
                                <th>ID OPERAÇÃO</th>
                                <th>NOME DE USUÁRIO</th>
                                <th>DATA GERAÇÃO</th>
                                <th>CODIGO DO VOUCHER</th>
                                <th>STATUS</th>
                                <th>ID FATURA</th>
                                <th>DATA DE ULTILIZAÇÃO</th>
                                <th>CANCELAR VOUCHER</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>josesilva</td>
                                <td>15/01/2020</td>
                                <td>Udki239d74j</td>
                                <td>
                                    <span class="badge badge-success" style="color: #FFF !important; padding: 5px 20px;">LIVRE</span>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">CANCELAR</button>
                                </td>
                            </tr>
                            <tr>
                                <td>97eyut</td>
                                <td>josesilva</td>
                                <td>15/01/2020</td>
                                <td>Udki239d74j</td>
                                <td>
                                    <span class="badge badge-warning" style="color: #FFF !important; padding: 5px 20px;">USADO</span>
                                </td>
                                <td>o9eyut</td>
                                <td>20/01/2020</td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" disabled>CANCELAR</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>josesilva</td>
                                <td>15/01/2020</td>
                                <td>Udki239d74j</td>
                                <td>
                                    <span class="badge badge-danger" style="color: #FFF !important; padding: 5px 20px;">CANCELADO</span>
                                </td>
                                <td></td>
                                <td>16/01/2020</td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" disabled>CANCELAR</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>josesilva</td>
                                <td>15/01/2020</td>
                                <td>Udki239d74j</td>
                                <td>
                                    <span class="badge badge-success" style="color: #FFF !important; padding: 5px 20px;">LIVRE</span>
                                </td>
                                <td></td>
                                <td> </td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">CANCELAR</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>josesilva</td>
                                <td>15/01/2020</td>
                                <td>Udki239d74j</td>
                                <td>
                                    <span class="badge badge-success" style="color: #FFF !important; padding: 5px 20px;">LIVRE</span>
                                </td>
                                <td></td>
                                <td> </td>
                                <td>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">CANCELAR</button>
                                </td>
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
