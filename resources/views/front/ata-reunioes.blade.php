@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>ATAS DE REUNIÕES</h1>
                        <p>Acesso aos assuntos abordados nas reuniões da COETRAE/MA</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>ATAS DE REUNIÕES</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4 text-center">
            <div class="row">



                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <br>
                    <br>

                    <h6 style="background-color: rgb(216, 216, 216); padding: 20px;">2019</h6>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="text-center">Data da Ata</th>
                                <th scope="col" class="text-center">Visualizar Ata</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>27 de fevereiro de 2019</td>
                                <td> <a href="{{ url(asset('front/assets/files/atas/2019/ATA- REUNIÃO COETRAE.27.02.2019.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>24 de abril de 2019</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2019/ATA- REUNIÃO COETRAE.24.04.2019.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>03 de julho de 2019</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2019/ATA- REUNIÃO COETRAE.03.07.2019.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>30 de outubro de 2019</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2019/ATA- REUNIÃO COETRAE.30.10.2019.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>


                        </tbody>
                    </table>



                    <h6 style="background-color: rgb(216, 216, 216); padding: 20px;">2020</h6>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="text-center">Data da Ata</th>
                                <th scope="col" class="text-center">Visualizar Ata</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>20 de fevereiro de 2020</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2020/ATA DE 1ª REUNIÃO COETRAE - 20.02.2020.pdf')) }}"
                                        target="_blank">
                                        <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>27 de maio de 2020</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2020/ATA DA 2ª REUNIÃO ORDINÁRIA DA COETRAE - MA.docx.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>23 de julho de 2020</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2020/COETRAE - 3ª REUNIÃO 2020 - 23.07.2020.pdf')) }}"
                                        target="_blank">
                                        <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>24 de outubro de 2020</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2020/ATA DA 4ª REUNIÃO ORDINÁRIA DA COETRAE (1).pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>26 de novembro de 2020</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2020/ATA - 5ª Reunião - Ata - 26.11.2020.pdf')) }}"
                                        target="_blank">
                                        <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>



                        </tbody>
                    </table>


                    <h6 style="background-color: rgb(216, 216, 216); padding: 20px;">2021</h6>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class="text-center">Data da Ata</th>
                                <th scope="col" class="text-center">Visualizar Ata</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <th scope="row">1</th>
                                <td>25 de fevereiro de 2021</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2021/ATA 1ª Reunião COETRAE-2021.docx.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>29 de abril de 2021</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2021/ATA 2ª Reunião COETRAE-2021.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>24 de junho de 2021</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2021/Ata da 3ª Reunião Ordinária COETRAE - 24.06.2021.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>26 de agosto de 2021</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2021/ATA DA 4 REUNIAO COETRAE-MA-2021.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>27 de outubro de 2021</td>
                                <td><a href="{{ url(asset('front/assets/files/atas/2021/Ata da 5° reunião ordinária COETRAE 2021.pdf')) }}"
                                        target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                            </tr>



                        </tbody>
                    </table>


                    <h6 style="background-color: rgb(216, 216, 216); padding: 20px;">2022</h6>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" class="text-center">Data da Ata</th>
                                    <th scope="col" class="text-center">Visualizar Ata</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <th scope="row">1</th>
                                    <td>24 de fevereiro de 2022</td>
                                    <td><a href="{{ url(asset('front/assets/files/atas/2022/Ata da 1ª Reunião Ordinária COETRAE 2022 (1).pdf')) }}"
                                            target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <td>02 de junho 2022</td>
                                    <td><a href="{{ url(asset('front/assets/files/atas/2022/Ata da 2ª Reunião Ordinária COETRAE 02.06.2022 (1).pdf')) }}"
                                            target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <td>15 de setembro de 2022</td>
                                    <td><a href="{{ url(asset('front/assets/files/atas/2022/ATA E FREQUÊNCIA- 3ª REUNIÃO ORDINÁRIA DA COETRAE 2022.pdf')) }}"
                                            target="_blank"> <span class="bi bi-file-earmark-pdf"></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>




            </div>
        </div>



    </section>
@endsection
