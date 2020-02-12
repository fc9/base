@extends('templates.main')

@section('title', __('app.profile_title'))

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
            background: #fff;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input + label:after {
            content: "\F030";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: #757575;
            position: absolute;
            top: 10px;
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function () {
            readURL(this);
        });
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
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                     style="background-image: url(/vendor/wrappixel/monster-admin/4.2.1/assets/images/users/5.jpg);">
                                </div>
                            </div>
                        </div>

                        <h4 class="card-title mt-2">{{ __('app.user') }}: {{ strtoupper($username) }}</h4>
                        <h6 class="card-subtitle">{{ __('app.name') }}: {{ $name }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-8">
                                <a href="{{ route('app.home', ['username' => $username]) }}" class="link">
                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                        {{ __('app.login_as_user') }}
                                    </button>
                                </a>
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
                            <h6 class="mb-0">@lang('app.status')</h6>
                            <span class="badge badge-success mb-3">@lang('app.active')Ativo</span>
                            <h6 class="mb-0">@lang('app.binary')</h6>
                            <span class="badge badge-success mb-3">Ativo</span>
                            {{--<span class="badge badge-warning mb-3">Desqualificado</span>--}}
                        </div>
                        <div class="col-lg-6">
                            <h6 class="mb-0">Patrocinador</h6>
                            <span class="badge badge-success mb-3">{{ $indicator_username }}</span>
                            <h6 class="mb-0">Data de registro</h6>
                            <span class="badge badge-success mb-3">{{ $create_at }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h6 class="mb-0">Documentação</h6>
                            <span class="badge badge-secondary mb-3">Em processo</span>
                            <span class="d-none badge badge-warning mb-3">Pendente</span>
                            <span class="d-none badge badge-success mb-3">Aprovada</span>
                        </div>
                    </div>
                    <form action="#" method="post">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Carteira para recebimento de saque</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <label>Senha</label>
                                <input type="password" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-secondary btn-block" disabled>
                                    @lang('Cadastrar')
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="font-weight-bold text-justify">É necessário a confirmação em seu e-mail para
                                    concluir o processo de cadastramento de sua carteira.</h6>
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
                        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#security" role="tab">Segurança</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <h6>Informações Pessoais</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nome</label>
                                        <input type="text" class="form-control form-control-line" value="{{ $name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control form-control-line" value="{{ $email }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Data de Nascimento</label>
                                        <input type="text" class="form-control form-control-line"
                                               placeholder="dd/mm/yyyy" data-mask="00/00/0000"
                                               value="{{ $birth_date }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control form-control-line"
                                               placeholder="(xx) x xxxx-xxxx" value="{{ $phone }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Skype</label>
                                        <input type="text" class="form-control form-control-line" value="{{ $skype }}">
                                    </div>
                                    {{--<div class="form-group col-md-6">
                                        <label>ID Documento</label>
                                        <input type="text" class="form-control form-control-line" value="{{ }}">
                                    </div>--}}
                                </div>

                                <div class="form-group">
                                    <h6>Endereço</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>CEP</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['zip_code'] }}">
                                    </div>
                                    <div class="form-group col-md-9">
                                        <label>Logradouro</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['street'] }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['complement'] }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bairro</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['sector'] }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Cidade</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['city'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['state'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Páis</label>
                                        <input type="text" class="form-control form-control-line"
                                               value="{{ $address['country'] }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" disabled class="btn btn-success">Atualizar Perfil</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="security" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <h6>Alterar Senha</h6>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Senha Atual</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nova Senha</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Repetir Nova Senha</label>
                                        <input type="password" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" disabled class="btn btn-success">Atualizar Senha</button>
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
                            <label>Motivo</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-inline d-flex align-items-center">
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-success">Aprovar</button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-danger">Rejeitar e apagar fotos</button>
                                </li>
                                <li class="list-inline-item p-0">
                                    <button class="btn btn-danger">Rejeitar sem apagar fotos</button>
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
