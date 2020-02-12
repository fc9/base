<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('monster.demos.phptojsvars') }}">
                <!-- Logo icon -->
                <b class="d-none">
                    <!-- Dark Logo icon -->
                    <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/logo_mini.svg" alt="homepage"
                         class="dark-logo" width="auto" height="50px"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                         <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/logo.svg" alt="homepage"
                              class="dark-logo" width="auto" height="50px" style="margin-left: -30px;"/>
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav align-items-center ml-4 mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                       href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                       href="javascript:void(0)">
                        <i class="icon-arrow-left-circle"></i>
                    </a>
                </li>
                <li class="d-none d-lg-flex nav-item">
                    <script>
                        function clipboardURL() {
                            let url = '{{ url('/invitation/'. Auth()->user()->username) }}';
                            document.execCommand(url)
                            alert(url)
                        }
                    </script>
                    @lang('dashboard.link_invitation')
                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light ml-2"
                            onclick="clipboardURL()">
                        @lang('dashboard.copy_link') <i class="ti-clipboard"></i>
                    </button>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav align-items-center my-lg-0">
                <li>
                    <form method="post"
                          action="{{-- route('dashboard.ecommerce.checkout', ['username' => Auth()->user()->username]) --}}"
                          class="nav-item dropdown mega-dropdown" onsubmit="checkRadius()">
                        @csrf
                        @if(auth()->user()->access_profile < 10)
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               style="color: #FFF !important; padding: 5px 40px !important;"
                               class="btn btn-warning btn-rounded dropdown-toggle text-muted waves-effect waves-light"
                               href="">
                                @lang('dashboard.store')
                            </a>
                        @endif
                        <div class="dropdown-menu animated bounceInDown">
                            <ul class="mega-dropdown-menu row justify-content-center">
                                <li class="col-lg-2 col-xlg-2">
                                    <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon/graduation-cap.svg"
                                         width="auto" height="35px"/>
                                    <h4 class="font-weight-bold mb-0">
                                        @lang('dashboard.courses_title')
                                    </h4>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="courser"
                                                       value="course_basic"
                                                       class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline1">
                                                    @lang('dashboard.course_basic')
                                                </label>
                                                <span class="font-weight-bold">$100</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="courser" checked
                                                       value="course_vision" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">
                                                    @lang('dashboard.course_vision')
                                                </label>
                                                <span class="font-weight-bold">$250</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="courser"
                                                       value="course_advance"
                                                       class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">
                                                    @lang('dashboard.course_advance')
                                                </label>
                                                <span class="font-weight-bold">$500</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mt-1" style="font-size: 9px;">
                                                @lang('dashboard.courses_description')
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-lg-2">
                                    <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon/stable.svg"
                                         width="auto" height="35px"/>
                                    <h4 class="font-weight-bold mb-0">
                                        @lang('dashboard.signs_title')
                                    </h4>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline4" name="signal_1"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline4">
                                                    @lang('dashboard.sign_1')
                                                </label>
                                                <span class="font-weight-bold">$FREE</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" name="signal_2"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline5">
                                                    @lang('dashboard.sign_3') /mês
                                                </label>
                                                <span class="font-weight-bold">$50</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline6" name="signal_3"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline6">
                                                    @lang('dashboard.sign_6') /mês
                                                </label>
                                                <span class="font-weight-bold">$80</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mt-1" style="font-size: 9px;">
                                                @lang('dashboard.signs_description') }}
                                            </p>
                                        </li>
                                    </ul>

                                </li>
                                <li class="col-lg-2">
                                    <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon/robot.svg"
                                         width="auto" height="35px"/>
                                    <h4 class="font-weight-bold mb-0">
                                        @lang('dashboard.robots_trader_title')
                                    </h4>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline7" name="robot_trader_1"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline7">
                                                    @lang('dashboard.robot_trader_3m')
                                                </label>
                                                <span class="font-weight-bold">$250</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline8" name="robot_trader_2"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline8">
                                                    @lang('dashboard.robot_trader_6m')
                                                </label>
                                                <span class="font-weight-bold">$400</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline9" name="robot_trader_3"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline9">
                                                    @lang('dashboard.robot_trader_12m')
                                                </label>
                                                <span class="font-weight-bold">$600</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mt-1" style="font-size: 9px;">
                                                @lang('dashboard.robots_trader_description')
                                            </p>
                                        </li>
                                    </ul>

                                </li>
                                <li class="col-lg-2 col-xlg-4">
                                    <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/icon/coupon.svg"
                                         width="auto" height="35px"/>
                                    <h4 class="font-weight-bold mb-0">
                                        @lang('dashboard.vouchers_title')
                                    </h4>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline10" name="customRadioInline1"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline10">
                                                    @lang('dashboard.voucher_1u')
                                                </label>
                                                <span class="font-weight-bold">$250</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline11" name="customRadioInline1"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline11">
                                                    @lang('dashboard.voucher_5u')
                                                </label>
                                                <span class="font-weight-bold">$1.250</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline12" name="customRadioInline1"
                                                       class="custom-control-input" disabled>
                                                <label class="custom-control-label" for="customRadioInline12">
                                                    @lang('dashboard.voucher_10u')
                                                </label>
                                                <span class="font-weight-bold">$2.500</span>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mt-1" style="font-size: 9px;">
                                                @lang('dashboard.vouchers_description')
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center align-items-center text-center">
                                <div class="custom-control custom-checkbox mr-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        @lang('dashboard.terms_accepted')  <a
                                                href="#">@lang('dashboard.terms') </a>.
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-warning btn-rounded waves-effect waves-light"
                                        onclick="/*alert('action...')*/">
                                    @lang('dashboard.buy')
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/5.jpg" alt="user"
                             class="profile-pic"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/5.jpg"
                                             alt="user">
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ auth()->user()->username }}</h4>
                                        <p class="text-muted">{{ substr(auth()->user()->email, 0, 16) }}...</p>
                                        <a href="{{-- route('dashboard.account.profile', ['username' => auth()->user()->username]) --}}"
                                           class="btn btn-rounded btn-danger btn-sm">
                                            @lang('dashboard.view_profile')
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{-- route('dashboard.account.profile', ['username' => auth()->user()->username]) --}}">
                                    <i class="ti-user"></i> @lang('dashboard.view_profile')
                                </a>
                            </li>
                            <li>
                                <a href="{{-- route('dashboard.finances.history', ['username' => auth()->user()->username]) --}}">
                                    <i class="ti-wallet"></i> @lang('dashboard.finances')
                                </a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <script>

                                </script>
                                <form id="logout" action="{{ url('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" style="border:0;padding:0;background:none;width:100%">
                                            <i class="fa fa-power-off"></i>
                                            &nbsp;@lang('dashboard.logout')
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       title="@lang('dashboard.language')">
                        <i class="flag-icon flag-icon-{{ App::getLocale() === 'en' ? 'us' : App::getLocale()  }}"></i>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right animated bounceInDown">
                        <a class="dropdown-item" href="{{ url('/locale/en') }}">
                            <i class="flag-icon flag-icon-us"></i>&nbsp;English
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/pt') }}">
                            <i class="flag-icon flag-icon-pt"></i>&nbsp;Português (PT)
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/es') }}">
                            <i class="flag-icon flag-icon-es"></i>&nbsp;Espanol
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/fr') }}">
                            <i class="flag-icon flag-icon-fr"></i>&nbsp;Le français
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/cn') }}">
                            <i class="flag-icon flag-icon-cn"></i>&nbsp;简体中文
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/jp') }}">
                            <i class="flag-icon flag-icon-jp"></i>&nbsp;日本語
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/kr') }}">
                            <i class="flag-icon flag-icon-kr"></i>&nbsp;한국어
                        </a>
                        <a class="dropdown-item" href="{{ url('/locale/ru') }}">
                            <i class="flag-icon flag-icon-ru"></i>&nbsp;русский
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
