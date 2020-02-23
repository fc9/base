<div class="user-profile">
    <!-- User profile image -->
    <div class="profile-img">
        <img src="{{ $user->avatar !== null ? url($user->avatar) : '/images/user.jpg' }}" alt="{{ $user->username }}"/>
    </div>
    <!-- User profile text-->
    <div class="profile-text">
        <a href="{{ route('dashboard.account.profile', ['username' => $user->username]) }}" role="button"
           class="dropdown-toggle link u-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            {{ $user->username }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu animated flipInY">
                <a href="{{ route('dashboard.account.profile', ['username' => $user->username]) }}"
                   class="dropdown-item">
                    <i class="ti-user mr-2"></i> @lang('dashboard.my_profile')
                    <!-- TODO: trocar 'dashboard' para 'backoffice' ou 'app'. -->
                </a>
            @if(!$user->is_admin && !$user->is_superuser)
            <a href="{{ route('dashboard.finances.history', ['username' => $user->username]) }}" class="dropdown-item">
                <i class="ti-wallet mr-2"></i> @lang('dashboard.finances')
            </a>
            @endif
            <div class="dropdown-divider"></div>
            <form id="logout" action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="cursor:pointer;border:0;padding:0;background:none;width:100%">
                        <i class="fa fa-power-off mr-2"></i> @lang('dashboard.logout')
            </form>
        </div>
    </div>
</div>