@extends('back.master')

@section('content')
    <div class="container mb-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">BibliotecMA - Editar</h1>
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


            <form action="{{ route('bibliotec_update', ['id' => $publicacao->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group mt-1 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Organização:</h6>
                        </label>
                        <input type="text" class="form-control" name="organizacao" value="{{ $publicacao->organizacao }}"
                            required>
                    </div>

                    <div class="form-group mt-1 mb-3  info-item col-md-6">
                        <label>
                            <h6 style=" font-weight: bold">Tipo de Material:</h6>
                        </label>
                        <select class="form-control" name="tipomaterial" required>
                            <option value=""></option>
                            <option value="Monografias" {{ $publicacao->tipomaterial == 'Monografias' ? 'selected' : '' }}>
                                Monografias</option>
                            <option value="Teses Diversas"
                                {{ $publicacao->tipomaterial == 'Teses Diversas' ? 'selected' : '' }}>Teses Diversas
                            </option>
                            <option value="Livros" {{ $publicacao->tipomaterial == 'Livros' ? 'selected' : '' }}>Livros
                            </option>
                            <option value="Artigos" {{ $publicacao->tipomaterial == 'Artigos' ? 'selected' : '' }}>Artigos
                            </option>
                            <option value="Outros" {{ $publicacao->tipomaterial == 'Outros' ? 'selected' : '' }}>Outros
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-1 mb-3 info-item col-md-12">
                    <label for="">
                        <h6 style=" font-weight: bold">Título:</h6>
                    </label>
                    <input type="text" class="form-control" name="titulo" value="{{ $publicacao->titulo }}" required>
                </div>

                <div class="form-group mt-1 mb-3 info-item col-md-12">
                    <label for="">
                        <h6 style=" font-weight: bold">Resumo:</h6>
                    </label>

                    <textarea class="form-control" name="resumo" required>{{ $publicacao->resumo }}</textarea>
                </div>

                <div class="row">
                    <div class="form-group mt-1 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Autores:</h6>
                        </label>
                        <input type="text" class="form-control" name="autores" value="{{ $publicacao->autores }}"
                            required>
                    </div>


                    <div class="form-group mt-1 mb-3 info-item col-md-6">
                        <label for="">
                            <h6 style=" font-weight: bold">Orientadores:</h6>
                        </label>
                        <input type="text" class="form-control" name="orientadores"
                            value="{{ $publicacao->orientadores }}" required>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group mt-0 info-item col-md-4">
                        <label for="">
                            <h6 style=" font-weight: bold">Ano:</h6>
                        </label>
                        <input type="date" class="form-control" name="anopublicacao"
                            value="{{ $publicacao->getAnopublicacaoAttributeNoFormat($publicacao->id) }}" required>
                    </div>

                    <div class="form-group mt-1 info-item col-md-8">
                        <label>
                            <h6 style=" font-weight: bold; text-align: left;">Com quem? Parcerias:</h6>
                        </label>
                        <select class="form-control" name="parceiro" required>
                            <option value=""></option>
                            <option value="CCN - Centro de Cultura Negra do Maranhão"
                                {{ $publicacao->parceiro == 'CCN - Centro de Cultura Negra do Maranhão' ? 'selected' : '' }}>
                                CCN - Centro de Cultura Negra do
                                Maranhão</option>
                            <option
                                value="CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                            Bascarán"
                                {{ $publicacao->parceiro ==
                                'CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Bascarán'
                                    ? 'selected'
                                    : '' }}>
                                CDVDH/CB - Centro de Defesa da Vida e dos Direitos Humano Carmen
                                Bascarán</option>
                            <option value="CEREST/MA - Centro de Referência em Saúde do Trabalhador"
                                {{ $publicacao->parceiro == 'CEREST/MA - Centro de Referência em Saúde do Trabalhador' ? 'selected' : '' }}>
                                CEREST/MA - Centro de
                                Referência em Saúde do Trabalhador</option>
                            <option value="DPE/MA - Defensoria Pública do Estado do Maranhão"
                                {{ $publicacao->parceiro == 'DPE/MA - Defensoria Pública do Estado do Maranhão' ? 'selected' : '' }}>
                                DPE/MA - Defensoria Pública do
                                Estado do Maranhão</option>
                            <option value="CPT - Comissão Pastoral da Terra"
                                {{ $publicacao->parceiro == 'CPT - Comissão Pastoral da Terra' ? 'selected' : '' }}>
                                CPT - Comissão Pastoral da Terra</option>
                            <option value="DPU/MA - Defensoria Pública da União no Maranhão"
                                {{ $publicacao->parceiro == 'DPU/MA - Defensoria Pública da União no Maranhão' ? 'selected' : '' }}>
                                DPU/MA - Defensoria Pública da
                                União no Maranhão</option>
                            <option value="FETAEMA - Federação dos Trabalhadores da Agricultura/MA"
                                {{ $publicacao->parceiro == 'FETAEMA - Federação dos Trabalhadores da Agricultura/MA' ? 'selected' : '' }}>
                                FETAEMA - Federação dos
                                Trabalhadores da Agricultura/MA</option>
                            <option
                                value="IMESC - Instituto Maranhense de Estudos Socioeconômicos e
                            Cartográficos"
                                {{ $publicacao->parceiro == 'IMESC - Instituto Maranhense de Estudos Socioeconômicos e Cartográficos'
                                    ? 'selected'
                                    : '' }}>
                                IMESC - Instituto Maranhense de Estudos Socioeconômicos e
                                Cartográficos</option>
                            <option value="ITERMA - INSTITUTO DE COLONIZAÇÃO E TERRAS DO MARANHÃO"
                                {{ $publicacao->parceiro == 'ITERMA - INSTITUTO DE COLONIZAÇÃO E TERRAS DO MARANHÃO' ? 'selected' : '' }}>
                                ITERMA - INSTITUTO DE
                                COLONIZAÇÃO E TERRAS DO MARANHÃO</option>
                            <option value="MPE - Ministério Público do Estado do Maranhão"
                                {{ $publicacao->parceiro == 'MPE - Ministério Público do Estado do Maranhão' ? 'selected' : '' }}>
                                MPE - Ministério Público do
                                Estado do Maranhão</option>
                            <option value="MPF - Ministério Publico Federal do Maranhão"
                                {{ $publicacao->parceiro == 'MPF - Ministério Publico Federal do Maranhão' ? 'selected' : '' }}>
                                MPF - Ministério Publico Federal do
                                Maranhão</option>
                            <option value="OAB/MA - Ordem dos Advogados do Brasil no Maranhão"
                                {{ $publicacao->parceiro == 'OAB/MA - Ordem dos Advogados do Brasil no Maranhão' ? 'selected' : '' }}>
                                OAB/MA - Ordem dos Advogados
                                do Brasil no Maranhão</option>
                            <option value="PF/MA - POLÍCIA FEDERAL"
                                {{ $publicacao->parceiro == 'PF/MA - POLÍCIA FEDERAL' ? 'selected' : '' }}>
                                PF/MA - POLÍCIA FEDERAL</option>
                            <option value="Procuradoria da República no Maranhão"
                                {{ $publicacao->parceiro == 'Procuradoria da República no Maranhão' ? 'selected' : '' }}>
                                Procuradoria da República no Maranhão
                            </option>
                            <option value="Procuradoria Regional do Trabalho - PRT 16ª Região"
                                {{ $publicacao->parceiro == 'Procuradoria Regional do Trabalho - PRT 16ª Região' ? 'selected' : '' }}>
                                Procuradoria Regional do
                                Trabalho - PRT 16ª Região</option>
                            <option value="Procuradoria-Geral de Justiça - PGJ"
                                {{ $publicacao->parceiro == 'Procuradoria-Geral de Justiça - PGJ' ? 'selected' : '' }}>
                                Procuradoria-Geral de Justiça - PGJ</option>
                            <option value="SAF - Secretaria De Estado Da Agricultura Familiar"
                                {{ $publicacao->parceiro == 'SAF - Secretaria De Estado Da Agricultura Familiar' ? 'selected' : '' }}>
                                SAF - Secretaria De Estado Da
                                Agricultura Familiar</option>
                            <option
                                value="SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                            Maranhão"
                                {{ $publicacao->parceiro ==
                                'SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Maranhão'
                                    ? 'selected'
                                    : '' }}>
                                SAGRIMA - Secretaria de Agricultura, Pecuária e Pesca do Estado do
                                Maranhão</option>
                            <option value="SECAP - Secretaria de Estado da Comunicação Social"
                                {{ $publicacao->parceiro == 'SECAP - Secretaria de Estado da Comunicação Social' ? 'selected' : '' }}>
                                SECAP - Secretaria de Estado
                                da Comunicação Social</option>
                            <option value="SECMA - Secretaria de Estado da Cultura"
                                {{ $publicacao->parceiro == 'SECMA - Secretaria de Estado da Cultura' ? 'selected' : '' }}>
                                SECMA - Secretaria de Estado da Cultura
                            </option>
                            <option value="SECTI - Secretaria de Ciência, Tecnologia e Inovação"
                                {{ $publicacao->parceiro == 'SECTI - Secretaria de Ciência, Tecnologia e Inovação' ? 'selected' : '' }}>
                                SECTI - Secretaria de
                                Ciência, Tecnologia e Inovação</option>
                            <option value="SECULT Secretaria Municipal de Cultura"
                                {{ $publicacao->parceiro == 'SECULT Secretaria Municipal de Cultura' ? 'selected' : '' }}>
                                SECULT Secretaria Municipal de Cultura
                            </option>
                            <option
                                value="SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                            Programas Estratégicos"
                                {{ $publicacao->parceiro ==
                                'SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Programas Estratégicos'
                                    ? 'selected'
                                    : '' }}>
                                SEDEPE - Secretaria de Estado de Desenvolvimento Econômico e
                                Programas Estratégicos</option>
                            <option value="SEDES - Secretaria Estadual de Desenvolvimento Social"
                                {{ $publicacao->parceiro == 'SEDES - Secretaria Estadual de Desenvolvimento Social' ? 'selected' : '' }}>
                                SEDES - Secretaria
                                Estadual de Desenvolvimento Social</option>
                            <option
                                value="SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                            Popular"
                                {{ $publicacao->parceiro ==
                                'SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Popular'
                                    ? 'selected'
                                    : '' }}>
                                SEDIHPOP - Secretaria de Estado dos Direitos Humanos e Participação
                                Popular</option>
                            <option value="SEDUC - Secretaria de Estado de Educação"
                                {{ $publicacao->parceiro == 'SEDUC - Secretaria de Estado de Educação' ? 'selected' : '' }}>
                                SEDUC - Secretaria de Estado de
                                Educação</option>
                            <option value="SEEJUV - Secretaria De Estado Extraordinária Da Juventude"
                                {{ $publicacao->parceiro == 'SEEJUV - Secretaria De Estado Extraordinária Da Juventude' ? 'selected' : '' }}>
                                SEEJUV - Secretaria
                                De
                                Estado Extraordinária Da Juventude</option>
                            <option value="SEGOV - Secretaria de Governo do Maranhão"
                                {{ $publicacao->parceiro == 'SEGOV - Secretaria de Governo do Maranhão' ? 'selected' : '' }}>
                                SEGOV - Secretaria de Governo do
                                Maranhão</option>
                            <option value="SEIR - Secretaria de Estado da Igualdade Racial"
                                {{ $publicacao->parceiro == 'SEIR - Secretaria de Estado da Igualdade Racial' ? 'selected' : '' }}>
                                SEIR - Secretaria de Estado da
                                Igualdade Racial</option>
                            <option value="SEMA - Secretaria de Estado do Meio Ambiente e Recursos Naturais"
                                {{ $publicacao->parceiro == 'SEMA - Secretaria de Estado do Meio Ambiente e Recursos Naturais' ? 'selected' : '' }}>
                                SEMA -
                                Secretaria de Estado do Meio Ambiente e Recursos Naturais
                            </option>
                            <option value="SEPLAN - Secretaria de Estado do Planejamento e Orçamento"
                                {{ $publicacao->parceiro == 'SEPLAN - Secretaria de Estado do Planejamento e Orçamento' ? 'selected' : '' }}>
                                SEPLAN - Secretaria
                                de Estado do Planejamento e Orçamento</option>
                            <option value="SES - Secretaria de Estado da Saúde"
                                {{ $publicacao->parceiro == 'SES - Secretaria de Estado da Saúde' ? 'selected' : '' }}>
                                SES - Secretaria de Estado da Saúde
                            </option>
                            <option value="SETRES - Secretaria de Estado do Trabalho e da Economia Solidar"
                                {{ $publicacao->parceiro == 'SETRES - Secretaria de Estado do Trabalho e da Economia Solidar' ? 'selected' : '' }}>
                                SETRES -
                                Secretaria de Estado do Trabalho e da Economia Solidar
                            </option>
                            <option value="SETUR - Secretaria Municipal de Turismo"
                                {{ $publicacao->parceiro == 'SETUR - Secretaria Municipal de Turismo' ? 'selected' : '' }}>
                                SETUR - Secretaria Municipal de Turismo
                            </option>
                            <option value="SMDH - Sociedade Maranhense de Direitos Humanos"
                                {{ $publicacao->parceiro == 'SMDH - Sociedade Maranhense de Direitos Humanos' ? 'selected' : '' }}>
                                SMDH - Sociedade Maranhense de
                                Direitos Humanos</option>
                            <option
                                value="SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                            Maranhão"
                                {{ $publicacao->parceiro ==
                                'SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Maranhão'
                                    ? 'selected'
                                    : '' }}>
                                SRTb/MA - Superintendência Regional do Trabalho e Emprego no
                                Maranhão</option>
                            <option value="SSP/MA - Secretaria de Segurança Pública do Estado do Maranhão"
                                {{ $publicacao->parceiro == 'SSP/MA - Secretaria de Segurança Pública do Estado do Maranhão' ? 'selected' : '' }}>
                                SSP/MA -
                                Secretaria de Segurança Pública do Estado do Maranhão
                            </option>
                            <option value="TRT - Tribunal Regional do Trabalho da 16ª Região"
                                {{ $publicacao->parceiro == 'TRT - Tribunal Regional do Trabalho da 16ª Região' ? 'selected' : '' }}>
                                TRT - Tribunal Regional do
                                Trabalho da 16ª Região</option>
                            <option value="UFMA - Universidade Federal do Maranhão"
                                {{ $publicacao->parceiro == 'UFMA - Universidade Federal do Maranhão' ? 'selected' : '' }}>
                                UFMA - Universidade Federal do Maranhão
                            </option>
                            <option value="VIVA PROCON" {{ $publicacao->parceiro == 'VIVA PROCON' ? 'selected' : '' }}>
                                VIVA PROCON</option>
                            <option value="Outro:">Outro:</option>

                        </select>
                    </div>
                </div>

                <div class="input-group mt-3 mb-3">
                    <label class="input-group-text">Upload</label>
                    <input type="file" class="form-control" name="filepublicacao">
                </div>


                <a href="{{ url(asset("publicacoes/{$publicacao->filepublicacao_path}")) }}" target="_blank"><span
                        data-feather="file" class="align-text-bottom"></span> Visualizar Publicação</a>



                <div class=" gap-2 col-6 mt-5">
                    <button class="btn btn-success" type="submit">Atualizar</button>
                    <a onclick="alert('olas');" class="btn btn-danger"
                        href="{{ route('bibliotec_delete', ['id' => $publicacao->id]) }}">Excluir</a>
                </div>



            </form>

        </div>





        {{--  --}}

    </div>
@endsection
