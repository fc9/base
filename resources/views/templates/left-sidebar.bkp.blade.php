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

                <li>
                    <a href="{{ url(auth()->user()->username.'/') }}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">
                            Dashboard <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">
                            E-commerce <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                    <!--li><a href="{{ route('admin.ecommerce.categories') }}">Categorias</a></li>
                        <li><a href="{{ route('admin.ecommerce.products') }}">Produtos</a></li>
                        <li><a href="{{ route('admin.ecommerce.orders') }}">Pedidos</a></li-->
                        <li>
                            <a class="waves-effect waves-light"
                               href="#">Loja <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                    <!--li><a href="{{ route('admin.ecommerce.my_orders') }}">Meus pedidos</a></li-->
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">
                            Financeiro <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('app.financeiro.historico-financeiro') }}">
                                Histórico financeiro <span style="font-size: 10px;"></span>
                            </a></li>
                        <li>
                            <a href="{{ route('app.financeiro.historico-saque') }}">
                                Histórico de saque <span style="font-size: 10px;"></span></a>
                        </li>
                        <li>
                            <a href="{{ route('app.financeiro.solicitar-saque') }}">
                                Solicitar saque <span style="font-size: 10px;"></span></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">Voucher</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('app.voucher.voucher') }}">
                                Pagar com Voucher <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span class="hide-menu">
                            Rede <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('app.rede.unilevel') }}">
                                Unilevel <span style="font-size: 10px;"></span></a></li>
                        <li>
                            <a href="{{ route('backoffice.network.binary', ['username'=> auth()->user()->username]) }}">
                                Binário <span style="font-size: 10px;"></span></a>
                        </li>
                        <li>
                            <a href="#">
                                Estratégia binária <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('app.rede.historico-carreira') }}">
                                Histórico de carreira <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-certificate"></i>
                        <span class="hide-menu">
                            Pontuação <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('app.pontuacao.qualificacao') }}">
                                Ponto de qualificação <span style="font-size: 10px;"></span></a>
                        </li>
                        <li>
                            <a href="{{ route('app.pontuacao.comissao') }}">
                                Ponto comissão <span style="font-size: 10px;"></span></a>
                        </li>
                        <li>
                            <a href="{{ route('app.pontuacao.pool-point') }}">
                                Ponto Pool <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">Admin</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('app.admin.relatorio-atividade') }}">
                                Relatório de atividade <span style="font-size: 10px;"></span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" aria-expanded="false">
                        <i class="mdi mdi-briefcase-download"></i>
                        <span class="hide-menu">
                            Download Material <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
