@extends('layouts.app')

@section('title', 'Colégio Xingu - Na Mídia')

@section('content')

    <div id="midia">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/midia.jpg') }}')">
            <div class="container">
                <h1>Na Mídia</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">XINGU NA MIDIA</h2>
                    <hr>
                </div>

                <div class="text-center col-md-10 offset-md-1">

                    <p class="text-light">Confira as ações do nosso colégio que repercutiram pela mídia.</p><br>

                </div>

            </div>

        </section>

        <section class="midia-01">

            <div class="container">

                <div class="row justify-content-center">

                    @foreach ($midias as $midia)
                        
                        <article class="col-md-12 col-lg-10 mb-5 d-flex justify-content-center align-items-center">

                            <div class="midia-image">
                                <img class="rounded" src="{{ asset('storage/'. $midia->image) }}" alt="Colégio Xingu">
                            </div>

                            <a href="{{ 'https://'.$midia->link }}" target="_blank" class="midia-info">

                                <h2 class="midia-title">{{ $midia->title }}</h2>

                                <h5 class="midia-date">{{ $midia->source }} | {{ $midia->date }}</h5>

                                <div class="midia-description text-grey my-3">{!! Str::limit($midia->intro, 150) !!}</div>

                                <button class="btn btn-primary link">Saiba mais</button>

                            </a>

                        </article>

                    @endforeach

                    <div class="d-flex justify-content-center mt-5">
                        {!! $midias->appends(Request::except('page'))->render() !!}
                    </div>

                </div>

            </div>

        </section>


    </div>

@endsection
