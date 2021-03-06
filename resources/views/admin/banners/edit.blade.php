@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Banners</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.banners.index') }}">Banners</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Banner</li>
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

                    <form action="{{ route('admin.banners.update', ['banner' => $banner->id]) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method("PUT")

                        <div class="form-group row">
                            <div class="col-sm-2">Status</div>
                            <div class="col-sm-10">
                                <label class="switch">
                                    <input type="checkbox" name="status" value="1" {{ ($banner->status == 1 ? 'checked' : '') }}>
                                    <span class="slider success"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $banner->title }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Mostrar Título</div>
                            <div class="col-sm-10">
                                <label class="switch">
                                    <input type="checkbox" name="title_active" value="1" {{ ($banner->title_active == 1 ? 'checked' : '') }}>
                                    <span class="slider success"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" value="{{ $banner->description }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input type="text" name="link" class="form-control" value="{{ $banner->link }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Imagem</div>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">
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
