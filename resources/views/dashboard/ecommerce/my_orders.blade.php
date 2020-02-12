@extends('templates.main')

@section('title', 'Meus Pedidos')

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
                            <label>ID</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <label>STATUS</label>
                            <select class="form-control">
                                <option selected>TODOS</option>
                                <option>CARINHO</option>
                                <option>PENDENTE</option>
                                <option>PROCESSADO</option>
                                <option>PAGO</option>
                                <option>EXPIRADO</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>FATURADO</label>
                            <select class="form-control">
                                <option selected>TODOS</option>
                                <option>SIM</option>
                                <option>NÃO</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>NOME DE USUÁRIO</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <label>DATA ÍNICIO</label>
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
                        </div>
                        <div class="col-lg-3">
                            <label>DATA FINAL</label>
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" data-mask="00/00/0000">
                        </div>
                        <div class="col-lg-3 d-flex align-items-end">
                            <button type="button" class="btn btn-secondary waves-effect waves-light">FILTRAR</button>
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
                                <th>ID PEDIDO</th>
                                <th>USUÁRIO</th>
                                <th>NOME</th>
                                <th>TOTAL</th>
                                <th>TIPO PAGAMENTO</th>
                                <th>DATA REGISTRO</th>
                                <th>FATURADO</th>
                                <th>STATUS</th>
                                <th>APROVAR</th>
                                <th>APROVAR S. B.</th>
                                <th>DATA APROVAÇÃO</th>
                                <th>DETALHE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>BRUNAS</td>
                                <td>BRUNAS SILVA</td>
                                <td>$ 10.000,00</td>
                                <td>ADMIN</td>
                                <td>25/01/2020</td>
                                <td><i class="fas fa-check text-danger"></i></td>
                                <td><span class="badge badge-info" style="color: #FFF !important; padding: 5px 20px;">CARINHO</span></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td>25/01/2020</td>
                                <td><i class="fas fa-edit"></i></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>BRUNAS</td>
                                <td></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><span class="badge badge-warning" style="color: #FFF !important; padding: 5px 20px;">PENDENTE</span></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>BOLETO</td>
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-primary" style="color: #FFF !important; padding: 5px 20px;">PROCESSANDO</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>BITCOIN</td>
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-success" style="color: #FFF !important; padding: 5px 20px;">PAGO</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-danger" style="color: #FFF !important; padding: 5px 20px;">EXPIRADO</span></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
