@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages-login d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>Controle de usuários</h1>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>Controle de usuários</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section class="hero-pages-content">

        <div class="container px-4 text-center">
            <div class="row">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Perfil</th>
                                <th scope="col" class="text-center">Editar</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($usuarios as $user)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->perfil }}</td>

                                    <td class="text-center">

                                        <a href="{{ route('user', ['id' => $user->id]) }}"><button
                                                class="btn btn-book-a-table-sm-users">Editar</button></a>
                                    </td>
                                </tr>
                            @endforeach




                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </section>
@endsection
