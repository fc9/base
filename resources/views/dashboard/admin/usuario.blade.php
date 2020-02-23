@extends('templates.main')

@section('title', 'Gerenciar Usuário')

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
                    <div class="col-lg-2">
                        <label>USUÁRIO</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <label>E-MAIL</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <label>ID</label>
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <label>TIPO</label>
                        <select class="form-control">
                            <option selected>TODOS</option>
                            <option>PARTNER</option>
                            <option>MEMBRO</option>
                            <option>ATIVOS</option>
                            <option>INATIVOS</option>
                            <option>ATENDIMENTO</option>
                            <option>SUPORTE</option>
                            <option>BLOQUEADOS</option>
                            <option>CANCELADOS</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label>DE</label>
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
                    </div>
                    <div class="col-lg-3">
                        <label>ATÉ</label>
                        <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
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
                            <th>USUÁRIO</th>
                            <th>NOME DE USUÁRIO</th>
                            <th>PATROCINADOR</th>
                            <th>ID DOCUMENTO</th>
                            <th>ATIVIDADE</th>
                            <th>CARREIRA</th>
                            <th>DATA</th>
                            <th>BLOQUEADO</th>
                            <th>CANCELADO</th>
                            <th>AÇÕES</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>BRUNAS</td>
                            <td>BRUNAS SILVA</td>
                            <td>BRUNOS</td>
                            <td>131333</td>
                            <td>
                                <span class="badge badge-warning" style="color: #FFF;">ATIVO</span>
                            </td>
                            <td>$100</td>
                            <td>24/01/2020 10:30</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
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
