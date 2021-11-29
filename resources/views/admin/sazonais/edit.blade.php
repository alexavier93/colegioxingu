@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Editar Página</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.sazonais.index') }}">Páginas Sazonais</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Página</li>
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

                    <form action="{{ route('admin.sazonais.update', ['pagina' => $pagina->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method("PUT")

                        <div class="form-group row">
                            <div class="col-sm-2">Banner</div>
                            <div class="col-sm-10">
                                <input type="file" name="banner" class="form-control">
                                <img class="w-50 mt-2" src="{{ asset('storage/'. $pagina->banner) }}" alt="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="titulo" class="form-control" value="{{ $pagina->titulo }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Texto</label>
                            <div class="col-md-10">
                                <textarea name="texto" class="form-control summernote" required>{{ $pagina->texto }}</textarea>
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
