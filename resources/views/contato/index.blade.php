@extends('layouts.app')

@section('title', 'Colégio Xingu - Fale Conosco')

@section('content')

    <div id="contato">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/fale-conosco.jpg') }}')">
            <div class="container">
                <h1>Fale Conosco</h1>
            </div>
        </div>

        <section class="intro">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">FALE CONOSCO</h2>
                    <hr>
                </div>

                <div class="text-center col-md-10 offset-md-1">

                    <p class="text-light">Confira abaixo nossos canais de comunicação e fale com a gente!</p><br>
                </div>

            </div>

        </section>

        <section class="contato-01">

            <div class="container">

                <div class="row justify-content-center">


                    <div class="col-xl-5 col-md-12 col-sm-12 map">

                        <h2 class="text-cyan mb-3"><strong>INFORMAÇÕES DE CONTATO</strong></h2>

                        <p class="text-grey">Entre em contato conosco para maiores informações.</p>

                        <div class="infos">
                            <div class="icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="info">{{ $info->celular }}</div>
                        </div>

                        <div class="infos">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="info">{{ $info->telefone }}</div>
                        </div>

                        <div class="infos">
                            <div class="icon"><i class="far fa-envelope"></i></div>
                            <div class="info">{{ $info->email }}</div>
                        </div>

                        <div class="infos">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info">{{ $info->endereco }}</div>
                        </div>

                        <p class="text-grey">Quer fazer parte da nossa equipe? Envie seu currículo para
                            dp@colegioxingu.com.br</p>

                        <ul class="social list-inline">
                            @if ($info->facebook)
                                <li>
                                    <a href="{{ $info->facebook }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($info->instagram)
                                <li>
                                    <a href="{{ $info->instagram }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($info->youtube)
                                <li>
                                    <a href="{{ $info->youtube }}" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            @endif

                        </ul>

                    </div>


                    <div class="col-xl-5 col-md-12 col-sm-12 mb-4 form">

                        <h2 class="text-cyan mb-3"><strong>ENVIE-NOS UMA MENSAGEM</strong></h2>

                        <p class="text-grey">Em caso de dúvidas ou sugestões, entre em contato conosco preenchendo o
                            formulário abaixo.</p>

                            <div class="alert"></div>

                        <form id="form-contato" class="my-4">

                            @csrf

                            <input type="hidden" name="url" value="{{ route('contato.sendMail') }}">

                            <div class="form-group my-3">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Nome *" required>
                            </div>


                            <div class="form-group my-3">
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    placeholder="E-mail *" required>
                            </div>


                            <div class="form-group my-3">
                                <input type="text" name="subject" class="form-control" value="{{ old('subject') }}"
                                    placeholder="Assunto *" required>
                            </div>

                            <div class="form-group my-3">
                                <textarea name="description" class="form-control" rows="5" placeholder="Mensagem *"
                                    required>{{ old('description') }}</textarea>
                                <small>*campos obrigatorios</small>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">enviar</button>
                            </div>

                        </form>

                    </div>

                </div>


            </div>

        </section>


        <section id="trabalhe-conosco" class="trabalhe-conosco">

            <div class="container">

                <div class="col-lg-8 offset-lg-2">

                    <h2 class="text-center text-cyan mb-3"><strong>Faça parte da Equipe Xingu!</strong></h2>

                    <p class="text-light text-center mb-3">Venha fazer parte do nosso time e nos ajude a construir uma educação transformadora</p>


                    <div class="row justify-content-center align-items-center">

                        <div class="alert"></div>

                        <form id="formTrabalheConosco" class="text-center">

                            @csrf

                            <input type="hidden" name="url" value="{{ route('contato.enviaEmail') }}">

                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome"
                                    required>
                            </div>

                            <div class="mb-3">
                                <select name="cargo" class="form-control" required>
                                    <option value="">Cargo</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Portaria">Portaria</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Coordenação Pedagógica">Coordenação Pedagógica</option>
                                    <option value="Estágio">Estágio</option>
                                    <option value="Assistente de Sala">Assistente de Sala</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                            </div>

                            <div class="mb-3">
                                <select name="classificacao" class="form-control" required>
                                    <option value="">Segundo a classificação do IBGE, você se autodeclara uma pessoa:</option>
                                    <option value="Branca">Branca</option>
                                    <option value="Preta">Preta</option>
                                    <option value="Parda">Parda</option>
                                    <option value="Amarela">Amarela</option>
                                    <option value="Indígena">Indígena</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="file" name="files" class="form-control">
                            </div>

                            <div class="mb-3">
                                <textarea name="mensagem" class="form-control" rows="3" placeholder="Deixe sua mensagem" required></textarea>

                                <p class="text-light mt-2">*Todos os campos obrigatórios, exceto de mensagem.</p>
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
