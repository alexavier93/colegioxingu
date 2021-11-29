@extends('layouts.app')

@section('title', 'Colégio Xingu')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">

                @foreach ($banners as $banner)
                    <!-- Slide Item -->
                    <div class="slide-item"
                        style="background-image: url('{{ asset('storage/'. $banner->image) }}');">
                        <div class="container">
                            <div class="content-box">
                                <h2>{{ $banner->title }}</h2>

                                @if ($banner->description)
                                <p class="descricao">{{ $banner->description }}</p>
                                @endif

                                @if ($banner->link)
                                    <a href="{{ $banner->link }}" class="btn-box"><span class="btn-title">Saiba Mais</span></a>
                                @endif
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </section>


        <section class="intro-home py-5 p-5 px-sm-0">
            <div class="container">

                <div class="title-section text-center mb-3">
                    <h2 class="m-0">A EDUCAÇÃO É O NOSSO PLANTIO E NOSSA VISÃO DE FUTURO.</h2>
                    <hr>
                </div>

                <div class="row align-items-center cols">
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center mb-3">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-01.png') }}"
                                title="Proposta Pedagógica" alt="Proposta Pedagógica">
                            <div>
                                <h4>Proposta Pedagógica</h4>
                                <a href="{{ route('pedagogia.index') }}">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center mb-3">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-02.png') }}"
                                title="Dicas e Novidades" alt="Dicas e Novidades">
                            <div>
                                <h4>Dicas e Novidades</h4>
                                <a href="">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center mb-3">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-03.png') }}"
                                title="Nosso Ensino" alt="Nosso Ensino">
                            <div>
                                <h4>Nosso Ensino</h4>
                                <a href="{{ route('pedagogia.index') }}">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex align-items-center mb-3">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-04.png') }}"
                                title="Agendamento" alt="Agendamento">
                            <div>
                                <h4>Agendamento</h4>
                                <a href="{{ route('matricula.index') }}#agende-uma-visita">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-blue">

            <section class="sobre-home py-1 py-md-5">

                <div class="container">

                    <div class="row justify-content-center align-items-center">

                        <div class="col-md-12 col-lg-6">
                            <div class="p-3 p-md-5 img-sobre">
                                <div class="circles-left"></div>
                                <div class="circles-right"></div>
                                <img class="img-fluid" src="{{ asset('/assets/images/img-sobre-xingu.png') }}"
                                    alt="Colégio Xingu">
                            </div>

                        </div>

                        <div class="col-md-12 col-lg-5 texto">

                            <h2>COLÉGIO XINGU</h2>

                            <p>
                                Nossa proposta pedagógica visa formar cidadãos
                                éticos, que sejam orientados para o bem social, para
                                o bem-estar coletivo, com capacidade para aprender
                                e pesquisar constantemente.</p>

                            <p>Indivíduos que compreendam e respeitem o ambiente em que vivem e a sociedade da qual
                                participam.
                                Pessoas capazes de redimensionar os conhecimentos com sua participação crítica e efetiva.
                            </p>

                            <a href="{{ route('quemsomos.index') }}" class="btn btn-primary">Saiba mais <i
                                    class="fas fa-chevron-right ms-2"></i></a>

                        </div>
                    </div>




                </div>

            </section>

            <section class="ensino-home">

                <div class="container">

                    <div class="title-section text-center mb-3">
                        <h2 class="m-0">ENSINO</h2>
                        <hr>
                    </div>

                    <div class="col-md-10 offset-md-1">

                        <div class="slider carousel-ensino">

                            @foreach ($ensinos as $ensino)

                                <div>
                                    <a href="{{ route('pedagogia.etapas') }}" class="card my-4">
                                        <img src="{{ asset('storage/'.$ensino->imagem) }}" alt="">
                                        <div class="card-body e">
                                            <h4 class="card-title">{{ $ensino->titulo }}</h4>
                                            <div class="card-text">{{ $ensino->descricao }}</div>
                                            <hr>
                                            <span>Saiba mais</span>
                                        </div>
                                    </a>
                                </div> 

                            @endforeach


                        </div>

                    </div>
                </div>

            </section>

        </div>

        <section class="novos-alunos-home">

            <div class="container">

                <div class="title-section text-center mb-3 mt-md-5">
                    <h2 class="m-0">NOVOS ALUNOS</h2>
                    <hr>
                </div>

                <div class="row align-items-center justify-content-center cols">
                    <div class="col-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-05.png') }}"
                                title="Matrícula" alt="Matrícula">
                            <div>
                                <h3>Matrícula</h3>
                                <a href="{{ route('matricula.index') }}">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-06.png') }}"
                                title="Nossos Espaços" alt="Nossos Espaços">
                            <div>
                                <h3>Nossos Espaços</h3>
                                <a href="{{ route('quemsomos.index') }}#nossos-espacos">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-7 col-md-5 col-lg-4 col-xl-3">
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="{{ asset('/assets/images/icons/icon-07.png') }}"
                                title="Nosso Ensino" alt="Nosso Ensino">
                            <div>
                                <h3>Nos visite</h3>
                                <a href="{{ route('matricula.index') }}#agende-uma-visita">Saiba mais <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <section class="form-home">

            <div class="container">

                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">

                    <div class="text-center">
                        <h4>Gostaria de mais informações? Faça o seu cadastro abaixo
                            e nos diga qual a sua dúvida.</h4>
                    </div>

                    <div class="alert"></div>

                    <form id="formContato" method="post" class="row g-4 mt-4">

                        <input type="hidden" name="url" value="{{ route('home.sendMail') }}">

                        @csrf

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nome" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Assunto" required>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="E-mail" required>
                        </div>
                        <div class="col-12">
                            <textarea name="description" class="form-control" rows="8" placeholder="Quais são as suas dúvidas ?" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>

                </div>

            </div>

        </section>

        <section class="agenda-home">

            <div class="container">

                <div class="col-md-10 offset-md-1 pb-md-5">

                    <div class="title-section text-start mb-3 mt-md-5">
                        <h2 class="m-0">AGENDA 2021</h2>
                        <hr>
                    </div>

                    <div class="row align-items-center">

                        @if ($agenda->count() > 0)

                        @foreach ($agenda as $val)

                            <div class="col-10 col-md-5 col-lg-4">
                                <div class="d-flex align-items-center justify-content-start item-agenda">
                                    <div class="data-agenda d-flex flex-column align-items-center me-3">
                                        <span class="dia-semana">{{ $dias[date('D', strtotime($val->data))]  }}</span>
                                        <span class="dia-numero">{{ date('d', strtotime($val->data)) }}</span>
                                        <span class="mes">{{ $mes[date('M', strtotime($val->data))] }}</span>
                                    </div>
                                    <h5 class="titulo-agenda">{{ $val->titulo }}</h5>
                                </div>
                            </div>

                        @endforeach

                        @else

                            <h4 class="p-3 text-light">Nenhuma data encontrada.</h4>

                        @endif

                    </div>

                    <div class="more mb-md-5 mt-2">
                        <a href="{{ route('agenda.index') }}" class="d-flex align-items-center">Veja a agenda completa <i class="fas fa-chevron-right ms-2"></i></a>
                    </div>

                </div>

            </div>
        </section>


        <div class="bg-gray bg-blog-depoimento">

            <section class="blog-home py-3">

                <div class="container">

                    <div class="row justify-content-center">


                        <div class="col-md-6 col-lg-5">
                            <div class="title-section mb-3">
                                <h2 class="m-0">DICAS E NOVIDADES DO BLOG</h2>
                            </div>

                            <div>

                                @foreach ($last_post as $post)

                                <div class="text">{!! Str::limit($post->description, 700) !!}</div>

                                <a href="{{ route('blog.post', ['post' => $post->slug]) }}"><img class="img-fluid mb-3" src="{{ asset('storage/'.$post->image) }}" alt=""></a>

                                @endforeach

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5">

                            <div class="social-midias mb-5">
                                <a href=""><img class="img-fluid" src="{{ asset('assets/images/icons/blog.png') }}"
                                        alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/linkedin.png') }}" alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/spotify.png') }}" alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/youtube.png') }}" alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/tiktok.png') }}" alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/facebook.png') }}" alt=""></a>
                                <a href=""><img class="img-fluid"
                                        src="{{ asset('assets/images/icons/instagram.png') }}" alt=""></a>

                            </div>

                            <div class="posts-blog">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-recentes-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-recentes" type="button" role="tab"
                                            aria-controls="pills-recentes" aria-selected="true">Recentes</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-populares-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-populares" type="button" role="tab"
                                            aria-controls="pills-populares" aria-selected="false">Populares</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">

                                    <div class="tab-pane fade show active" id="pills-recentes" role="tabpanel"
                                        aria-labelledby="pills-recentes-tab">

                                        @foreach ($latest_posts as $post)

                                        <a href="{{ route('blog.post', ['post' => $post->slug]) }}" class="d-flex align-items-center mb-3 post">
                                            <img src="{{ asset('storage/'.$post->image) }}" title="" alt="">
                                            <div class="ms-3">
                                                <h5>{{ Str::limit($post->title, 65) }}</h5>
                                                <span class="data-post">{{ $post->created_at->format('d/m/Y') }}</span>
                                            </div>
                                        </a>

                                        @endforeach
                                        
                                    </div>

                                    <div class="tab-pane fade" id="pills-populares" role="tabpanel"
                                        aria-labelledby="pills-populares-tab">

                                        @foreach ($random_posts as $post)

                                        <a href="{{ route('blog.post', ['post' => $post->slug]) }}" class="d-flex align-items-center mb-3 post">
                                            <img src="{{ asset('storage/'.$post->image) }}" title="" alt="">
                                            <div class="ms-3">
                                                <h5>{{ Str::limit($post->title, 65) }}</h5>
                                                <span class="data-post">{{ $post->created_at->format('d/m/Y') }}</span>
                                            </div>
                                        </a>

                                        @endforeach


                                    </div>

                                </div>

                            </div>

                            <div class="facebook-widget">
                                <h5>Curta nossa página</h5>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0"
                                                                nonce="7EGl6WJK"></script>
                                <div class="fb-page" data-href="https://www.facebook.com/colegioxingu/"
                                    data-tabs="timeline" data-width="" data-height="350" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/colegioxingu/"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/colegioxingu/">Colégio Xingu</a></blockquote>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </section>

            <section class="depoimentos-home">

                <div class="container">

                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-10">
                            <hr>
                        </div>

                        <div class="col-lg-7 py-3">

                            <div class="title-section text-center mb-3">
                                <h2 class="m-0">O QUE AS PESSOAS DIZEM</h2>
                                <p class="text-grey">Confira o depoimento de alguns de nossos alunos, ex-alunos e seus
                                    pais sobre o nosso
                                    Colégio.</p>
                            </div>

                            <div class="slider carousel-depoimentos">

                                @foreach ($depoimentos as $depoimento)
                                <div class="text-center p-3">
                                    <img class="mx-auto rounded-circle"
                                        src="{{ asset('storage/' . $depoimento->imagem) }}" alt="">
                                    <h4 class="depoente mt-4">{{ $depoimento->nome }}</h4>
                                    <div class="depoimento mt-2 text-grey">{{ $depoimento->depoimento }}</div>
                                </div>
                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            
        </div>


    </div>
    <!-- End Home -->


@endsection
