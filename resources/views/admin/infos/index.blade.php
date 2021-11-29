@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Informações</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Painel Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Informações</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <span class="m-0 font-weight-bold text-primary">Informações</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.infos.update', ['info' => $info->id]) }}" method="post">

                        @csrf
                        @method("PUT")


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" value="{{ $info->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-10">
                                <input type="text" name="telefone" class="form-control telefone" value="{{ $info->telefone }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input type="text" name="celular" class="form-control telefone" value="{{ $info->celular }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Endereço</label>
                            <div class="col-sm-10">
                                <input type="text" name="endereco" class="form-control" value="{{ $info->endereco }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" name="facebook" class="form-control" value="{{ $info->facebook }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" name="instagram" class="form-control" value="{{ $info->instagram }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" name="youtube" class="form-control" value="{{ $info->youtube }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Linkedin</label>
                            <div class="col-sm-10">
                                <input type="text" name="linkedin" class="form-control" value="{{ $info->linkedin }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tiktok</label>
                            <div class="col-sm-10">
                                <input type="text" name="tiktok" class="form-control" value="{{ $info->tiktok }}">
                            </div>
                        </div>

                        



                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>

                    </form>


                </div>

            </div>

        </div>


    </div>


@endsection
