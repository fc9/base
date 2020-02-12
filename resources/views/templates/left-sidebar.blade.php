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
                            <span class="hide-menu">{{ __('dashboard.header') }} </span>
                        </a>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">
                            {{ __('dashboard.ecommerce') }} <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.ecommerce.categories', ['username' => auth()->user()->username]) --}}">
                                    {{ __('dashboard.categories') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.ecommerce.products', ['username' => auth()->user()->username]) --}}">
                                    {{ __('dashboard.products') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.ecommerce.orders', ['username' => auth()->user()->username])-- }}">
                                    {{ __('dashboard.orders') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile < 10)
                            <li>
                                <a href="#">{{ __('dashboard.store') }} </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.ecommerce.my_orders', ['username' => auth()->user()->username]) --}}">
                                    {{ __('dashboard.my_orders') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">
                            {{ __('dashboard.finances') }} <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.financeiro.credito-debito') --}}">
                                    {{ __('dashboard.credit_and_debit') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.financeiro.historico-financeiro') --}}">
                                    {{ __('dashboard.financial_history') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.financeiro.gerenciar-saque') --}}">
                                    {{ __('dashboard.manage_withdrawal')  }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{-- route('dashboard.financeiro.historico-financeiro') --}}">
                                    {{ __('dashboard.financial_history') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.financeiro.historico-saque') --}}">
                                    {{ __('dashboard.withdrawal_history') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.financeiro.solicitar-saque') --}}">
                                    {{ __('dashboard.request_withdrawal') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">{{ __('dashboard.voucher') }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.voucher.voucher-admin') --}}">
                                    {{ __('dashboard.manager_voucher')  }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{-- route('dashboard.voucher.voucher') --}}">
                                    {{ __('dashboard.pay_with_voucher')  }} <span style="font-size: 10px;"></span>
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
                            {{ __('dashboard.network') }} <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{-- route('dashboard.network.unilevel', ['username'=> auth()->user()->username]) --}}">
                                    {{ __('dashboard.unilevel') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.network.binary', ['username' => auth()->user()->username]) --}}">
                                    {{ __('dashboard.binary') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            {{--<li>
                                <a href="{{ route('dashboard.network.binary.strategy', ['username' => auth()->user()->username]) }}">
                                    {{ __('dashboard.binary_strategy') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>--}}
                            <li>
                                <a href="{{-- route('dashboard.network.career_history', ['username' => auth()->user()->username]) --}}">
                                    {{ __('dashboard.career_history') }} <span style="font-size: 10px;"></span>
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
                            {{ __('dashboard.punctuation') }} <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{-- route('dashboard.pontuacao.qualificacao') --}}">
                                    {{ __('dashboard.points_qualification') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.pontuacao.comissao') --}}">
                                    {{ __('dashboard.commission_points') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.pontuacao.pool-point') --}}">
                                    {{ __('dashboard.pool_points') }} <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">{{ __('dashboard.admin') }}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.admin.usuario') --}}">
                                    {{ __('dashboard.user') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile < 10)
                            <li>
                                <a href="{{-- route('dashboard.admin.relatorio-atividade') --}}">
                                    {{ __('dashboard.activity_report') }}
                                </a>
                            </li>
                        @endif
                        @if(auth()->user()->access_profile >= 10)
                            <li>
                                <a href="{{-- route('dashboard.admin.aprovar-documento') --}}">
                                    {{ __('dashboard.document_approval') }}
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
                            {{ __('dashboard.material_download') }} <span style="font-size: 10px;"></span>
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
