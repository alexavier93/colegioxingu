@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Midias</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.midias.index') }}">Midias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nova Midia</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">

            @include('flash::message')

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header">
                    <span class="m-0 font-weight-bold text-primary">Informações</span>
                </div>

                <div class="card-body">

                    <form action="{{ route('admin.midias.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Data da Publicação</label>
                            <div class="col-sm-10">
                                <input type="text" name="date" class="form-control" data-toggle="datepicker" value="{{ old('date') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Introdução</label>
                            <div class="col-md-10">
                                <textarea name="intro" class="form-control" rows="3" maxlength="239" required>{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Fonte da Notícia</label>
                            <div class="col-sm-10">
                                <input type="text" name="source" class="form-control" value="{{ old('source') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input type="text" name="link" class="form-control" value="{{ old('link') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Imagem</div>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" required>
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
