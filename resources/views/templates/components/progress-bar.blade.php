<div class="progress-bar-component">
    <div class="steps">
        <div class="step active">
            <div class="step-label">@lang('auth.1st_step')</div>
        </div>
        <div class="step-line @if($step > 1) active @endif"></div>
        <div class="step @if($step > 1) active @endif">
            <div class="step-label">@lang('auth.2st_step')</div>
        </div>
        <div class="step-line @if($step > 2) active @endif"></div>
        <div class="step @if($step > 2) active @endif">
            <div class="step-label">@lang('auth.3st_step')</div>
        </div>
    </div>
</div>
