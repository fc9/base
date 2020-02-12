@extends('templates.main')

@section('title', 'Dashboard')

@push('after-styles')
    <!-- chartist CSS -->
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist.min.css"
          rel="stylesheet">
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist-init.css"
          rel="stylesheet">
    <link
        href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <link href="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
@endpush

@push('after-scripts')

    <!-- chartist chart -->
    <script src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script
        src="/vendor/wrappixel/monster-admin/4.2.1/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
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
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3>Vendas de Cursos</h3>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted"><i
                                                    class="fa fa-circle mr-1 text-purple"></i>
                                                Basic
                                            </h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i
                                                    class="fa fa-circle mr-1 text-blue"></i>
                                                Vision
                                            </h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted"><i
                                                    class="fa fa-circle mr-1 text-success"></i>
                                                Advance
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
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">86</span>
                                    <h6 class="text-muted">Total Cadastro</h6>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">248</span>
                                    <h6 class="text-muted">Cadastros Ativos</h6>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="30%" class="css-bar mb-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">352</span>
                                    <h6 class="text-muted">Total de Pedidos</h6>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="40%" class="css-bar mb-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">159</span>
                                    <h6 class="text-muted">Total de Pedidos Pagos</h6>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="60%" class="css-bar mb-0 css-bar-info css-bar-60"><i class="mdi mdi-receipt"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vendas do mês</h4>
                    <div id="sales-donute" style="width:100%; height:300px;"></div>
                    <div class="round-overlap mt-3"><i class="mdi mdi-cart"></i></div>
                    <ul class="list-inline mt-4 text-center">
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
        <div class="col-lg-6 col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $salesPrediction['title'] }}</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$3528</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
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
                            <h4 class="card-title">{{ $salesDifference['title'] }}</h4>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">$4316</span>
                                    <h6 class="text-muted">(150-165 Sales)</h6>
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
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block">
                        <h4 class="card-title">ÚLTIMOS PEDIDOS DE SAQUE</h4>
                        <div class="ml-auto">
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
                        <div class="ml-auto">
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
