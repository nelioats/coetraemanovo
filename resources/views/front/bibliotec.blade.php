@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>BIBLIOTEC.MA</h1>
                        <p>Publicações produzidas sobre trabalho escravo contemporâneo no Maranhão</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>BIBLIOTEC.MA</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4">



            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <!-- ==================================================================== -->

                    <div class="row" style="margin-top: 30px; margin-bottom: 10px;">

                        <h6 style="background-color: rgb(216, 216, 216); padding: 20px; margin-bottom: 35px;"
                            class="text-center">Pesquisar</h6>

                        <div class="form-group mt-1 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Organização:</h6>
                            </label>
                            <input type="text" class="form-control" name="resumo" value="">
                        </div>

                        <div class="form-group mt-1 info-item col-md-4">
                            <label>
                                <h6 style=" font-weight: bold">Tipo de Material:</h6>
                            </label>
                            <select class="form-control" name="componenteBT">
                                <option value="">Monografias</option>
                                <option value="">Teses Diversas</option>
                                <option value="">Livros</option>
                                <option value="">Artigos</option>
                                <option value="">Outros</option>
                            </select>
                        </div>

                        <div class="form-group mt-1 mb-3 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Título:</h6>
                            </label>
                            <input type="text" class="form-control" name="resumo" value="">
                        </div>

                        <div class="form-group mt-1 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Resumo:</h6>
                            </label>
                            <input type="text" class="form-control" name="resumo" value="">
                        </div>

                        <div class="form-group mt-1 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Autores:</h6>
                            </label>
                            <input type="text" class="form-control" name="resumo" value="">
                        </div>


                        <div class="form-group mt-0 mb-3 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Orientadores:</h6>
                            </label>
                            <input type="text" class="form-control" name="orientadores" value="">
                        </div>

                        <div class="form-group mt-0 info-item col-md-4">
                            <label for="">
                                <h6 style=" font-weight: bold">Ano:</h6>
                            </label>
                            <input type="date" class="form-control" name="orientadores" value="">
                        </div>

                        <div class="form-group mt-1 info-item col-md-8">
                            <label>
                                <h6 style=" font-weight: bold; text-align: left;">Com quem? Parcerias:</h6>
                            </label>
                            <select class="form-control" name="componenteBT">
                                <option value="">AGERP - Agência Estadual de Pesquisa Agropecuária e Extensão Rural do
                                    Maranhão</option>
                                <option value="">CCN - Centro de Cultura Negra do Maranhão</option>
                                <option value="">CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                                    Bascarán</option>
                                <option value="">CEREST/MA - Centro de Referência em Saúde do Trabalhador</option>
                                <option value="">DPE/MA - Defensoria Pública do Estado do Maranhão</option>
                                <option value="">CPT - Comissão Pastoral da Terra</option>
                                <option value="">DPU/MA - Defensoria Pública da União no Maranhão</option>
                                <option value="">FETAEMA - Federação dos Trabalhadores da Agricultura/MA</option>
                                <option value="">IMESC - Instituto Maranhense de Estudos Socioeconômicos e
                                    Cartográficos</option>
                                <option value="">ITERMA - INSTITUTO DE COLONIZAÇÃO E TERRAS DO MARANHÃO</option>
                                <option value="">MPE - Ministério Público do Estado do Maranhão</option>
                                <option value="">MPF - Ministério Publico Federal do Maranhão</option>
                                <option value="">OAB/MA - Ordem dos Advogados do Brasil no Maranhão</option>
                                <option value="">PF/MA - POLÍCIA FEDERAL</option>
                                <option value="">Procuradoria da República no Maranhão</option>
                                <option value="">Procuradoria Regional do Trabalho - PRT 16ª Região</option>
                                <option value="">Procuradoria-Geral de Justiça - PGJ</option>
                                <option value="">SAF - Secretaria De Estado Da Agricultura Familiar</option>
                                <option value="">SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                                    Maranhão</option>
                                <option value="">SECAP - Secretaria de Estado da Comunicação Social</option>
                                <option value="">SECMA - Secretaria de Estado da Cultura</option>
                                <option value="">SECTI - Secretaria de Ciência, Tecnologia e Inovação</option>
                                <option value="">SECULT Secretaria Municipal de Cultura</option>
                                <option value="">SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                                    Programas Estratégicos</option>
                                <option value="">SEDES - Secretaria Estadual de Desenvolvimento Social</option>
                                <option value="">SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                                    Popular</option>
                                <option value="">SEDUC - Secretaria de Estado de Educação</option>
                                <option value="">SEEJUV - Secretaria De Estado Extraordinária Da Juventude</option>
                                <option value="">SEGOV - Secretaria de Governo do Maranhão</option>
                                <option value="">SEIR - Secretaria de Estado da Igualdade Racial</option>
                                <option value="">SEMA - Secretaria de Estado do Meio Ambiente e Recursos Naturais
                                </option>
                                <option value="">SEPLAN - Secretaria de Estado do Planejamento e Orçamento</option>
                                <option value="">SES - Secretaria de Estado da Saúde</option>
                                <option value="">SETRES - Secretaria de Estado do Trabalho e da Economia Solidar
                                </option>
                                <option value="">SETUR - Secretaria Municipal de Turismo</option>
                                <option value="">SMDH - Sociedade Maranhense de Direitos Humanos</option>
                                <option value="">SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                                    Maranhão</option>
                                <option value="">SSP/MA - Secretaria de Segurança Pública do Estado do Maranhão
                                </option>
                                <option value="">TRT - Tribunal Regional do Trabalho da 16ª Região</option>
                                <option value="">UFMA - Universidade Federal do Maranhão</option>
                                <option value="">VIVA PROCON</option>
                                <option value="">Outro:</option>

                            </select>
                        </div>

                        <div class="text-center mt-3"><button type="submit"
                                class="btn btn-book-a-table-md">Buscar</button>
                        </div>

                    </div>


                    <!-- ========================================================================== -->

                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 " style="margin-top: 30px;">
                    <h6 style="background-color: rgb(216, 216, 216); padding: 20px; text-align: center;">Trabalhos
                        encontrados</h6>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <td scope="col">1</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="col">Organização:</th>
                                    <td scope="col">UFMA</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de Material:</th>
                                    <td>Livro</td>
                                </tr>
                                <tr>
                                    <th scope="row">Título:</th>
                                    <td>Escravo da Precisão</td>
                                </tr>
                                <tr>
                                    <th scope="row">Resumo:</th>
                                    <td>A dissertação de mestrado, agora transformada em livro, de Flávia de Almeida Moura,
                                        amplia nossos horizontes sobre os componentes da reprodução do trabalho escravo numa
                                        outra direção. Ela mostra os aspectos que estão na base da produção da força de
                                        trabalho
                                        que se submete a situação da escravidão contemporânea, os mecanismos sociais que
                                        produzem a necessidade do deslocamento para a situação de exploração extrema.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Autores:</th>
                                    <td>Flávia de Almeida Moura</td>
                                </tr>
                                <tr>
                                    <th scope="row">Orientadores:</th>
                                    <td>Marcelo Domingos Sampaio Carneiro</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ano de Publicação:</th>
                                    <td>2009</td>
                                </tr>
                                <tr>
                                    <th scope="row">Com quem? Parcerias:</th>
                                    <td>UFMA</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></th>
                                    <td><a href="./files/bibliotec/Escravos da Precisão.pdf" target="_blank"> <i
                                                class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                </tr>



                            </tbody>
                        </table>
                    </div>


                    <hr>

                </div>


            </div>


        </div>



    </section>
@endsection
