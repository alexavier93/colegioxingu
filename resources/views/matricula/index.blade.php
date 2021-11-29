@extends('layouts.app')

@section('title', 'Colégio Xingu - '.$pagina->titulo)

@section('content')

    <div id="matricula">

        <div class="page-title-content" style="background: url('{{ asset('storage/'. $pagina->banner) }}')">
            <div class="container">
                <h1>{{ $pagina->titulo }}</h1>
            </div>
        </div>


        {!! $pagina->texto !!}

        <section id="agende-uma-visita" class="matricula-02">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">

                    <h2 class="text-center text-cyan mb-3"><strong>AGENDE UMA VISITA</strong></h2>

                    <p class="text-light mb-3">Para dar entrada na solicitação de matrícula, é preciso realizar uma visita
                        agendada em que as famílias têm a chance de conhecer nossa infraestrutura e projeto pedagógico.
                        Também é possível esclarecer dúvidas sobre valores da escola e os detalhes da matrícula.</p>


                    <div class="row justify-content-center align-items-center">

                        @include('flash::message')

                        <form action="{{ route('matricula.sendMail') }}" method="POST" class="text-center">

                            @csrf

                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome do responsável" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="telefone" class="form-control telefone" placeholder="Telefone" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                            </div>

                            <div class="mb-3">
                                <select name="serie" class="form-control" required>
                                    <option value="">Série procurada</option>
                                    <option value="Infantil (3 anos)">Infantil (3 anos)</option>
                                    <option value="Infantil I (4 anos)">Infantil I (4 anos)</option>
                                    <option value="Infantil II (5 anos)">Infantil II (5 anos)</option>
                                    <option value="1º ano">1º ano</option>
                                    <option value="2º ano">2º ano</option>
                                    <option value="3º ano">3º ano</option>
                                    <option value="4º ano">4º ano</option>
                                    <option value="5º ano">5º ano</option>
                                    <option value="6º ano">6º ano</option>
                                    <option value="7º ano">7º ano</option>
                                    <option value="8º ano">8º ano</option>
                                    <option value="9º ano">9º ano</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="ano" class="form-control" placeholder="Ano da matrícula (ex: 2022)" maxlength="20" required>
                            </div>

                            <div class="mb-3">

                                <p class="text-light">Qual é o melhor horário para a visita? </p>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="horario" id="radio1" value="Manhã">
                                    <label class="form-check-label text-light" for="radio1">Manhã</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="horario" id="radio2" value="Tarde">
                                    <label class="form-check-label text-light" for="radio2">Tarde</label>
                                </div>
                            </div>


                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                              </div>
                        </form>

                    </div>

                </div>

        </section>

    </div>

@endsection
