@extends('templates.main')

@section('title', __('dashboard.hello') . ' ' . auth()->user()->username)

@push('after-styles')
    <!-- chartist CSS -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist.min.css"
          rel="stylesheet">
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist-init.css"
          rel="stylesheet">
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
          rel="stylesheet">
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
@endpush

@push('after-scripts')

    <!-- chartist chart -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/echarts/echarts-all.js"></script>
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/monster/js/toastr.js"></script>

    <script>

        // ==============================================================
        // Total revenue chart
        // ==============================================================
        var chart2Data = @json($chart2Data);
        new Chartist.Line('.total-revenue4', {
                labels: chart2Data.labels,
                series: chart2Data.series
            },
            {
                high: chart2Data.high,
                low: chart2Data.low
                , showArea: true
                , fullWidth: true
                , plugins: [
                    Chartist.plugins.tooltip()
                ], // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
                axisY: {
                    onlyInteger: true
                    , offset: 20
                    , labelInterpolationFnc: function (value) {
                        return (value / 1) + 'k';
                    }
                }

            });


        // ==============================================================
        // doughnut chart option
        // ==============================================================
        var chartSales = @json($chartSales);
        var doughnutChart = echarts.init(document.getElementById('sales-donute'));
        // specify chart configuration item and data
        option = {
            tooltip: {
                trigger: 'item'
                , formatter: "{a} <br/>{b} : {c} ({d}%)"
            }
            , legend: {
                show: false
                , data: chartSales.seriesTitles
            }
            , toolbox: {
                show: false
                , feature: {
                    dataView: {
                        show: false
                        , readOnly: false
                    }
                    , magicType: {
                        show: false
                        , type: ['pie', 'funnel']
                        , option: {
                            funnel: {
                                x: '25%'
                                , width: '50%'
                                , funnelAlign: 'center'
                                , max: 1548
                            }
                        }
                    }
                    , restore: {
                        show: true
                    }
                    , saveAsImage: {
                        show: true
                    }
                }
            }
            , color: chartSales.colors
            , calculable: false
            , series: [
                {
                    name: 'Source'
                    , type: 'pie'
                    , radius: ['80%', '90%']
                    , itemStyle: {
                        normal: {
                            label: {
                                show: false
                            }
                            , labelLine: {
                                show: false
                            }
                        }
                        , emphasis: {
                            label: {
                                show: false
                                , position: 'center'
                                , textStyle: {
                                    fontSize: '30'
                                    , fontWeight: 'bold'
                                }
                            }
                        }
                    }
                    , data: chartSales.data
                }
            ]
        };
        // use configuration item and data specified to show chart
        doughnutChart.setOption(option, true), $(function () {
            function resize() {
                setTimeout(function () {
                    doughnutChart.resize()
                }, 100)
            }

            $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
        });


        // ==============================================================
        // Gauge chart option
        // ==============================================================
        var salesPrediction = @json($salesPrediction);
        var gaugeChart = echarts.init(document.getElementById('gauge-chart'));
        option = {
            tooltip: {
                formatter: "{a} <br/>{b} : {c}%"
            }
            , toolbox: {
                show: false
                , feature: {
                    mark: {
                        show: true
                    }
                    , restore: {
                        show: true
                    }
                    , saveAsImage: {
                        show: true
                    }
                }
            }
            , series: [
                {
                    name: ''
                    , type: 'gauge'
                    , splitNumber: 0, // 分割段数，默认为5
                    axisLine: { // 坐标轴线
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: [[0.2, '#029ff6'], [0.8, '#1badcb'], [1, '#42c386']]
                            , width: 20
                        }
                    }
                    , axisTick: { // 坐标轴小标记
                        splitNumber: 0, // 每份split细分多少段
                        length: 12, // 属性length控制线长
                        lineStyle: { // 属性lineStyle控制线条样式
                            color: 'auto'
                        }
                    }
                    , axisLabel: { // 坐标轴文本标签，详见axis.axisLabel
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto'
                        }
                    }
                    , splitLine: { // 分隔线
                        show: false, // 默认显示，属性show控制显示与否
                        length: 50, // 属性length控制线长
                        lineStyle: { // 属性lineStyle（详见lineStyle）控制线条样式
                            color: 'auto'
                        }
                    }
                    , pointer: {
                        width: 5
                        , color: '#54667a'
                    }
                    , title: {
                        show: false
                        , offsetCenter: [0, '-40%'], // x, y，单位px
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            fontWeight: 'bolder'
                        }
                    }
                    , detail: {
                        textStyle: { // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            color: 'auto'
                            , fontSize: '14'
                            , fontWeight: 'bolder'
                        }
                    }
                    , data: salesPrediction.data
                }
            ]
        };
        timeTicket = setInterval(function () {
            option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
            gaugeChart.setOption(option, true);
        }, 2000)
        // use configuration item and data specified to show chart
        gaugeChart.setOption(option, true), $(function () {
            function resize() {
                setTimeout(function () {
                    gaugeChart.resize()
                }, 100)
            }

            $(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
        });


        // ==============================================================
        // sales difference
        // ==============================================================
        var salesDifference = @json($salesDifference);
        new Chartist.Pie('.ct-chart', {
            series: salesDifference.series
        }, {
            donut: true
            , donutWidth: 20
            , startAngle: 0
            , showLabel: false
        });

    </script>
@endpush

@section('content')


    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bônus Comissão Direta</h4>
                    <div class="text-left" style="float: left;">
                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                    </div>
                    <div class="text-right mb-3">
                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                    </div>
                    <span class="text-success">0%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bônus Pool Tranding</h4>
                    <div class="text-left" style="float: left;">
                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                    </div>
                    <div class="text-right mb-3">
                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                    </div>
                    <span class="text-info">0%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bônus Binário</h4>
                    <div class="text-left" style="float: left;">
                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                    </div>
                    <div class="text-right mb-3">
                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                    </div>
                    <span class="text-purple">0%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bônus Matching</h4>
                    <div class="text-left" style="float: left;">
                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                    </div>
                    <div class="text-right mb-3">
                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                    </div>
                    <span class="text-danger">0%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3>Faturamento Mensal</h3>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-success"></i>
                                                Bônus Comissão Direta
                                            </h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-info"></i>
                                                Bônus Pool Trading
                                            </h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-purple"></i>
                                                Bônus Binário
                                            </h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i class="fa fa-circle mr-1 text-danger"></i>
                                                Bônus Matching
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="total-revenue4" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Faturamento Semanal</h4>
                    <div id="sales-donute" style="width:100%; height:300px;"></div>
                    <div class="round-overlap mt-3"><i class="mdi mdi-cart"></i></div>
                    <ul class="list-inline mt-4 text-center">
                        <li><i class="fa fa-circle " style="color:#55ce63;"></i> Bônus Comissão Direta</li>
                        <li><i class="fa fa-circle " style="color:#009efb;"></i> Bônus Pool Trading</li>
                        <li><i class="fa fa-circle " style="color:#7460ee;"></i> Bônus Binário</li>
                        <li><i class="fa fa-circle " style="color:#f62d51;"></i> Bônus Matching</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Saldo da conta a receber em bônus</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <div class="mb-4">
                                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                                    </div>
                                    <div class="">
                                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div id="gauge-chart" style=" width:150px; height:150px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Saldo disponível</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <div class="mb-4">
                                        <h4 class="font-light mb-0"><i class="fas fa-dollar-sign"></i> 0,00</h4>
                                    </div>
                                    <div class="">
                                        <h4 class="font-light mb-0"><i class="fab fa-bitcoin"></i> 0,00</h4>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="ct-chart" style="width:120px; height: 120px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex flex-row">
                        <div class="col-lg-4 text-center"><img
                                    src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/1.jpg" alt="user"
                                    class="img-circle" width="100"></div>
                        <div class="col-lg-8 pl-3">
                            <h6>Usuário: </h6>
                            <h6>Nome: </h6>

                            <div class="d-flex justify-content-around">
                                <h6>Pool Tranding <span class="badge badge-success ml-2">Ativo</span></h6>
                                <h6>Membership <span class="badge badge-success ml-2">Ativo</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col border-right">
                            <h2 class="text-center font-light mb-0">0.000</h2>
                            <h6 class="text-center">Total Binário Esquerdo</h6>
                        </div>
                        <div class="col border-right">
                            <h2 class="text-center font-light mb-0">0.000</h2>
                            <h6 class="text-center">Total Binário Direito</h6>
                        </div>
                        <div class="col">
                            <h2 class="text-center font-light mb-0">0.000</h2>
                            <h6 class="text-center">Total Unilevel</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body">
                    <p class="text-center aboutscroll">
                        Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing
                        elit, sed do eiusmod tempor incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do
                        eiusmod tempor incididuntt
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">ÚLTIMOS PEDIDOS DE SAQUE</h4>
                        <div class="d-none d-lg-flex ml-auto">
                            <a role="button" href="#" class="btn btn-outline-secondary waves-effect waves-light">
                                Ver Todos
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table stylish-table">
                            <thead>
                            <tr>
                                <th colspan="2">USUÁRIO</th>
                                <th>DATA</th>
                                <th>ID SAQUE</th>
                                <th>STATUS</th>
                                <th>VALOR</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">ÚLTIMOS QUALIFICADOS</h4>
                        <div class="d-none d-lg-flex ml-auto">
                            <a role="button" href="#" class="btn btn-outline-secondary waves-effect waves-light">
                                Ver Todos
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table stylish-table">
                            <thead>
                            <tr>
                                <th colspan="2">USUÁRIO</th>
                                <th>TITULO</th>
                                <th>DATA</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td style="width:50px;">
                                    <span class="round">S</span>
                                </td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                </td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->


@endsection
