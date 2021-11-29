@extends('layouts.app')

@section('title', 'Colégio Xingu - '.$pagina->titulo)

@section('content')

    <div id="extracurricular">

        <div class="page-title-content" style="background: url('{{ asset('storage/'. $pagina->banner) }}')">
            <div class="container">
                <h1>{{ $pagina->titulo }}</h1>
            </div>
        </div>

        {!! $pagina->texto !!}

        <section class="extracurricular-01">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">

                    <div class="my-5">

                        <div class="slider carousel-espaco">

                            @foreach ($atividades as $atividade)
    
                                <div class="text-center">
                                    <img class="w-100" src="{{ asset('storage/'.$atividade->thumbnail) }}" alt="">
                                    <h4 class="text-uppercase text-bold text-cyan mt-2">{{ $atividade->titulo }}</h4>
                                    <p class="text-start">{{ $atividade->descricao }}</p>
                                </div>
    
                            @endforeach
    
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
