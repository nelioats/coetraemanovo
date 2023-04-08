@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class=" d-flex flex-column justify-content-center align-items-center  text-center ">
                    <img src="{{ url(asset('front/assets/img/hero-esquerd-img.png')) }}" class="img-fluid" alt="">

                    <div class="d-flex">
                        <a href="#quem-somos" class="btn-book-a-table">Saiba mais <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        {{-- @if (!Auth::check())
                            <a href="{{ route('login') }}" class="d-flex align-items-center btn-border">Login /
                                Inscrição</a>
                        @endif --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="quem-somos" class="about">
            <div class="container">


                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ url(asset('front/assets/img/ab.jpg')) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="content ps-0 ps-lg-5">

                            <div class="section-header-esquerda">
                                <p>QUEM SOMOS</p>
                            </div>

                            <p class="">
                                A Comissão Estadual de Erradicação do Trabalho Escravo do Maranhão (COETRAE/MA) foi criada
                                pelo Decreto Estadual de nº 22.996 de 20 de março de 2007 e presidida pela então Secretaria
                                de Estado dos Direitos Humanos, Assistência Social e Cidadania. Trata-se de uma instância
                                paritária de articulação de políticas públicas voltadas para a erradicação do trabalho
                                escravo, sendo composta por representantes de órgãos governamentais, do Poder Judiciário e
                                da sociedade civil organizada.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="membros" class="why-us section-bg">
            <div class="container">


                <div class="section-header">
                    <p>Membros</p>
                </div>


                <div class="row">



                    <div class="col-lg-12">

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators pointer-carousel">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">


                                    <div class="row ">
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/sedihpop.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://twitter.com/GovernoMA">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/GovernoMA">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/governoma/">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">SEDIHPOP</h5>
                                                    <p class="card-text">Secretaria de Estado dos Direitos Humanos e
                                                        Participação
                                                        Popular</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/cpt.jpg')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://twitter.com/cptnacional?t=Yh9jK5SfkyVbxzbX8AEUcA&s=09">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/cptnacional?igshid=YmMyMTA2M2Y=">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CPT</h5>
                                                    <p class="card-text">Comissão Pastoral da Terra</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/ufma.jpg')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/ufmaoficial">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitter.com/ufmaoficial">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.instagram.com/ufmaoficial">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">UFMA</h5>
                                                    <p class="card-text">Universidade Federal do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/minptrabalo.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/MPTMA">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/mpt_ma">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">MPT</h5>
                                                    <p class="card-text">Ministério Público do Trabalho</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/oit.jpg')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://twitter.com/OITBrasil?t=LlT2L08gyIC6WQq42sjFqA&s=09">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/oit_brasil?igshid=YmMyMTA2M2Y=">">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">OIT</h5>
                                                    <p class="card-text">Organização Internacional do Trabalho</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/cdvdh.jpg')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/CDVDHCB">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://twitter.com/CDVDH?t=YM6oEfrXJ8JlGsGTRTn6Gg&s=09">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://instagram.com/centrodedefesa?igshid=YmMyMTA2M2Y=">">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CDVDH</h5>
                                                    <p class="card-text">Centro de Defesa da Vida e dos Direitos Humano</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="carousel-item">

                                    <div class="row ">
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/seduc.jpg')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="http://www.facebook.com/governodomaranhao">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.twitter.com/EducacaoMA">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/educacaoma">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">SEDUC</h5>
                                                    <p class="card-text">Secretaria de Educação</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/trt.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/trt16ma">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/trtmaranhao">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://instagram.com/trtmaranhao?igshid=YmMyMTA2M2Y=">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">TRT/MA</h5>
                                                    <p class="card-text">Tribunal Regional do Trabalho</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/ccnma.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/centrodeculturanegra">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/ccn_ma?igshid=YmMyMTA2M2Y=">">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CCN-MA</h5>
                                                    <p class="card-text">Centro de Cultura Negra do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/agerp.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/governodomaranhao">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/GovernoMA">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.instagram.com/governoma/">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">AGERP</h5>
                                                    <p class="card-text">Agência Estadual de Pesquisa e Agropecuária</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/centroreferencia_saude_trtabalhador.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/cerestregionalsaoluis/">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CEREST - MA</h5>
                                                    <p class="card-text">Centro de Referência em Saúde do Trabalhador</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/consea.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/governodomaranhao">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/GovernoMA">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.instagram.com/governoma/">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CONSEA</h5>
                                                    <p class="card-text">Conselho Estadual de Segurança Alimentar e
                                                        Nutricional</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">



                                    <div class="row ">
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/cras.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CRAS</h5>
                                                    <p class="card-text">Centro de Referência da Assistência Social</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/cresol.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a
                                                                href="https://www.facebook.com/profile.php?id=100054609152490">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://instagram.com/cresolma?igshid=YmMyMTA2M2Y=">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">CRESOL</h5>
                                                    <p class="card-text">Centro de Referência Estadual de Economia
                                                        Solidária do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/policiafederal.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://instagram.com/policiafederal?igshid=YmMyMTA2M2Y=">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">PF</h5>
                                                    <p class="card-text">POLICIA FEDERAL</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/dpu.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/defensoria.dpu">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://twitter.com/dpuoficial?t=nXpIUwOXT0xhrVeArS7xyQ&s=09">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/dpumaranhao/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">DPU</h5>
                                                    <p class="card-text">Defensoria Pública da União</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/egma.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a
                                                                href="https://www.facebook.com/pages/Egma-Escola-De-Governo-Do-Estado-Do-Maranh%C3%A3o/233565563483915">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/escola_governo/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">EGMA</h5>
                                                    <p class="card-text">Escola do Governo do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/fnpeti.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/fepetima.maranhao.1">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/fepetimaoficial/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">FNPETI</h5>
                                                    <p class="card-text">Fórum Nacional de Prevençao e Erradicação do
                                                        Trabalho Infantil</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="carousel-item">

                                    <div class="row ">
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/fetaema.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/fetaema">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/fetaema/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">FETAEMA</h5>
                                                    <p class="card-text">Federação dos Trabalhadores Rurais Agricultores e
                                                        Agricultoras do Estado do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/ifma.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/ifma.oficial">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://twitter.com/ifma_caxias?t=fu0TUXNGmqvTUAWvhmNEng&s=09">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/ifma.oficial/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">IFMA</h5>
                                                    <p class="card-text">Instituto Federal de Educação, Ciência e
                                                        Tecnologia do Maranhão</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/incra.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/gov.incra/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">INCRA</h5>
                                                    <p class="card-text">Instituto Nacional de Colonização e Reforma
                                                        Agrária</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/imesc.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="#">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/imesc.ma/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">IMESC</h5>
                                                    <p class="card-text">Instituto Maranhense de Estudos Socioeconômicos e
                                                        Cartográficos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/mpf.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/MPFederal">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/mpf_pgr">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/mpf_oficial/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">MPF</h5>
                                                    <p class="card-text">Ministério Público Federal</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <div class="card" style="width: 9rem;">
                                                <img src="{{ url(asset('front/assets/img/membros/procon.png')) }}"
                                                    class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">

                                                    <ul class="d-flex flex-row gap-2 redes-membros">
                                                        <li class="">
                                                            <a href="https://www.facebook.com/proconmaranhao">
                                                                <i class="bi bi-facebook" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://twitter.com/proconmaranhao">
                                                                <i class="bi bi-twitter" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="https://www.instagram.com/proconmaranhao/?igshid=YmMyMTA2M2Y%3D">
                                                                <i class="bi bi-instagram" style="font-size: 90%;"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h5 class="card-title">PROCON</h5>
                                                    <p class="card-text">Instituto de Proteção e Defesa do Consumidor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Stats Counter Section ======= -->
        <section id="mapa" class="">
            <div class="container-fluid">
                <div class="section-header">
                    <p>Mapa de Localização</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <p class="text-center pbold">
                            Informações de onde a rede está localizada
                        </p>
                        <iframe
                            src="https://www.google.com/maps/d/embed?mid=1LWky5zVcsdXm4Ih4YBDi9_Jn7T0&hl=pt-BR&ehbc=2E312F"
                            width="100%" height="600">
                        </iframe>
                    </div>
                </div>
            </div>
        </section><!-- End Stats Counter Section -->

    </main>
    <!-- End #main -->
@endsection
