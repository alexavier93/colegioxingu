@extends('layouts.app')

@section('title', 'Colégio Xingu - Agenda')

@section('content')

    <div id="agenda">

        <div class="page-title-content" style="background: url('{{ asset('assets/images/banner-pages/blog.jpg') }}')">
            <div class="container">
                <h1>Agenda</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <br><br><br><br>

            </div>

        </section>

        <section class="agenda">

            <div class="container">

                <div class="col-lg-10 offset-lg-1">

                    <div class="row">

                        @if ($agenda->total() > 0)

                            @foreach ($agenda as $val)

                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center justify-content-start item-agenda">
                                        <div class="data-agenda d-flex flex-column align-items-center me-3">
                                            <span
                                                class="dia-semana">{{ $dias[date('D', strtotime($val->data))] }}</span>
                                            <span class="dia-numero">{{ date('d', strtotime($val->data)) }}</span>
                                            <span
                                                class="mes">{{ $mes[date('M', strtotime($val->data))] }}</span>
                                        </div>
                                        <h5 class="titulo-agenda">{{ $val->titulo }}</h5>
                                    </div>
                                </div>

                            @endforeach

                        @else

                            <h3 class="text-center p-3">Nenhuma data encontrada.</h3>

                        @endif

                    </div>


                </div>

            </div>

        </section>

    </div>

@endsection
