@extends('templates.main')

@section('title', __('dashboard.profile_title'))

@push('before-styles')
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #009efb;
            border: 0px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input + label:hover {
            background: #00befc;
            border-color: #fff;
        }

        .avatar-upload .avatar-edit input + label:after {
            content: "\F030";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: #fff;
            position: absolute;
            top: 5px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #f8f8f8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endpush

@push('after-scripts')
    <script>
        $('#avatarForm').submit(function (event) {
            console.log('ex')
            event.preventDefault()
            $.ajax({
                url: "{{ url('/' . $user->username . '/profile/update_avatar') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    $('#imagePreview').css('background-image', 'url(' + response.url + ')')
                    $('#imagePreview').hide()
                    $('#imagePreview').fadeIn(650)
                    console.log('success', response)
                },
                error: function (response) {
                    console.log('error', response)
                },
            })
        })
        $("#imageUpload").change(function (event) {
            $('#avatarForm').submit()
            // document.getElementById("avatarForm").submit()
        });

        {{--function readURL(input) {--}}
        {{--    if (input.files && input.files[0]) {--}}
        {{--        var reader = new FileReader();--}}
        {{--        reader.onload = function (e) {--}}
        {{--            if (['image/jpeg', 'image/jpg', 'image/png', 'image/gif'].indexOf(input.files[0].type) == -1) {--}}
        {{--                alert('Error : Only JPEG, PNG & GIF allowed')--}}
        {{--                return--}}
        {{--            }--}}
        {{--            e.preventDefault()--}}
        {{--            $.ajaxSetup({--}}
        {{--                headers: {--}}
        {{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--                }--}}
        {{--            })--}}
        {{--            $.ajax({--}}
        {{--                url: '{{ url('/' . $user->username . '/profile/update_avatar') }}',--}}
        {{--                method: 'post',--}}
        {{--                data: new FormData(reader.result),--}}
        {{--                /*data: { image: reader.result },*/--}}
        {{--                contentType: false,--}}
        {{--                cache: false,--}}
        {{--                processData: false,--}}
        {{--                success: function (response) {--}}
        {{--                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')')--}}
        {{--                    $('#imagePreview').hide()--}}
        {{--                    $('#imagePreview').fadeIn(650)--}}
        {{--                    console.log('success', response)--}}
        {{--                },--}}
        {{--                error: function (response) {--}}
        {{--                    console.log('error', response)--}}
        {{--                },--}}
        {{--            })--}}
        {{--        }--}}
        {{--        reader.readAsDataURL(input.files[0])--}}
        {{--    }--}}
        {{--}--}}

        {{--$("#imageUpload").change(function () {--}}
        {{--    readURL(this)--}}
        {{--});--}}
    </script>
@endpush

@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-12 col-lg-4 col-xlg-3">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <form id="avatarForm" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                                    <label for="imageUpload"></label>
                                    <button type="submit" style="display:none"></button>
                                </form>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url({{ $user->avatar !== null ? url($user->avatar) : '/images/user.jpg' }});">
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title mt-2">@lang('dashboard.user') : {{ $user->username }}</h4>
                        <h6 class="card-subtitle">@lang('dashboard.name')
                            : {{ $user->firstname . ' ' . $user->lastname }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-8">
                                @if(!$user->himself)
                                    <a href="{{ route('dashboard.home', ['username' => $user->username]) }}"
                                       class="link">
                                        <button type="button"
                                                class="btn btn-success btn-rounded waves-effect waves-light">
                                            @lang('dashboard.login_as_user')
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr class="m-0">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="mb-0">@lang('dashboard.status')</h6>
                            <span class="badge badge-success mb-3">@lang('dashboard.active')</span>
                            <h6 class="mb-0">@lang('dashboard.binary')</h6>
                            {{--<span class="badge badge-success mb-3">@lang('dashboard.active')</span>--}}
                            <span class="badge badge-warning mb-3">@lang('dashboard.disqualified')</span>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-0">@lang('dashboard.sponsor')</h6>
                            <span class="badge badge-success mb-3">{{ $indicator_username }}</span>
                            <h6 class="mb-0">@lang('dashboard.registration_date')</h6>
                            <span class="badge badge-success mb-3">{{ $user->create_at }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-0">@lang('dashboard.documentation')</h6>
                            <span class="badge badge-secondary mb-3">@lang('dashboard.in_process')</span>
                            <span class="d-none badge badge-warning mb-3">@lang('dashboard.pending')</span>
                            <span class="d-none badge badge-success mb-3">@lang('dashboard.approved')</span>
                        </div>
                    </div>
                    <form action="#" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>@lang('dashboard.wallet_for_withdrawal')</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>@lang('dashboard.password')</label>
                                <input type="password" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-secondary btn-block" disabled>
                                    @lang('dashboard.register')
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="font-weight-bold text-justify">
                                    @lang('dashboard.confirmation_to_wallet_registration')
                                </h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-md-12 col-lg-8 col-xlg-9">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#profile"
                           role="tab">@lang('dashboard.my_profile')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#security" role="tab">@lang('dashboard.safety')</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <h6>@lang('dashboard.personal_information')</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.name')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.email')</label>
                                        <input type="email" class="form-control form-control-line"
                                               value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.date_of_birth')</label>
                                        <input type="text" class="form-control form-control-line"
                                               placeholder="dd/mm/yyyy" data-mask="00/00/0000"
                                               value="{{ $user->birth_date }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.phone')</label>
                                        <input type="text" class="form-control form-control-line"
                                               placeholder="(xx) x xxxx-xxxx" value="{{ $phone }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.skype')</label>
                                        <input type="text" class="form-control form-control-line" value="{{ $skype }}">
                                    </div>
                                    {{--<div class="form-group col-md-6">
                                        <label>@lang('dashboard.document_id')</label>
                                        <input type="text" class="form-control form-control-line" value="{{ }}">
                                    </div>--}}
                                </div>

                                <div class="form-group">
                                    <h6>@lang('dashboard.address')</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>@lang('dashboard.zip_code')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['zip_code'] }}">
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label>@lang('dashboard.street')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['street'] }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.complement')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['complement'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.sector')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['sector'] }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>@lang('dashboard.city')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['city'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>@lang('dashboard.state')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['state'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>@lang('dashboard.country')</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['country'] }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" disabled class="btn btn-success">
                                            @lang('dashboard.update_profile')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="security" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <h6>@lang('dashboard.change_password')</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>@lang('dashboard.current_password')</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.new_password')</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('dashboard.repeat_new_password')</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" disabled class="btn btn-success">
                                            @lang('dashboard.update_password')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold">Aprovação de documento</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label>@lang('dashboard.')Motivo</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-inline d-flex align-items-center">
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-success">@lang('dashboard.')Aprovar</button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-danger">@lang('dashboard.')Rejeitar e apagar fotos</button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-danger">@lang('dashboard.')Rejeitar sem apagar fotos</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection
