@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>GUIA PARA JORNALISTAS</h1>
                        <p>GUIA RÁPIDO - Confira informações fundamentais para a cobertura jornalística do trabalho escravo
                            no Brasil</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>GUIA PARA JORNALISTAS</li>
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
                    <img src="{{ url(asset('front/assets/img/bibliotec/bibliotec.jpg')) }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-3">
                        <div class="section-header-esquerda">
                            <h3>GUIA RÁPIDO PARA JORNALISTAS SOBRE TRABALHO ESCRAVO</h3>
                        </div>
                        <a class="btn-book-a-table-md" href="https://reporterbrasil.org.br/guia/" target="_blank"><span>Ir
                                para Guia<span></a>
                    </div>
                </div>




            </div>
        </div>


    </section>
@endsection
