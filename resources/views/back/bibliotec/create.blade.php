@extends('back.master')

@section('content')
    <div class="container mb-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">BibliotecMA - Inserir</h1>
        </div>

        <button type="button" class="btn btn-primary"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            <a href="{{ route('bibliotec_list') }}" style="color: white; text-decoration: none;">Retornar
                listagem</a>
        </button>





        @if ($errors->all())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">
                    {{ $error }}
                </div>
            @endforeach
        @endif


        {{--  --}}
        <div class="row" style="margin-top: 30px; margin-bottom: 10px;">


            <form action="{{ route('bibliotec_create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group mt-1 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Organização:</h6>
                        </label>
                        <input type="text" class="form-control" name="organizacao" value="" required>
                    </div>

                    <div class="form-group mt-1 mb-3  info-item col-md-6">
                        <label>
                            <h6 style=" font-weight: bold">Tipo de Material:</h6>
                        </label>
                        <select class="form-control" name="tipomaterial" required>
                            <option value=""></option>
                            <option value="Monografias">Monografias</option>
                            <option value="Teses Diversas">Teses Diversas</option>
                            <option value="Livros">Livros</option>
                            <option value="Artigos">Artigos</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-1 mb-3 info-item col-md-12">
                    <label for="">
                        <h6 style=" font-weight: bold">Título:</h6>
                    </label>
                    <input type="text" class="form-control" name="titulo" value="" required>
                </div>

                <div class="form-group mt-1 mb-3 info-item col-md-12">
                    <label for="">
                        <h6 style=" font-weight: bold">Resumo:</h6>
                    </label>

                    <textarea class="form-control" name="resumo" value="" required></textarea>
                </div>

                <div class="row">
                    <div class="form-group mt-1 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Autores:</h6>
                        </label>
                        <input type="text" class="form-control" name="autores" value="" required>
                    </div>


                    <div class="form-group mt-1 mb-3 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Orientadores:</h6>
                        </label>
                        <input type="text" class="form-control" name="orientadores" value="" required>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group mt-0 info-item col-md-4">
                        <label for="">
                            <h6 style=" font-weight: bold">Ano:</h6>
                        </label>
                        <input type="date" class="form-control" name="anopublicacao" value="" required>
                    </div>

                    <div class="form-group mt-1 info-item col-md-8">
                        <label>
                            <h6 style=" font-weight: bold; text-align: left;">Com quem? Parcerias:</h6>
                        </label>
                        <select class="form-control" name="parceiro" required>
                            <option value=""></option>
                            <option value="CCN - Centro de Cultura Negra do Maranhão">CCN - Centro de Cultura Negra do
                                Maranhão</option>
                            <option
                                value="CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                            Bascarán">
                                CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                                Bascarán</option>
                            <option value="CEREST/MA - Centro de Referência em Saúde do Trabalhador">CEREST/MA - Centro de
                                Referência em Saúde do Trabalhador</option>
                            <option value="DPE/MA - Defensoria Pública do Estado do Maranhão">DPE/MA - Defensoria Pública do
                                Estado do Maranhão</option>
                            <option value="CPT - Comissão Pastoral da Terra">CPT - Comissão Pastoral da Terra</option>
                            <option value="DPU/MA - Defensoria Pública da União no Maranhão">DPU/MA - Defensoria Pública da
                                União no Maranhão</option>
                            <option value="FETAEMA - Federação dos Trabalhadores da Agricultura/MA">FETAEMA - Federação dos
                                Trabalhadores da Agricultura/MA</option>
                            <option
                                value="IMESC - Instituto Maranhense de Estudos Socioeconômicos e
                            Cartográficos">
                                IMESC - Instituto Maranhense de Estudos Socioeconômicos e
                                Cartográficos</option>
                            <option value="ITERMA - INSTITUTO DE COLONIZAÇÃO E TERRAS DO MARANHÃO">ITERMA - INSTITUTO DE
                                COLONIZAÇÃO E TERRAS DO MARANHÃO</option>
                            <option value="MPE - Ministério Público do Estado do Maranhão">MPE - Ministério Público do
                                Estado do Maranhão</option>
                            <option value="MPF - Ministério Publico Federal do Maranhão">MPF - Ministério Publico Federal do
                                Maranhão</option>
                            <option value="OAB/MA - Ordem dos Advogados do Brasil no Maranhão">OAB/MA - Ordem dos Advogados
                                do Brasil no Maranhão</option>
                            <option value="PF/MA - POLÍCIA FEDERAL">PF/MA - POLÍCIA FEDERAL</option>
                            <option value="Procuradoria da República no Maranhão">Procuradoria da República no Maranhão
                            </option>
                            <option value="Procuradoria Regional do Trabalho - PRT 16ª Região">Procuradoria Regional do
                                Trabalho - PRT 16ª Região</option>
                            <option value="Procuradoria-Geral de Justiça - PGJ">Procuradoria-Geral de Justiça - PGJ</option>
                            <option value="SAF - Secretaria De Estado Da Agricultura Familiar">SAF - Secretaria De Estado Da
                                Agricultura Familiar</option>
                            <option
                                value="SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                            Maranhão">
                                SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                                Maranhão</option>
                            <option value="SECAP - Secretaria de Estado da Comunicação Social">SECAP - Secretaria de Estado
                                da Comunicação Social</option>
                            <option value="SECMA - Secretaria de Estado da Cultura">SECMA - Secretaria de Estado da Cultura
                            </option>
                            <option value="SECTI - Secretaria de Ciência, Tecnologia e Inovação">SECTI - Secretaria de
                                Ciência, Tecnologia e Inovação</option>
                            <option value="SECULT Secretaria Municipal de Cultura">SECULT Secretaria Municipal de Cultura
                            </option>
                            <option
                                value="SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                            Programas Estratégicos">
                                SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                                Programas Estratégicos</option>
                            <option value="SEDES - Secretaria Estadual de Desenvolvimento Social">SEDES - Secretaria
                                Estadual de Desenvolvimento Social</option>
                            <option
                                value="SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                            Popular">
                                SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                                Popular</option>
                            <option value="SEDUC - Secretaria de Estado de Educação">SEDUC - Secretaria de Estado de
                                Educação</option>
                            <option value="SEEJUV - Secretaria De Estado Extraordinária Da Juventude">SEEJUV - Secretaria
                                De
                                Estado Extraordinária Da Juventude</option>
                            <option value="SEGOV - Secretaria de Governo do Maranhão">SEGOV - Secretaria de Governo do
                                Maranhão</option>
                            <option value="SEIR - Secretaria de Estado da Igualdade Racial">SEIR - Secretaria de Estado da
                                Igualdade Racial</option>
                            <option value="SEMA - Secretaria de Estado do Meio Ambiente e Recursos Naturais">SEMA -
                                Secretaria de Estado do Meio Ambiente e Recursos Naturais
                            </option>
                            <option value="SEPLAN - Secretaria de Estado do Planejamento e Orçamento">SEPLAN - Secretaria
                                de Estado do Planejamento e Orçamento</option>
                            <option value="SES - Secretaria de Estado da Saúde">SES - Secretaria de Estado da Saúde
                            </option>
                            <option value="SETRES - Secretaria de Estado do Trabalho e da Economia Solidar">SETRES -
                                Secretaria de Estado do Trabalho e da Economia Solidar
                            </option>
                            <option value="SETUR - Secretaria Municipal de Turismo">SETUR - Secretaria Municipal de Turismo
                            </option>
                            <option value="SMDH - Sociedade Maranhense de Direitos Humanos">SMDH - Sociedade Maranhense de
                                Direitos Humanos</option>
                            <option
                                value="SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                            Maranhão">
                                SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                                Maranhão</option>
                            <option value="SSP/MA - Secretaria de Segurança Pública do Estado do Maranhão">SSP/MA -
                                Secretaria de Segurança Pública do Estado do Maranhão
                            </option>
                            <option value="TRT - Tribunal Regional do Trabalho da 16ª Região">TRT - Tribunal Regional do
                                Trabalho da 16ª Região</option>
                            <option value="UFMA - Universidade Federal do Maranhão">UFMA - Universidade Federal do Maranhão
                            </option>
                            <option value="VIVA PROCON">VIVA PROCON</option>
                            <option value="Outro:">Outro:</option>

                        </select>
                    </div>
                </div>

                <div class="input-group mt-3 mb-3">
                    <label class="input-group-text">Upload</label>
                    <input type="file" class="form-control" name="filepublicacao">
                </div>



                <div class="gap-2 col-6">
                    <button class="btn btn-success" type="submit">Salvar</button>
                </div>

            </form>

        </div>





        {{--  --}}

    </div>
@endsection
