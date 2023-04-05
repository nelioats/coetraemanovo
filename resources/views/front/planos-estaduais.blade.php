@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>PLANOS ESTADUAIS</h1>
                        <p>Principais avanços e desafios da rede de combate</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>PLANOS ESTADUAIS</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container overflow-hidden text-center">
            <div class="row gy-5">

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/planosestaduais/planoI.png')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <p>I Plano Estadual</p>
                        </div>
                        <p class="">
                            I Plano Estadual Lançado em 21 de junho de 2007, este Plano priorizou o combate às principais
                            causas de aliciamento de trabalhadores e mão de obra escrava no Estado naquele momento foram
                            definidas ações que combatam as causas principais da problemática, quais sejam as impunidades, a
                            pobreza e o modelo excludente.
                        </p>

                        <a class="btn-book-a-table-md" href="{{ url(asset('front/assets/files/I Plano Estadual MA.pdf')) }}"
                            target="_blank"><span>Visualizar Plano<span></a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/planosestaduais/planoII.png')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <p>II Plano Estadual</p>
                        </div>
                        <p class="">
                            O II Plano Estadual para a Erradicação do Trabalho Escravo foi (re)construído em 2012, de acordo
                            com as discussões entre os membros/parceiros da COETRAE/MA, como instrumento de orientação que
                            estabelece não somente as diretrizes a partir das legislações referentes ao assunto, mais as
                            responsabilidades dos entes estruturantes desse sistema cujo objetivo é absoluta eliminação de
                            práticas atemporais e históricas de escravidão contemporânea no Estado Brasileiro.
                        </p>

                        <a class="btn-book-a-table-md"
                            href="{{ url(asset('front/assets/files/II Plano-Estadual-MA.pdf')) }}"
                            target="_blank"><span>Visualizar Plano<span></a>
                    </div>
                </div>


            </div>
        </div>


    </section>
@endsection
