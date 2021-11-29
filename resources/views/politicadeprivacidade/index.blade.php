@extends('layouts.app')

@section('title', 'Colégio Xingu - '.$pagina->titulo)

@section('content')

    <div id="politicadeprivacidade">

        <div class="page-title-content" style="background: url('{{ asset('storage/'. $pagina->banner) }}')">
            <div class="container">
                <h1>{{ $pagina->titulo }}</h1>
            </div>
        </div>

        {!! $pagina->texto !!}


    </div>

@endsection
