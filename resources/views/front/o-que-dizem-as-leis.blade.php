@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>O QUE DIZEM AS LEIS</h1>
                        <p>Legislação maranhense contra o trabalho escravo</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>O QUE DIZEM AS LEIS</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">
        <h2 class="text-center mb-5">Leis Publicadas no Diário Oficial do Maranhão</h2>



        <div class="container overflow-hidden text-center">
            <div class="row gy-5">

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/quedizemleis/listasuja.png')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <p>Lei 8.566</p>
                            <span>12/01/2007</span>
                        </div>
                        <p class="">
                            Estabelece a suspenção de quaisquer benefícios fiscais e a proibição de contratação pela
                            Administração Pública Estadual de empregados, pessoas físicas ou jurídicas incluídos no Cadastro
                            de Empregadores no Ministério de Trabalho e Emprego (MTE) que tenham mantido trabalhadores em
                            condições análogas à de escravos, e dá outras providências.
                        </p>

                        <a class="btn-book-a-table-md"
                            href="{{ url(asset('front/assets/files/Lei 8.566 de 12 de janeiro de 2007.pdf')) }}"
                            target="_blank"><span>Arquivo<span></a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/quedizemleis/tiposcontrato.PNG')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <p>Lei 9.752</p>
                            <span>10/01/2013</span>
                        </div>
                        <p class="">
                            Dispõe sobre vedações a formalização de contratos e convênios com órgãos e entidades da
                            Administração Pública do Estado do Maranhão que utilizem a condição análoga à de escravo na
                            produção de bens e serviços.
                        </p>

                        <a class="btn-book-a-table-md"
                            href="{{ url(asset('front/assets/files/Lei 9.752 de 10 de janeiro de 2013.pdf')) }}"
                            target="_blank"><span>Arquivo<span></a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/quedizemleis/icms.PNG')) }}" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <p>Lei 10.355</p>
                            <span>04/11/2015</span>
                        </div>
                        <p class="">
                            Dispõe sobre a cassação da inscrição no cadastro de contribuintes no Imposto sobre Operações
                            Relativas a Circulação de Mercadorias e sobre Prestações de Serviços de Transporte Interestadual
                            e Intermunicipal e de Comunicação (ICMS), de qualquer empresa que faça uso direto ou indireto de
                            trabalho escravo ou em condições análogas.
                        </p>

                        <a class="btn-book-a-table-md"
                            href="{{ url(asset('front/assets/files/Lei 10.355 de 04 de novembro de 2015.pdf')) }}"
                            target="_blank"><span>Arquivo<span></a>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
