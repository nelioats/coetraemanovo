@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>CONTATO</h1>
                        <p>Fale conosco</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>CONTATO</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4 text-center">
            <div class="row">



                <div class="col-md-6">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="single-icon">

                                    <span class="bi bi-phone"
                                        style="font-size: 2em; margin-bottom: 2px; color: rgb(102, 128, 243)"></span>
                                    <p>Telefone: (98) 3198-5011</p><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="single-icon">

                                    <span class="bi bi-envelope"
                                        style="font-size: 2em; margin-bottom: 2px; color: rgb(102, 128, 243)"></span>
                                    <p>
                                        Email: coetraema@gmail.com<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="single-icon">

                                    <span class="bi bi-geo-alt"
                                        style="font-size: 2em; margin-bottom: 2px; color: rgb(102, 128, 243)"></span>
                                    <p>
                                        Endereço: Avenida Jerônimo de Albuquerque, s/n, Calhau. Edifício Clodomir
                                        Milet (1º
                                        e 2º andares) CEP: 65030-005 São Luís – MA.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">

                    <div class="">
                        <div class="row ">
                            <form id="contactForm" method="POST" action="#" class="">

                                <div class="row mb-2">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Nome"
                                            aria-label="First name">
                                    </div>
                                    <div class="col mb-2">
                                        <input type="text" class="form-control" placeholder="Email"
                                            aria-label="Last name">
                                    </div>
                                </div>

                                <div class="col mb-3">
                                    <input type="text" class="form-control" placeholder="Assunto"
                                        aria-label="First name">
                                </div>

                                <div class="col mb-2">
                                    <textarea name="user-message" id="user-message" class="form-control" cols="20" rows="10"
                                        placeholder="Digite sua mensagem"></textarea>
                                </div>


                                <div class="">
                                    <button type="submit" id="submit" class="btn btn-book-a-table-md">Enviar
                                        mensagem</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>



    </section>
@endsection
