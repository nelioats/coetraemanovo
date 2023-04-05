@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>PRESIDENTES DA COETRAE/MA</h1>
                        <p>Perfis de quem ocupou o cargo, período e formação</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>PRESIDENTES</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4 text-center">
            <div class="row gx-3 gy-3">
                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <img src="{{ url(asset('front/assets/img/presidentes/Amanda.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption">
                                <h5>Amanda Cristina de Aquino Costa</h5>
                                <p style="color: rgb(87, 113, 161);">2022 - atualmente</p>
                                <p style="text-align: justify;">Possui graduação em Direito pela Universidade Federal do
                                    Maranhão (UFMA); Mestre em Direito e Instituições do Sistema de Justiça pelo Programa de
                                    Pós-graduação em Direito da Universidade Federal do Maranhão (PPGDIR/UFMA). </p>
                                <p><a href="http://lattes.cnpq.br/1453267264587950" target="_blank" role="button"><img
                                            width="50%" src="{{ url(asset('front/assets/img/presidentes/btn.jpg')) }}"
                                            alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <img src="{{ url(asset('front/assets/img/presidentes/Francisco.jpg ')) }}" width="65%"
                                alt="...">
                            <div class="caption">
                                <h5>Francisco Gonçalves da Conceição</h5>
                                <p style="color: rgb(87, 113, 161);">2015 a 2022</p>
                                <p style="text-align: justify;">Possui graduação (1984) em Comunicação Social/Jornalismo
                                    pela Universidade Federal do Maranhão (UFMA); mestrado (2000) e doutorado (2005) em
                                    Comunicação e Cultura pela Universidade Federal do Rio de Janeiro (UFRJ).</p>
                                <p><a href="http://lattes.cnpq.br/8711152287797632" target="_blank" role="button"><img
                                            width="50%" src="{{ url(asset('front/assets/img/presidentes/btn.jpg')) }}"
                                            alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <img src="{{ url(asset('front/assets/img/presidentes/Luiza.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption">
                                <h5>Luiza de Fátima Amorim Oliveira</h5>
                                <p style="color: rgb(87, 113, 161);">2011- 2014</p>
                                <p style="text-align: justify;">Possui graduação em Direito pela Universidade Federal do
                                    Maranhão (UFMA); Mestre em Direito Constitucional pela Universidade Federal do Ceará
                                    (UFC). <br /><br /></p>
                                <p><a href="http://lattes.cnpq.br/8785972852723645" target="_blank" role="button"><img
                                            width="50%" src="{{ url(asset('front/assets/img/presidentes/btn.jpg')) }}"
                                            alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection
