@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>GT’S</h1>
                        <p>Solicite seu acesso ao Grupo de Trabalho</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>GT’S</li>
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
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTReinsercao.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Ações de Reinserção</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 2 membros</p>
                                <p><a class="btn-book-a-table-sm"
                                        href="https://api.whatsapp.com/send?phone=5598970190164&text=Ol%C3%A1,%20gostaria%20de%20participar%20do%20grupo%20GT%20-%20A%C3%A7%C3%B5es%20de%20Reinser%C3%A7%C3%A3o"
                                        target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTTemporario.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Temporário</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 2 membros</p>
                                <p><a class="btn-book-a-table-sm"
                                        href="https://api.whatsapp.com/send?phone=5598970190164&text=Ol%C3%A1,%20gostaria%20de%20participar%20do%20grupo%20GT%20-%20Tempor%C3%A1rio"
                                        target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTComunicaao.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Comunicação</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 2 membros</p>
                                <p><a class="btn-book-a-table-sm"
                                        href="https://api.whatsapp.com/send?phone=5598970190164&text=Ol%C3%A1,%20gostaria%20de%20participar%20do%20grupo%20GT%20-%20Comunica%C3%A7%C3%A3o"
                                        target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTAcoesPrevenao.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Ações de Prevenção</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 1 membro</p>
                                <p><a class="btn-book-a-table-sm"
                                        href="https://api.whatsapp.com/send?phone=5598970190164&text=Ol%C3%A1,%20gostaria%20de%20participar%20do%20grupo%20GT%20-%20A%C3%A7%C3%B5es%20de%20Preven%C3%A7%C3%A3o"
                                        target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTAcoesGerais.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Ações Gerais</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 2 membros</p>
                                <p><a class="btn-book-a-table-sm" href="#" target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail ">
                            <img src="{{ url(asset('front/assets/img/grupos/GTAcoesRepressao.jpg')) }}" width="65%"
                                alt="...">
                            <div class="caption mt-3">
                                <h5>GT - Ações de Repressão</h5>
                                <p style="color: rgb(148, 152, 160);">Privado · 2 membros</p>
                                <p><a class="btn-book-a-table-sm" href="#" target="_blank"><span>Acessar<span></a></p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>



    </section>
@endsection
