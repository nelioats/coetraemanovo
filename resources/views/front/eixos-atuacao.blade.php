@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>EIXOS DE ATUAÇÃO</h1>
                        <p>Áreas específicas de atuação da rede de combate</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>EIXOS DE ATUAÇÃO</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <img src="{{ url(asset('front/assets/img/eixo_coetrae.png')) }}" class="img-fluid"
                        alt="Responsive image">
                </div>

            </div>
        </div>
    </section>
@endsection
