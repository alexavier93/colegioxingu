@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Páginas</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Painel Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Páginas</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            @include('flash::message')

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <span class="m-0 font-weight-bold text-primary">Páginas</span>
                </div>

                <div class="card-body">

                    <div class="table-paginas d-none d-sm-block">

                        <table id="dataTables" class="table table-bordered dt-responsive">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($paginas as $pagina)

                                    <tr>
                                        <td>{{ $pagina->id }}</th>
                                        <td class="w-25"><img class="img-fluid w-100" src="{{ asset('storage/'.$pagina->banner) }}" alt=""></td>
                                        <td>{{ $pagina->titulo }}</td>
                                        <td width="15%">
                                            <a href="{{ route('admin.paginas.edit', ['pagina' => $pagina->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection
