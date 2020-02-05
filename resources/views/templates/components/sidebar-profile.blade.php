<div class="user-profile">
    <!-- User profile image -->
    <div class="profile-img"><img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/5.jpg" alt="user"/>
    </div>
    <!-- User profile text-->
    <div class="profile-text">
        <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="true">
            {{ auth()->user()->username }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu animated flipInY">
            @if(auth()->user()->id > 2)
                <a href="{{ route('app.account.profile', ['username'=> auth()->user()->username]) }}"
                   class="dropdown-item">
                    <i class="ti-user mr-2"></i> {{ __('backoffice.my_profile') }}
                </a>
            @endif
            <a href="{{ route('app.financeiro.historico-financeiro') }}" class="dropdown-item">
                <i class="ti-wallet mr-2"></i>{{ __('backoffice.finances') }}
            </a>
            <div class="dropdown-divider"></div>
            <form id="logout" action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="border:0;padding:0;background:none;width:100%;text-align:left">
                    <a class="dropdown-item" title="{{ __('backoffice.logout_message') }}"
                       onclick="document.getElementById('logout').submit()">
                        <i class="fa fa-power-off mr-2"></i> {{ __('backoffice.logout') }}
                    </a>
            </form>
        </div>
    </div>
</div>