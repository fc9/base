<div style="position:absolute;width:11rem;top:1.25rem;right:1.25rem;text-align:right">
<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
   title="@lang('app.language')" style="padding:0">
    <i class="flag-icon flag-icon-{{ App::getLocale() === 'en' ? 'us' : App::getLocale()  }}"></i>
</a>
<div class="dropdown-menu dropdown-menu-right animated bounceInDown"
style="overflow:hidden">
    <a class="dropdown-item" href="{{ url('/locale/en') }}">
        <i class="flag-icon flag-icon-us"></i>&nbsp;English
    </a>
    <a class="dropdown-item" href="{{ url('/locale/es') }}">
        <i class="flag-icon flag-icon-es"></i>&nbsp;Espanol
    </a>
    <a class="dropdown-item" href="{{ url('/locale/cn') }}">
        <i class="flag-icon flag-icon-cn"></i>&nbsp;简体中文
    </a>
    <a class="dropdown-item" href="{{ url('/locale/ru') }}">
        <i class="flag-icon flag-icon-ru"></i>&nbsp;русский
    </a>
    <a class="dropdown-item" href="{{ url('/locale/fr') }}">
        <i class="flag-icon flag-icon-fr"></i>&nbsp;Le français
    </a>
    <a class="dropdown-item" href="{{ url('/locale/jp') }}">
        <i class="flag-icon flag-icon-jp"></i>&nbsp;日本語
    </a>
    <a class="dropdown-item" href="{{ url('/locale/kr') }}">
        <i class="flag-icon flag-icon-kr"></i>&nbsp;한국어
    </a>
    <a class="dropdown-item" href="{{ url('/locale/pt') }}">
        <i class="flag-icon flag-icon-pt"></i>&nbsp;Português
    </a>
</div>
</div>
