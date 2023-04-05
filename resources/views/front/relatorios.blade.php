@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>RELATÓRIOS</h1>
                        <p>Diagnósticos e extração de dados nacionais sobre os déficites no trabalho decente</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>RELATÓRIOS</li>
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
                    <img src="{{ url(asset('front/assets/img/relatorios/relatoro1.png')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <h3>Relatório Monitora 8.7 SmartLab</h3>
                        </div>
                        <a class="btn-book-a-table-md"
                            href="https://www.monitora87.org/visualizaplano?_token=x8lOhKK1iuI4Vs52x2YlkC6hWfHlUPlc6hgZbMQy&idplano=eyJpdiI6IjdzQ0NIK1FCK1R4eWltbzFacnlPOVE9PSIsInZhbHVlIjoiWWNmb1JyVDVtSFRUSXpySWFJd0xBdz09IiwibWFjIjoiNTA0ZTk2MmJmMDc5ZTYxMWZhMmZjZTA3ZThjN2M0NjNmYWNhN2U3ZjYxNjhiYmE1YzQxNGQ0MzYzZDlmN2Q4YSJ9&_idioma=pt"
                            target="_blank"><span>Ir para Relatório Monitora 8.7<span></a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <img src="{{ url(asset('front/assets/img/relatorios/relatoro2.png')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <h3>Relatório de Monitoramento e Avaliação do II Plano de Erradicação do Trabalho Escravo no
                                Maranhão</h3>
                        </div>

                        <a class="btn-book-a-table-md"
                            href="{{ url(asset('front/assets/files/MONITORA-Relatório Final do Monitoramento e Avaliação do Pete.MA. rev e atu (1).pdf')) }}"
                            target="_blank"><span>Ir
                                para Relatório<span></a>
                    </div>
                </div>


            </div>
        </div>


    </section>
@endsection
