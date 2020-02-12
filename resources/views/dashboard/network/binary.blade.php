@extends('templates.main')

@section('title', __('app.binary_tree') )

@push('before-styles')

@endpush

@push('after-scripts')

@endpush

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <dl class="row m-0">
                                <dt class="col-sm-4">{{ __('app.pv_left') }}</dt>
                                <dd class="col-sm-8">{{ $left_pv }}</dd>

                                <dt class="col-sm-4">{{ __('app.pv_right') }}</dt>
                                <dd class="col-sm-8">{{ $right_pv }}</dd>

                                <dt class="col-sm-4">{{ __('app.username') }}</dt>
                                <dd class="col-sm-8">{{ $username }} ({{ $graduate }})</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <dl class="row m-0">
                                <dt class="col-sm-4">{{ __('app.total_user_left') }}</dt>
                                <dd class="col-sm-8">{{ $left_count }}</dd>

                                <dt class="col-sm-4">{{ __('app.total_user_right') }}</dt>
                                <dd class="col-sm-8">{{ $right_count }}</dd>

                                <dt class="col-sm-4">{{ __('app.sponsor') }}</dt>
                                <dd class="col-sm-8">{{ $parent_username }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <ul class="list-inline d-flex align-items-center">
                                <li class="list-inline-item p-0">
                                    <a href="{{ $username === auth()->user()->username ? 'javascript:void(0)' : url(auth()->user()->username . '/network/binary') }}"
                                       title="{{ __('app.see_my_node') }}">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-angle-double-up" style="color: #FFF;"></i>
                                        </button>
                                    </a>
                                </li>
                                <li class="list-inline-item p-0">
                                    <a href="{{  $binary_parent_username === false ? 'javascript:void(0)' : url($binary_parent_username . '/network/binary') }}"
                                       title="{{ __('app.show_generation_above') }}">
                                        <button class="btn btn-info">
                                            <i class="fas fa-angle-up" style="color: #FFF;"></i>
                                        </button>
                                    </a>
                                </li>
                                <li class="list-inline-item p-0" style="font-size:16px">

                                    <form id="form_work_leg" action="{{ route('app.network.workleg', compact('username')) }}" method="post">
                                        @csrf
                                        <input type="hidden" id="work_leg" name="work_leg" value="{{ $work_leg }}">
                                    </form>
                                    <script>
                                        function updateWorkLeg(leg) {
                                            document.getElementById('work_leg').value = leg
                                            document.getElementById('form_work_leg').submit()
                                        }
                                    </script>

                                    @if(auth()->user()->username === $username)
                                        <div class="custom-control custom-radio custom-control-inline"
                                             style="cursor:pointer"
                                             onclick="updateWorkLeg('{{ config('network.binary.leg.balanced') }}')">
                                            <input type="radio" id="customRadioInlineLeg1" name="work_leg"
                                                   value="{{ config('network.binary.leg.balanced') }}"
                                                   class="custom-control-input"
                                                   @if($work_leg === config('network.binary.leg.balanced'))
                                                   checked="checked"
                                                    @endif>
                                            <label class="custom-control-label" for="customRadioInlineLeg1">
                                                {{ __('app.balanced') }}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline"
                                             style="cursor:pointer"
                                             onclick="updateWorkLeg('{{ config('network.binary.leg.left') }}')">
                                            <input type="radio" id="customRadioInlineLeg2" name="work_leg"
                                                   value="{{ config('network.binary.leg.left') }}"
                                                   class="custom-control-input"
                                                   @if($work_leg === config('network.binary.leg.left'))
                                                   checked="checked"
                                                    @endif>
                                            <label class="custom-control-label" for="customRadioInlineLeg2">
                                                {{ __('app.left') }}
                                            </label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline"
                                             style="cursor:pointer"
                                             onclick="updateWorkLeg('{{ config('network.binary.leg.right') }}')">
                                            <input type="radio" id="customRadioInlineLeg3" name="work_leg"
                                                   value="{{ config('network.binary.leg.right') }}"
                                                   class="custom-control-input"
                                                   @if($work_leg === config('network.binary.leg.right'))
                                                   checked="checked"
                                                    @endif>
                                            <label class="custom-control-label" for="customRadioInlineLeg3">
                                                {{ __('app.right') }}
                                            </label>
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary" id="button-addon1">
                                        <i class="fas fa-search" style="color: #FFF;"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ __('app.search') }}"
                                       disabled aria-describedby="button-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-12" style="overflow-x: scroll;">
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    <a href="{{ url( $node[0]->username . '/network/binary') }}"
                                       title="{{ $node[0]->username }}">
                                        <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[0]->graduate }}.png"
                                             width="auto" height="45px"/>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    @if($node[1]->id !== null)
                                        <a href="{{ url( $node[1]->username . '/network/binary') }}"
                                           title="{{ $node[1]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[1]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[2]->id !== null)
                                        <a href="{{ url( $node[2]->username . '/network/binary') }}"
                                           title="{{ $node[2]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[2]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    @if($node[3]->id !== null)
                                        <a href="{{ url( $node[3]->username . '/network/binary') }}"
                                           title="{{ $node[3]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[3]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[4]->id !== null)
                                        <a href="{{ url( $node[4]->username . '/network/binary') }}"
                                           title="{{ $node[4]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[4]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[5]->id !== null)
                                        <a href="{{ url( $node[5]->username . '/network/binary') }}"
                                           title="{{ $node[5]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[5]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if ($node[6]->id !== null)
                                        <a href="{{ url( $node[6]->username . '/network/binary') }}"
                                           title="{{ $node[6]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[6]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    @if ($node[7]->id !== null)
                                        <a href="{{ url( $node[7]->username . '/network/binary') }}"
                                           title="{{ $node[7]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[7]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if ($node[8]->id !== null)
                                        <a href="{{ url( $node[8]->username . '/network/binary') }}"
                                           title="{{ $node[8]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[8]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if ($node[9]->id !== null)
                                        <a href="{{ url( $node[9]->username . '/network/binary') }}"
                                           title="{{ $node[9]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[9]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[10]->id !== null)
                                        <a href="{{ url( $node[10]->username . '/network/binary') }}"
                                           title="{{ $node[10]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[10]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[11]->id !== null)
                                        <a href="{{ url( $node[11]->username . '/network/binary') }}"
                                           title="{{ $node[11]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[11]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[12]->id !== null)
                                        <a href="{{ url( $node[12]->username . '/network/binary') }}"
                                           title="{{ $node[12]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[12]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[13]->id !== null)
                                        <a href="{{ url( $node[13]->username . '/network/binary') }}"
                                           title="{{ $node[13]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[13]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[14]->id !== null)
                                        <a href="{{ url( $node[14]->username . '/network/binary') }}"
                                           title="{{ $node[14]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[14]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                            <ul class="list-inline d-flex justify-content-around">
                                <li class="list-inline-item">
                                    @if($node[15]->id !== null)
                                        <a href="{{ url( $node[15]->username . '/network/binary') }}"
                                           title="{{ $node[15]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[15]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[16]->id !== null)
                                        <a href="{{ url( $node[16]->username . '/network/binary') }}"
                                           title="{{ $node[16]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[16]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[17]->id !== null)
                                        <a href="{{ url( $node[17]->username . '/network/binary') }}"
                                           title="{{ $node[17]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[17]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[18]->id !== null)
                                        <a href="{{ url( $node[18]->username . '/network/binary') }}"
                                           title="{{ $node[18]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[18]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[19]->id !== null)
                                        <a href="{{ url( $node[19]->username . '/network/binary') }}"
                                           title="{{ $node[19]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[19]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[20]->id !== null)
                                        <a href="{{ url( $node[20]->username . '/network/binary') }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[20]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[21]->id !== null)
                                        <a href="{{ url( $node[21]->username . '/network/binary') }}"
                                           title="{{ $node[21]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[21]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[22]->id !== null)
                                        <a href="{{ url( $node[22]->username . '/network/binary') }}"
                                           title="{{ $node[22]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[22]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[23]->id !== null)
                                        <a href="{{ url( $node[23]->username . '/network/binary') }}"
                                           title="{{ $node[23]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[23]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[24]->id !== null)
                                        <a href="{{ url( $node[24]->username . '/network/binary') }}"
                                           title="{{ $node[24]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[24]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[25]->id !== null)
                                        <a href="{{ url( $node[25]->username . '/network/binary') }}"
                                           title="{{ $node[25]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[25]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[26]->id !== null)
                                        <a href="{{ url( $node[26]->username . '/network/binary') }}"
                                           title="{{ $node[26]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[26]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[27]->id !== null)
                                        <a href="{{ url( $node[27]->username . '/network/binary') }}"
                                           title="{{ $node[27]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[27]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[28]->id !== null)
                                        <a href="{{ url( $node[28]->username . '/network/binary') }}"
                                           title="{{ $node[28]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[28]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[29]->id !== null)
                                        <a href="{{ url( $node[29]->username . '/network/binary') }}"
                                           title="{{ $node[29]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[29]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    @if($node[30]->id !== null)
                                        <a href="{{ url( $node[30]->username . '/network/binary') }}"
                                           title="{{ $node[30]->username }}">
                                            <img src="/vendor/wrappixel/monster-admin/4.2.1/assets/images/graduate{{ $node[30]->graduate }}.png"
                                                 width="auto" height="45px"/>
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
