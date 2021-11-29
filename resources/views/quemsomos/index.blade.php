@extends('layouts.app')

@section('title', 'Colégio Xingu - ' . $pagina->titulo)

@section('content')

    <div id="quem-somos">

        <div class="page-title-content" style="background: url('{{ asset('storage/' . $pagina->banner) }}')">
            <div class="container">
                <h1>{{ $pagina->titulo }}</h1>
            </div>
        </div>

        {!! $pagina->texto !!}

        <section id="nossos-espacos" class="espacos">

            <div class="container">

                <div class="col-md-8 offset-md-2">

                    <div class="title-section text-center mb-3 mt-md-5">
                        <h2 class="m-0">NOSSOS ESPAÇOS</h2>
                        <hr>
                    </div>

                    <div class="slider carousel-espaco">

                        @foreach ($espacos as $espaco)

                            <div class="text-center">
                                <img class="w-100" src="{{ asset('storage/'.$espaco->thumbnail) }}" alt="">
                                <div class="overlay"></div>
                                <h4 class="text-uppercase text-light">{{ $espaco->titulo }}</h4>
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
