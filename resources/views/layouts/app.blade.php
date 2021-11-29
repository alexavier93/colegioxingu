<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-top pb-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-4 mt-0 mt-md-1 d-flex d-md-block justify-content-center">
                        <a href="https://geeseduca.com.br/PortalGees.aspx?id=313&pt=P" target="_blank" class="btn btn-sm btn-primary portal-btn mx-1">Portal do Professor</a>
                        <a href="https://geeseduca.com.br/appclass.aspx?id=313&pt=A" target="_blank" class="btn btn-sm btn-primary portal-btn mx-1">Portal do Aluno</a>
                    </div>

                    <div class="col-12 col-md-8 d-none d-sm-block d-lg-flex text-center justify-content-end">
                        <ul class="nav-top pt-2">
                            <li><a href="https://api.whatsapp.com/send?phone=55{{ $info->celular }}" target="_blank"><i class="fab fa-whatsapp"></i> {{ $info->celular }}</a></li>
                            <li><a href="tel:+55{{ $info->telefone }}" class="ms-3"><i class="fas fa-phone-alt"></i> {{ $info->telefone }}</a></li>
                            <li><a href="mailto:{{ $info->email }}" class="ms-0 ms-sm-3"><i class="far fa-envelope"></i> {{ $info->email }}</a></li>
                        </ul>

                        <ul class="nav-top midias d-none d-md-block ms-0 ms-md-4">
                            @if ($info->facebook)
                            <li><a href="{{ $info->facebook }}" target="_blank" class="bg-cyan"><i class="fab fa-facebook-f"></i></a></li>
                            @endif

                            @if ($info->instagram)
                            <li><a href="{{ $info->instagram }}" target="_blank" class="bg-cyan"><i class="fab fa-instagram"></i></a></li>
                            @endif

                            @if ($info->youtube)
                            <li><a href="{{ $info->youtube }}" target="_blank" class="bg-cyan"><i class="fab fa-youtube"></i></a></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-nav">

            <div class="container">

                <div class="wrap">

                    <div class="logo">
                        @if (route('home'))
                            <a href="{{ route('home') }}" class="logo-main"><img
                                    src="{{ asset('assets/images/logo-colegio-xingu.png') }}" alt=""></a>
                        @else
                            <a href="{{ route('home') }}" class="logo-main"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo-colegio-xingu.png') }}" alt=""></a>
                        @endif
                        <a href="{{ route('home') }}" class="logo-fix"><img class="img-fluid"
                                src="{{ asset('assets/images/logo-colegio-xingu.png') }}" alt=""></a>
                    </div>

                    <div class="menu">
                        
                        <nav class="nav">
                            <ul>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('quemsomos.*') ? 'active' : '' }}"
                                        href="{{ route('quemsomos.index') }}">Sobre o Xingu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#nossa-historia">Quem Somos</a></li>
                                        <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#missao">Missão</a></li>
                                        <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#valores">Valores</a></li>
                                        <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#nossos-espacos">Nossos espaços</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('pedagogia.*') ? 'active' : '' }}"
                                        href="{{ route('pedagogia.index') }}">Proposta Pedagógica</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.index') }}">Nosso ensino</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#educacao-infantil">Educação Infantil</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#1-ano">1º ANO</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#2-ao-5">2º AO 5º ANO</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#6-ao-9">6º AO 9º ANO</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#escola-ampliada">Escola Ampliada</a></li>
                                        <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#ensino-remoto">Ensino Remoto</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('institucional.*') ? 'active' : '' }}"
                                        href="{{ route('institucional.index') }}">Institucional</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('institucional.index') }}#convivencia-etica">Convivência Ética</a></li>
                                        <li><a class="dropdown-item" href="{{ route('institucional.index') }}#literatura-literaria">Leitura Literária</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('sazonais.*') ? 'active' : '' }}" href="">Informações</a>
                                    <ul class="dropdown-menu">
										<li><a class="dropdown-item" href="{{ route('agenda.index') }}">Agenda</a></li>
                                        @foreach ($paginaSazonal as $pagina)
                                            <li><a class="dropdown-item" href="{{ route('sazonais.pagina', ['pagina' => $pagina->slug]) }}">{{ $pagina->titulo }}</a></li>                                            
                                        @endforeach
                                    </ul>
                                </li>

                                {{-- <li class="nav-item">
                                    <a class="nav-link {{ Route::is('extracurricular.index') ? 'active' : '' }}" href="{{ route('extracurricular.index') }}">Extracurriculares</a>
                                </li> --}}

                        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('institucional.*') ? 'active' : '' }}"
                                        href="{{ route('matricula.index') }}">Matrículas</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('matricula.index') }}#agende-uma-visita">Agende uma Visita</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('midia.index') ? 'active' : '' }}" href="{{ route('midia.index') }}">Na Mídia</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('cantina.*') ? 'active' : '' }}"
                                        href="{{ route('cantina.index') }}">Cantina Nutri</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('cantina.index') }}#quemsomos">Quem Somos</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cantina.index') }}#app">Aplicativo</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cantina.index') }}#tabela">Tabela de preços / Kit lanche / <br>Contratação de almoço</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cantina.index') }}#contato">Contatos</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ Route::is('contato.*') ? 'active' : '' }}" href="{{ route('contato.index') }}">Fale Conosco</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('contato.index') }}#trabalhe-conosco">Trabalhe Conosco</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>

                    </div>


                    <div class="icon-sidemenu d-lg-none d-flex flex-grow-1 justify-content-end align-items-center">
                        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Sobre o Xingu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#nossa-historia">Quem Somos</a></li>
                                <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#missao">Missão</a></li>
                                <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#valores">Valores</a></li>
                                <li><a class="dropdown-item" href="{{ route('quemsomos.index') }}#nossos-espacos">Nossos espaços</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Proposta Pedagógica</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('pedagogia.index') }}">Nosso ensino</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#educacao-infantil">Educação Infantil</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#1-ano">1º ANO</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#2-ao-5">2º AO 5º ANO</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#6-ao-9">6º AO 9º ANO</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#escola-ampliada">Escola Ampliada</a></li>
                                <li><a class="dropdown-item" href="{{ route('pedagogia.etapas') }}#ensino-remoto">Ensino Remoto</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Institucional</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('institucional.index') }}#convivencia-etica">Convivência Ética</a></li>
                                <li><a class="dropdown-item" href="{{ route('institucional.index') }}#literatura-literaria">Leitura Literária</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Informações</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('agenda.index') }}">Agenda</a></li>
                                @foreach ($paginaSazonal as $pagina)
                                    <li><a class="dropdown-item" href="{{ route('sazonais.pagina', ['pagina' => $pagina->slug]) }}">{{ $pagina->titulo }}</a></li>                                            
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('midia.index') }}">Na Mídia</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Cantina Nutri</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('cantina.index') }}#quemsomos">Quem Somos</a></li>
                                <li><a class="dropdown-item" href="{{ route('cantina.index') }}#app">Aplicativo</a></li>
                                <li><a class="dropdown-item" href="{{ route('cantina.index') }}#tabela">Tabela de preços / Kit lanche / <br>Contratação de almoço</a></li>
                                <li><a class="dropdown-item" href="{{ route('cantina.index') }}#contato">Contatos</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('contato.*') ? 'active' : '' }}" href="{{ route('contato.index') }}">Fale Conosco</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('contato.index') }}#trabalhe-conosco">Trabalhe Conosco</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row justify-content-center align-items-center links">

                    <div class="col-sm-12 col-md-6 col-lg-5 item-link">

                        <img class="img-fluid mb-4 w-50 p-2"
                            src="{{ asset('assets/images/logo-branco-colegio-xingu.png') }}" alt="">

                        <p>Nossa proposta pedagógica visa formar cidadãos éticos, que sejam orientados para o bem social, para o bem-estar coletivo, com capacidade para aprender e pesquisar constantemente. Indivíduos que compreendam e respeitem o ambiente em que vivem e a sociedade da qual participam. Pessoas capazes de redimensionar os conhecimentos com sua participação crítica e efetiva.</p>

                        <div class="row contact">

                            <div class="col-lg-4">

                                <div class="d-flex align-items-center mb-2">
                                    <i class="fab fa-whatsapp me-2"></i>
                                    <span>{{ $info->celular }}</span>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    <span>{{ $info->telefone }}</span>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="d-flex align-items-center mb-2">
                                    <i class="far fa-envelope me-2"></i>
                                    <span>{{ $info->email }}</span>
                                </div>

                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    <span>{{ $info->endereco }}</span>
                                </div>

                            </div>

                        </div>

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

                    <div class="col-sm-12 col-md-6 col-lg-4 item-link">


                        <h4 class="mb-3">Inscreva-se para receber as novidades</h4>

                        <div class="form-newsletter col-12">

                            <div class="alert"></div>

                            <form id="formNewsletter" class="row g-3">

                                <input type="hidden" name="url" value="{{ route('home.insertNews') }}">

                                <div class="col-12">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" placeholder="E-mail" required>

                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>

                        </div>

                        <div class="col-12 d-flex justify-content-center justify-content-md-end">
                            <img src="{{ asset('assets/images/unesco.png') }}" alt="">
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="clearfix">

                    <p class="col-sm-12 col-md-6 col-lg-6 copy">© {{ now()->year }} Colégio Xingu - Todos os
                        direitos reservados</p>

                    <p class="col-sm-12 col-md-6 col-lg-6 dev">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90"
                                src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </p>

                </div>

            </div>

        </div>

    </footer>
    <!-- End Footer -->

    <!--
    <div id="floating-smi" class="floating-smi hidden-xs hidden-sm">
        <div class="floating-smi-wrap">
            <div class="floating-smi-list">
                <div class="textwidget custom-html-widget">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5511940007194" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/goncalvesimoveisosasco" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/goncalves.imoveis_" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/channel/UCJWfqmJDj1cf8zuK-MO5eqg" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=5511940007194" class="float shake" target="_blank">
        <i class="fab fa-whatsapp my-float "></i>
    </a>-->


    

    <script src="{{ asset('/assets/js/app.js') }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>



</body>

</html>
