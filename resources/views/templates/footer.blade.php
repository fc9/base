<div class="row mb-3">
    <div class="col-lg-3">
        <h3 class="font-weight-bold mb-0">@lang('dashboard.contact')</h3>
        <h6>@lang('dashboard.email@')</h6>
    </div>
    <div class="col-lg-3">
        <h3 class="font-weight-bold mb-0">@lang('dashboard.company_headquarters')</h3>
        <h6>@lang('dashboard.panama_city')</h6>
    </div>
    <div class="col-lg-3">
    </div>
    <div class="col-lg-3 text-right">
        <ul class="list-inline">
            <li>
                <button class="btn btn-circle btn-dark" style="background-color:#54667a;border:0">
                    <i class="fab fa-facebook"></i>
                </button>
            </li>
            <li>
                <button class="btn btn-circle btn-dark" style="background-color:#54667a;border:0">
                    <i class="fab fa-twitter"></i>
                </button>
            </li>
            <li>
                <button class="btn btn-circle btn-dark" style="background-color:#54667a;border:0">
                    <i class="fab fa-youtube"></i>
                </button>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-center">
        <h6 style="color:#54667a">
            <a href="{{ route('dashboard.home', ['username' => $user->username]) }}">@lang('auth.title')</a> &reg;
            <script>document.write(new Date().getFullYear())</script> @lang('auth.rights')
        </h6>
    </div>
</div>
