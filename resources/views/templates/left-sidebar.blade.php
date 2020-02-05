<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
    @include('templates.components.sidebar-profile')
    <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                @if(auth()->user()->access_profile >= 10)
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">{{ __('app.header') }} </span>
                        </a>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">
                            {{ __('app.ecommerce') }} <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.ecommerce.categories', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.categories') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.ecommerce.products', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.products') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.ecommerce.orders', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.orders') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile < 10)
                            <li>
                                <a href="#">{{ __('app.store') }} </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.ecommerce.my_orders', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.my_orders') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">
                            {{ __('app.finances') }} <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.financeiro.credito-debito') }}">
                                    {{ __('app.credit_and_debit') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.financeiro.historico-financeiro') }}">
                                    {{ __('app.financial_history') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.financeiro.gerenciar-saque') }}">
                                    {{ __('app.manage_withdrawal')  }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('app.financeiro.historico-financeiro') }}">
                                    {{ __('app.financial_history') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.financeiro.historico-saque') }}">
                                    {{ __('app.withdrawal_history') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.financeiro.solicitar-saque') }}">
                                    {{ __('app.request_withdrawal') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">{{ __('app.voucher') }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.voucher.voucher-admin') }}">
                                    {{ __('app.manager_voucher')  }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('app.voucher.voucher') }}">
                                    {{ __('app.pay_with_voucher')  }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                @if(auth()->user()->access_profile < 10)
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span class="hide-menu">
                            {{ __('app.network') }} <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('app.network.unilevel', ['username'=> auth()->user()->username]) }}">
                                    {{ __('app.unilevel') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.network.binary', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.binary') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            {{--<li>
                                <a href="{{ route('app.network.binary.strategy', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.binary_strategy') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>--}}
                            <li>
                                <a href="{{ route('app.network.career_history', ['username' => auth()->user()->username]) }}">
                                    {{ __('app.career_history') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->access_profile >= 10)
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="mdi mdi-certificate"></i>
                            <span class="hide-menu">
                            {{ __('app.punctuation') }} <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('app.pontuacao.qualificacao') }}">
                                    {{ __('app.points_qualification') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.pontuacao.comissao') }}">
                                    {{ __('app.commission_points') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('app.pontuacao.pool-point') }}">
                                    {{ __('app.pool_points') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">{{ __('app.admin') }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.admin.usuario') }}">
                                    {{ __('app.user') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile < 10)
                            <li>
                                <a href="{{ route('app.admin.relatorio-atividade') }}">
                                    {{ __('app.activity_report') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{ route('app.admin.aprovar-documento') }}">
                                    {{ __('app.document_approval') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                @if(auth()->user()->access_profile < 10)
                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-briefcase-download"></i>
                            <span class="hide-menu">
                            {{ __('app.material_download') }} <span style="font-size: 10px;"></span>
                            </span>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
