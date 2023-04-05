<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COETRAE/MA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url(asset('front/assets/img/favicon.png')) }}" rel="icon">
    <link href="{{ url(asset('front/assets/img/apple-touch-icon.png')) }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url(asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('front/assets/vendor/aos/aos.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('front/assets/vendor/glightbox/css/glightbox.min.css')) }}" rel="stylesheet">
    <link href="{{ url(asset('front/assets/vendor/swiper/swiper-bundle.min.css')) }}" rel="stylesheet">

    @yield('css')

    <!-- Template Main CSS File -->
    <link href="{{ url(asset('front/assets/css/main.css')) }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">

                <div id="img-menu-wite">
                    <img class="img-menu-wite" src="{{ url(asset('front/assets/img/logo_front_menu_white.png')) }}"
                        alt="">
                </div>
                <div id="img-menu-black" hidden>
                    <img class="img-menu-black" src="{{ url(asset('front/assets/img/logo_front_menu_black.png')) }}"
                        alt="">
                </div>


            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#">A COETRAE/MA
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('home') }}#quem-somos">Quem somos</a></li>
                            <li><a href="{{ route('home') }}#membros">Membros</a></li>
                            <li><a href="{{ route('eixos-atuacao') }}">Eixos de atuação</a></li>
                            <li><a href="{{ route('presidentes') }}">Presidentes</a></li>
                            <li><a href="{{ route('regimento-interno') }}">Regimento Interno</a></li>
                            <li><a href="{{ route('home') }}#mapa">Mapa de Localização</a></li>
                            <li><a href="{{ route('arquivos') }}">Documentos de criação</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Em Combate
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('o-que-dizem-as-leis') }}">O que dizem as leis</a></li>
                            <li><a href="{{ route('planos-estaduais') }}">Planos Estaduais</a></li>
                            <li><a href="{{ route('tecnologias-contra-escravidao') }}">Tecnologias contra
                                    escravidão</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Escritório Virtual
                            <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('agenda') }}">Agenda</a></li>
                            <li><a href="{{ route('grupos-trabalho') }}">GT’s</a></li>
                            <li><a href="{{ route('relatorios') }}">Relatórios</a></li>
                            <li><a href="{{ route('bibliotec') }}">BiblioTEC.MA</a></li>
                            <li><a href="{{ route('ata-reunioes') }}">Atas de Reuniões</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Projetos<i class="bi bi-chevron-down dropdown-indicator">
                            </i></a>
                        <ul>
                            <li><a href="{{ route('caravana-liberdade') }}">Caravana da Liberdade</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#">Contatos<i class="bi bi-chevron-down dropdown-indicator">
                            </i></a>
                        <ul>
                            <li><a href="{{ route('contato') }}">Contatos</a></li>
                            <li><a href="{{ route('guia-para-jornalistas') }}">ASCOM's</a></li>
                        </ul>
                    </li>

                    {{-- <li><a href="{{ route('home') }}#about">Olimpíada</a></li>
                    <li><a href="{{ route('home') }}#cronograma">Cronograma</a></li>
                    <li><a href="{{ route('home') }}#participantes">Participantes</a></li>
                    <li><a href="{{ route('home') }}#fases">Fases</a></li> --}}

                    @if (Auth::check())
                        <li class="dropdown"><a href="#">Olá, {{ Auth::user()->getPrimeiroNome() }}

                                <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                @if (auth()->user()->perfil == 'administrador')
                                    <li><a href="{{ route('users') }}">Usuários</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}">Sair</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </nav><!-- .navbar -->

            @if (!Auth::check())
                <a class="btn-book-a-table" href="{{ route('login') }}"><span>Login<span></a>
            @endif

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->


    {{-- CONTEUDOS --}}
    @yield('content')



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-5 col-md-5">
                    <div class="">
                        <a class="" href="#"><img class="img-fluid w-50"
                                src="{{ url(asset('front/assets/img/logo_front_menu.png')) }}" alt=""></a>
                    </div>
                    <p>
                        A Comissão Estadual de Erradicação do Trabalho Escravo do Maranhão (COETRAE/MA) foi criada pelo
                        Decreto Estadual de nº 22.996 de 20 de março de 2007 e presidida pela então Secretaria de Estado
                        dos Direitos Humanos, Assistência Social e Cidadania.
                    </p>
                    <div class="subs-feilds">
                        <p>Informe seu e-mail para receber novas informações</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Seu E-mail"
                                aria-label="Seu E-mail" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary btn-message-footer" type="button"
                                id="button-addon2">Enviar</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <h4>Links</h4>
                    <div class="d-flex flex-row gap-5">
                        <ul class="list-footer" style="padding-left: 0px;">
                            <li class=""><a href="index.html#quem-somos-index"><span
                                        class='bi bi-chevron-right'></span> Quem Somos</a></li>
                            <li class=""><a href="eixos-atuacao.html"><span class='bi bi-chevron-right'></span>
                                    Eixos de Atuação </a></li>
                            <li class=""><a href="regimento-interno.html"><span
                                        class='bi bi-chevron-right'></span> Regimento Interno</a></li>
                            <li class=""><a href="arquivos.html"><span class='bi bi-chevron-right'></span>
                                    Arquivos</a></li>
                            <li class=""><a href="#"><span class='bi bi-chevron-right'></span> Em
                                    Combate</a></li>
                            <li class=""><a href="#"><span class='bi bi-chevron-right'></span> O que
                                    dizem as leis</a></li>
                        </ul>
                        <ul class="list-footer" style="padding-left: 0px;">
                            <li class=""><a href="planos-estaduais.html"><span
                                        class='bi bi-chevron-right'></span> Planos Estaduais</a></li>
                            <li class=""><a href="#"><span class='bi bi-chevron-right'></span> Escritório
                                    Virtual</a></li>
                            <li class=""><a href="grupos-trabalho.html"><span
                                        class='bi bi-chevron-right'></span> GT’s</a></li>
                            <li class=""><a href="#"><span class='bi bi-chevron-right'></span>
                                    Membros</a></li>
                            <li class=""><a href="#"><span class='bi bi-chevron-right'></span>
                                    Projetos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 d-flex">
                    <div class="">
                        <h4>Informação</h4>
                        <div class="">
                            <p>Telefone : (98) 3198-5011</p>
                            <p>Email : coetraema@gmail.com</p>
                            <p>Endereço: Avenida Jerônimo de Albuquerque, s/n, Calhau. Edifício Clodomir Milet (1º e 2º
                                andares) CEP: 65030-005 São Luís – MA.</p>
                        </div>
                        <div class="">
                            <ul class="d-flex flex-row gap-5" style="padding-left: 0px;">
                                <li class="list-group-item">
                                    <a href="#">
                                        <span class="bi bi-facebook" style="font-size:25px;"></span>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <i class="bi bi-twitter" style="font-size:25px;"></i>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <i class="bi bi-google" style="font-size:25px;"></i>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <i class="bi bi-pinterest" style="font-size:25px;"></i>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">
                                        <i class="bi bi-instagram" style="font-size:25px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid footer-copy text-center">
            <p style="margin-bottom: 0">coetraemaranhao@gmail.com | ©2022 por COETRAE/MA </p>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ url(asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
    <script src="{{ url(asset('front/assets/vendor/aos/aos.js')) }}"></script>
    <script src="{{ url(asset('front/assets/vendor/glightbox/js/glightbox.min.js')) }}"></script>
    <script src="{{ url(asset('front/assets/vendor/purecounter/purecounter_vanilla.js')) }}"></script>
    <script src="{{ url(asset('front/assets/vendor/swiper/swiper-bundle.min.js')) }}"></script>
    <script src="{{ url(asset('front/assets/vendor/php-email-form/validate.js')) }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url(asset('front/assets/js/main.js')) }}"></script>

    @hasSection('js')
        @yield('js')
    @endif

</body>

</html>
