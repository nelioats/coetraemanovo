@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>DOCUMENTOS DE CRIAÇÃO</h1>
                        <p>Os arquivos reúnem documentos que marcam a trajetória de atuação da rede de combate ao trabalho
                            escravo no Maranhão</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>DOCUMENTOS DE CRIAÇÃO</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">
        <div class="container">

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="text-center">Documento</th>
                                <th scope="col" class="text-center">Arquivo</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">1</th>
                                <td>Carta Compromisso Jackson Lago (2006)</td>
                                <td> <a href="{{ url(asset('front/assets/files/Carta Compromisso Jackson Lago (2006).pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Carta de Açailândia Novo Pacto contra a escravidão (2006)</td>
                                <td><a href="{{ url(asset('front/assets/files/ANX Carta de Açailândia 2006 - pacto.pdf ')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Criação da COETRAE/MA (2007)</td>
                                <td><a href="{{ url(asset('front/assets/files/Criação da COETRAE-MA (2007).pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Regimento Interno (2007)</td>
                                <td><a href="{{ url(asset('front/assets/files/Regime Interno COETRAE (2007).pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Criação da COETRAE (2012)</td>
                                <td><a href="{{ url(asset('front/assets/files/Criação da COETRAE (2012).pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
@endsection
