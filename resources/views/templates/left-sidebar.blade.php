<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
    @include('templates.components.sidebar-profile')
    <!-- End User profile text-->
        &nbsp;
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                @if($user->is_superuser || $user->is_admin)
                    <li>
                        <a href="#" aria-expanded="false">
                            <i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">@lang('dashboard.dashboard')</span>
                        </a>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">
                            @lang('dashboard.ecommerce') <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if($user->is_superuser || $user->is_admin)
                            <li>
                                <a href="{{  route('dashboard.ecommerce.categories', ['username' => $user->username]) }}">
                                    @lang('dashboard.categories')
                                </a>
                            </li>
                            <li>
                                <a href="{{  route('dashboard.ecommerce.products', ['username' => $user->username]) }}">
                                    @lang('dashboard.products')
                                </a>
                            </li>
                            <li>
                                <a href="{{  route('dashboard.ecommerce.orders', ['username' => $user->username]) }}">
                                    @lang('dashboard.orders')
                                </a>
                            </li>
                        @endif
                        @if($user->is_user)
                            <li>
                                <a href="#">
                                    @lang('dashboard.store')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.ecommerce.my_orders', ['username' => $user->username]) }}">
                                    @lang('dashboard.my_orders')
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">
                            @lang('dashboard.finances')  <span style="font-size: 10px;"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if($user->is_superuser || $user->is_admin)
                            <li>
                                <a href="{{ route('dashboard.finances.transactions', ['username' => $user->username]) }}">
                                    @lang('dashboard.credit_and_debit')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.finances.history', ['username' => $user->username]) }}">
                                    @lang('dashboard.financial_history')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.finances.withdraw.manage', ['username' => $user->username]) }}">
                                    @lang('dashboard.manage_withdrawal')
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('dashboard.finances.balance', ['username' => $user->username]) }}">
                                    @lang('dashboard.financial_history') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.finances.widthdraw.history', ['username' => $user->username]) }}">
                                    @lang('dashboard.withdrawal_history') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.finances.withdraw.request', ['username' => $user->username]) }}">
                                    @lang('dashboard.request_withdrawal') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-square-inc-cash"></i>
                        <span class="hide-menu">@lang('dashboard.voucher')</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if($user->is_superuser || $user->is_admin)
                            <li>
                                <a href="{{ route('dashboard.vouchers.admin', ['username' => $user->username]) }}">
                                    @lang('dashboard.manager_voucher')
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('dashboard.vouchers.voucher', ['username' => $user->username]) }}">
                                    @lang('dashboard.pay_with_voucher') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                @if($user->is_user)
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span class="hide-menu">
                            @lang('dashboard.network')  <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('dashboard.network.unilevel', ['username' => $user->username]) }}">
                                    @lang('dashboard.unilevel') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.network.binary', ['username' => $user->username]) }}">
                                    @lang('dashboard.binary') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            {{--<li>
                                <a href="{{ route('dashboard.network.binary.strategy', ['username' => $user->username]) }}">
                                    @lang('dashboard.binary_strategy')  <span style="font-size: 10px;"></span>
                                </a>
                            </li>--}}
                            <li>
                                <a href="{{ route('dashboard.network.career_history', ['username' => $user->username]) }}">
                                    @lang('dashboard.career_history') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if($user->is_superuser || $user->is_admin)
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="mdi mdi-certificate"></i>
                            <span class="hide-menu">
                            @lang('dashboard.score') <span style="font-size: 10px;"></span>
                        </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="{{ route('dashboard.score.qualification', ['username' => $user->username]) }}">
                                    @lang('dashboard.points_qualification') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.score.commission', ['username' => $user->username]) }}">
                                    @lang('dashboard.commission_points') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.score.pool', ['username' => $user->username]) }}">
                                    @lang('dashboard.pool_points') <span style="font-size: 10px;"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu">@lang('dashboard.manager') </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        @if($user->is_superuser || $user->is_admin)
                            <li>
                                <a href="{{ route('dashboard.management.users', ['username' => $user->username]) }}">
                                    @lang('dashboard.users')
                                </a>
                            </li>
                        @endif
                        @if($user->is_user)
                            <li>
                                <a href="{{ route('dashboard.management.activity_report', ['username' => $user->username]) }}">
                                    @lang('dashboard.activity_report')
                                </a>
                            </li>
                        @endif
                        @if($user->is_superuser || $user->is_admin)
                            <li>
                                <a href="{{ route('dashboard.management.document_approval', ['username' => $user->username]) }}">
                                    @lang('dashboard.document_approval')
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                @if($user->is_user)
                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="mdi mdi-briefcase-download"></i>
                            <span class="hide-menu">
                            @lang('dashboard.material_download')  <span style="font-size: 10px;"></span>
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
