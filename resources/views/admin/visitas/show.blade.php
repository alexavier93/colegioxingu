@extends('admin.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="page-header-content py-3">

        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Agenda de Visitas</h1>
        </div>

        <ol class="breadcrumb mb-0 mt-4">
            <li class="breadcrumb-item"><a href="#">Painel Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.visitas.index') }}">Agenda de Visitas</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $visita->subject }}</li>
        </ol>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="m-0 font-weight-bold text-primary">Enviado - {{ $visita->created_at->format('d/m/Y') }}</span>

                    <div>
                        <a href="{{ route('admin.visitas.index') }}" class="btn btn-sm btn-primary mr-1">Voltar</a>
                        <a href="javascript:;" data-toggle="modal" data-id='{{ $visita->id }}' data-target="#modalDelete" class="btn btn-sm btn-danger">Excluir</a>
                    </div>
                    
                </div>

                <div class="card-body p-5">

                    <div class="col-9">

                        <p class="lead">{{ $visita->name }}</p>

                        <span class="font-weight-bold">E-mail: </span><em>{{ $visita->email }}</em><br>
                        <span class="font-weight-bold">Telefone: </span><em>{{ $visita->telefone }}</em><br>
                        <span class="font-weight-bold">Série procurada: </span><em>{{ $visita->serie }}</em><br>
                        <span class="font-weight-bold">Ano da matrícula: </span><em>{{ $visita->ano }}</em><br>
                        <span class="font-weight-bold">Horário para a visita: </span><em>{{ $visita->horario }}</em><br>

                    </div>



                </div>


            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h5 class="py-3 m-0">Tem certeza que deseja excluir este registro?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Fechar</button>
                    <form action="{{ route('admin.visitas.delete') }}" method="post" class="float-right">
                        @csrf
                        <input type="hidden" id="id" name="id" value="{{ $visita->id }}">
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



