@extends('layouts.app')

@section('title', 'Colégio Xingu - '.$pagina->titulo)

@section('content')

    <div id="info">

        <div class="page-title-content" style="background: url('{{ asset('storage/'. $pagina->banner) }}')">
            <div class="container">
                <h1>{{ $pagina->titulo }}</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <br><br><br><br>

            </div>

        </section>

        <section class="texto">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">
                    {!! $pagina->texto !!}
                </div>

            </div>

        </section>

    </div>

@endsection
