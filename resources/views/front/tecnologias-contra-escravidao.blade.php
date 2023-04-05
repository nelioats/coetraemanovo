@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>TECNOLOGIAS CONTRA ESCRAVIDÃO</h1>
                        <p>Novas ferramentas integradas à política de enfrentamento ao trabalho escravo na atualidade</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>TECNOLOGIAS CONTRA ESCRAVIDÃO</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4 text-center">
            <div class="row gx-3 gy-3">
                <div class="col-12 col-md-6">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <a href="https://smartlabbr.org/" target="_blank"><img
                                    src="{{ url(asset('front/assets/img/teccescravidao/SMARTLAB.png')) }}" alt="..."
                                    width="100%;" style="margin-bottom: 10px;"></a>
                            <div class="caption">
                                <h5>Plataforma SMARTLAB – Promoção do Trabalho Decente Guiada por Dados</h5>
                                <p style="color: rgb(87, 113, 161);">Fonte: SMARTLAB – Promoção do Trabalho Decente Guiada
                                    por DadoS (2016)</p>
                                <p style="text-align: justify;">Para empoderar diferentes grupos com novos fluxos de
                                    informação, de modo que a rede de atores responsáveis pela promoção da diversidade e da
                                    igualdade de oportunidades no trabalho desenvolvam e participem de políticas, programas
                                    e ações guiadas por evidências e orientadas para resultados, beneficiando todos os
                                    grupos cujos direitos precisam ser protegidos e promovidos.</p>
                                <p> <a class="btn-book-a-table-md" href="https://smartlabbr.org/"
                                        target="_blank"><span>Acessar página<span></a></p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <a href="https://reporterbrasil.org.br/" target="_blank"><img
                                    src="{{ url(asset('front/assets/img/teccescravidao/ONG_Reporter_Brasil.jpg')) }}"
                                    alt="..." width="100%;" style="margin-bottom: 10px;"></a>
                            <div class="caption">
                                <h5>Página inicial do site da ONG Repórter Brasil</h5>
                                <p style="color: rgb(87, 113, 161);">Fonte: Site ONG Repórter Brasil 2001</p>
                                <p style="text-align: justify;">A proposta da ONG Repórter Brasil é identificar e tornar
                                    públicas situações que ferem direitos trabalhistas e causam danos socioambientais no
                                    país, visando à mobilização de lideranças sociais, políticas e econômicas para a
                                    construção de uma sociedade de respeito aos direitos humanos, mais justa, igualitária e
                                    democrática.</p>
                                <br><br><br>
                                <p> <a class="btn-book-a-table-md" href="https://reporterbrasil.org.br/"
                                        target="_blank"><span>Acessar página<span></a></p>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <a href="https://ipe.sit.trabalho.gov.br/#!/" target="_blank"><img
                                    src="{{ url(asset('front/assets/img/teccescravidao/SistemaIpe.png')) }}" alt="..."
                                    width="100%;" style="margin-bottom: 10px;"></a>
                            <div class="caption">
                                <h5>Página inicial do Sistema Ipê</h5>
                                <p style="color: rgb(87, 113, 161);">Fonte: Sistema Ipê (2020)</p>
                                <p style="text-align: justify;">O Sistema Ipê , plataforma criada para qualquer pessoa
                                    realizar denúncia independentemente de cadastro prévio, enviando informações diretamente
                                    para a inspeção do trabalho. Além disso, é disponibilizada também acesso restrito aos
                                    gestores do sistema e aos parceiros devidamente cadastrados por meio do qual é possível
                                    inserir, processar e classificar denúncias.</p><br><br>
                                <p> <a class="btn-book-a-table-md" href="https://ipe.sit.trabalho.gov.br/#!/"
                                        target="_blank"><span>Acessar página<span></a></p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="p-3 border bg-light">
                        <div class="thumbnail">
                            <a href="https://ipe.sit.trabalho.gov.br/#!/" target="_blank"><img
                                    src="{{ url(asset('front/assets/img/teccescravidao/Monitora.png')) }}" alt="..."
                                    width="100%;" style="margin-bottom: 10px;"></a>
                            <div class="caption">
                                <h5>Página inicial da Plataforma Monitora</h5>
                                <p style="color: rgb(87, 113, 161);">Fonte: Monitora 8.7</p>
                                <p style="text-align: justify;">O Monitora 8.7 é uma plataforma de monitoramento de planos
                                    de erradicação do trabalho forçado, da escravidão contemporânea, do tráfico de pessoas e
                                    do trabalho infantil. A plataforma permite o monitoramento a partir da cooperação entre
                                    todas as organizações responsáveis por formular, implementar, monitorar e avaliar ações
                                    de múltiplas finalidades que englobam desde assuntos gerais, repressão, prevenção,
                                    inserção e assistência às vítimas, de monitoramento de legislação e de capacitação,
                                    entre outras.</p>
                                <p> <a class="btn-book-a-table-md" href="https://ipe.sit.trabalho.gov.br/#!/"
                                        target="_blank"><span>Acessar página<span></a></p>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </section>
@endsection
