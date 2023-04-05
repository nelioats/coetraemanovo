@extends('master')

@section('css')
    <style>
        #calendar a {
            color: #120d61;
            text-decoration: none;
        }

        mr-auto {
            margin-right: auto;
        }
    </style>
@stop


@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>AGENDA</h1>
                        <p>Compartilhamento online de ações realizadas</p>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>AGENDA</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container">
            <div class="row">
                {{--  --}}




                <div id='calendar'></div>



                {{-- MODAL --}}

                {{-- <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Evento</h4>
                            </div>
                            <div class="modal-body">
                                <form>

                                    {{ csrf_field() }}

                                    <div class="form-group" hidden>
                                        <label for="id" class="control-label">ID:</label>
                                        <input type="text" class="form-control" name="id" id="id"
                                            placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="control-label">Titulo:</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Digite o título do evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao" class="control-label">Descrição:</label>
                                        <textarea class="form-control" name="descricao" id="descricao" rows="4"
                                            placeholder="Digite a descrição do evento"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="organizadores" class="control-label">Organizadores:</label>
                                        <input type="text" class="form-control" name="organizadores" id="organizadores"
                                            placeholder="Digite os organizadores do evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="localevento" class="control-label">Local do evento:</label>
                                        <input type="text" class="form-control" name="localevento" id="localevento"
                                            placeholder="Digite o local do evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="linkdivulgacao" class="control-label">Link de divulgação:</label>
                                        <input type="text" class="form-control" name="linkdivulgacao" id="linkdivulgacao"
                                            placeholder="Insiro o link de divulgação">
                                    </div>

                                    <div class="form-group">
                                        <label for="horariostart" class="control-label">Horário inicial:</label>
                                        <input type="time" class="form-control" name="horariostart" id="horariostart"
                                            placeholder="Data do evento">
                                    </div>
                                    <div class="form-group">
                                        <label for="horarioend" class="control-label">Horário Fim:</label>
                                        <input type="time" class="form-control" name="horarioend" id="horarioend"
                                            placeholder="Data do evento">
                                    </div>

                                    <div class="form-group" hidden>
                                        <label for="start" class="control-label">Start:</label>
                                        <input type="date" class="form-control" name="start" id="start"
                                            placeholder="Data do evento">
                                    </div>
                                    <div class="form-group" hidden>
                                        <label for="end" class="control-label">End:</label>
                                        <input type="date" class="form-control" name="end" id="end"
                                            placeholder="Término do evento">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">

                                @if (Auth::check())
                                    @if (auth()->user()->perfil == 'administrador' || auth()->user()->perfil == 'Ascom')
                                        <button type="button" class="btn btn-success" id="btnSalvar">Salvar</button>
                                        <button type="button" class="btn btn-warning" id="btnEditar">Atualizar</button>
                                        <button type="button" class="btn btn-danger" id="btnExcluir">Excluir</button>
                                    @endif
                                @endif



                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- FIM MODAL --}}

                {{-- TESTE MODAL --}}
                <!-- Modal -->
                <div class="modal fade" id="evento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Evento</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <form>

                                    {{ csrf_field() }}

                                    <div class="form-group" hidden>
                                        <label for="id" class="control-label">ID:</label>
                                        <input type="text" class="form-control" name="id" id="id"
                                            placeholder="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="title" class="col-form-label">Titulo:</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Digite o título do evento">
                                    </div>
                                    <div class="mb-3">
                                        <label for="descricao" class="control-label">Descrição:</label>
                                        <textarea class="form-control" name="descricao" id="descricao" rows="4"
                                            placeholder="Digite a descrição do evento"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="organizadores" class="control-label">Organizadores:</label>
                                        <input type="text" class="form-control" name="organizadores" id="organizadores"
                                            placeholder="Digite os organizadores do evento">
                                    </div>
                                    <div class="mb-3">
                                        <label for="localevento" class="control-label">Local do evento:</label>
                                        <input type="text" class="form-control" name="localevento" id="localevento"
                                            placeholder="Digite o local do evento">
                                    </div>
                                    <div class="mb-3">
                                        <label for="linkdivulgacao" class="control-label">Link de divulgação:</label>
                                        <input type="text" class="form-control" name="linkdivulgacao" id="linkdivulgacao"
                                            placeholder="Insira link de divulgação">
                                    </div>

                                    <div class="mb-3">
                                        <label for="horariostart" class="control-label">Horário inicial:</label>
                                        <input type="time" class="form-control" name="horariostart" id="horariostart"
                                            placeholder="Data do evento">
                                    </div>
                                    <div class="mb-3">
                                        <label for="horarioend" class="control-label">Horário Fim:</label>
                                        <input type="time" class="form-control" name="horarioend" id="horarioend"
                                            placeholder="Data do evento">
                                    </div>

                                    <div class="mb-3" hidden>
                                        <label for="start" class="control-label">Start:</label>
                                        <input type="date" class="form-control" name="start" id="start"
                                            placeholder="Data do evento">
                                    </div>
                                    <div class="mb-3" hidden>
                                        <label for="end" class="control-label">End:</label>
                                        <input type="date" class="form-control" name="end" id="end"
                                            placeholder="Término do evento">
                                    </div>

                                </form>


                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button> --}}

                                @if (Auth::check())
                                    @if (auth()->user()->perfil == 'administrador' || auth()->user()->perfil == 'Ascom')
                                        <button type="button" class="btn btn-success" id="btnSalvar"
                                            data-bs-toggle="modal" data-bs-target="#evento">Salvar</button>
                                        <button type="button" class="btn btn-warning" id="btnEditar"
                                            data-bs-toggle="modal" data-bs-target="#evento">Atualizar</button>
                                        <button type="button" class="btn btn-danger" id="btnExcluir"
                                            data-bs-toggle="modal" data-bs-target="#evento">Excluir</button>
                                    @endif
                                @endif

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>


                            </div>
                        </div>
                    </div>
                </div>




                {{-- FIM TESTE MODAL --}}



                {{--  --}}
            </div>
        </div>



    </section>
@endsection


@section('js')
    {{-- <script src="{{ url(asset('web/js/agenda.js')) }}"></script> --}}

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script>
        var baseURL = {!! json_encode(url('/')) !!}

        document.addEventListener('DOMContentLoaded', function() {

            let formulario = document.querySelector("form")

            const calendarEl = document.getElementById('calendar')
            const calendar = new FullCalendar.Calendar(calendarEl, {

                locale: 'pt-br',
                noEventsMessage: 'Não há eventos para exibir',
                allDayText: '24 horas',
                buttonText: {
                    today: "Hoje",
                    month: "Mês",
                    week: "Semana",
                    day: "Dia",
                    list: 'Lista',
                },


                initialView: 'dayGridMonth',
                locale: "br",
                // displayEventTime: false,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    // right: 'dayGridMonth,timeGridWeek,timeGridDay',
                    right: 'dayGridMonth,listWeek',
                },

                events: baseURL + "/agenda/exibir_eventos",

                @if (Auth::check())
                    @if (auth()->user()->perfil == 'administrador' || auth()->user()->perfil == 'ascom')

                        dateClick: function(info) {

                            formulario.reset();

                            formulario.start.value = info.dateStr;
                            formulario.end.value = info.dateStr;


                            // $("#evento").modal("show");
                            //abrir modal
                            const myModalEl = document.getElementById('evento');
                            var myModal = new bootstrap.Modal(myModalEl);
                            myModal.show();



                        },
                    @endif
                @endif
                eventClick: function(info) {
                    var evento = info.event;


                    axios.post(baseURL + "/agenda/editar_evento/" + info.event.id)
                        .then(
                            (response) => {

                                formulario.id.value = response.data.evento.id;
                                formulario.title.value = response.data.evento.title;
                                formulario.descricao.value = response.data.evento.descricao;
                                formulario.organizadores.value = response.data.evento.organizadores;
                                formulario.localevento.value = response.data.evento.localevento;
                                formulario.linkdivulgacao.value = response.data.evento.linkdivulgacao;

                                formulario.horariostart.value = response.data.horariostart;
                                formulario.horarioend.value = response.data.horarioend;

                                formulario.start.value = response.data.evento.start;
                                formulario.end.value = response.data.evento.end;
                                //abrir modal
                                const myModalEl = document.getElementById('evento');
                                var myModal = new bootstrap.Modal(myModalEl);
                                myModal.show();
                            }
                        ).catch(
                            error => {
                                if (error.response) {
                                    console.log(error.response.data)
                                }
                            }
                        )




                }



            })

            calendar.render()

            document.getElementById("btnSalvar").addEventListener("click", function() {

                enviarDados("/agenda/inserir_evento");
            });

            document.getElementById("btnExcluir").addEventListener("click", function() {

                enviarDados("/agenda/excluir_evento/" + formulario.id.value);
            });

            document.getElementById("btnEditar").addEventListener("click", function() {

                enviarDados("/agenda/atualizar_evento/" + formulario.id.value);
            });


            function enviarDados(url) {
                const data = new FormData(formulario)

                const novaURL = baseURL + url;

                axios.post(novaURL, data)
                    .then(
                        (response) => {
                            calendar.refetchEvents();
                            // $("#evento").modal("hide");

                            const modalElement = document.getElementById("evento");
                            const btnFechar = document.getElementById("btnSalvar");

                            const modal = new bootstrap.Modal(modalElement);
                            btnFechar.addEventListener("click", function() {
                                modal.hide();
                            });

                        }
                    ).catch(
                        error => {
                            if (error.response) {
                                console.log(error.response.data)
                            }
                        }
                    )
            }


        })
    </script>
@endsection
