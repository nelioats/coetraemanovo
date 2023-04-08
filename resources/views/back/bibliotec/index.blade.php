@extends('back.master')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">BibliotecMA</h1>
        </div>


        <button type="button" class="btn btn-primary mb-3"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            <a href="{{ route('bibliotec_create') }}" style="color: white; text-decoration: none;">Inserir</a>
        </button>

        @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                {{ $message }}
            </div>
        @endif



        @if ($biblitoec->count() == 0)
            <div class="alert alert-secondary text-center">
                Sem registros
            </div>
        @else
            <div class="table-responsive">
                <table id="exampleData" style="font-size: 0.85rem" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Organização</th>
                            <th scope="col">Tipo de Material</th>
                            <th scope="col">Título</th>
                            <th scope="col">Autores</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($biblitoec as $publicacao)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>{{ $publicacao->organizacao }}</td>
                                <td>{{ $publicacao->tipomaterial }}</td>
                                <td>{{ $publicacao->titulo }}</td>
                                <td>{{ $publicacao->autores }}</td>
                                <td><a href="{{ route('bibliotec_edit', ['id' => $publicacao->id]) }}"><span
                                            data-feather="edit" class="align-text-bottom"></span></a></td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @endif



    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $("#exampleData").DataTable({
                language: {
                    decimal: "",
                    emptyTable: "Não foram encontrados registros",
                    info: "Apresentar _START_ de _END_ para _TOTAL_ registros",
                    infoEmpty: "Apresentar 0 de 0 para 0 registros",
                    infoFiltered: "(filtered from _MAX_ total entries)",
                    infoPostFix: "",
                    thousands: ",",
                    lengthMenu: "Apresentar _MENU_ registros",
                    loadingRecords: "Loading...",
                    processing: "",
                    search: "Pesquisar:",
                    zeroRecords: "No matching records found",
                    paginate: {
                        first: "First",
                        last: "Last",
                        next: "Próximo",
                        previous: "Anterior",
                    },
                    aria: {
                        sortAscending: ": activate to sort column ascending",
                        sortDescending: ": activate to sort column descending",
                    },
                },
            });
        });
    </script>
@endsection
