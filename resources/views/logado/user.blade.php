@extends('master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section class="hero-pages-login d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>Usuários</h1>
                        <p>Controle de usuários</p>
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

        <div class="container px-4">
            <div class="row">


                <form action="{{ route('updateuser') }}" method="POST">
                    @csrf

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <input type="text" name="id" value="{{ $usuario->id }}" hidden>
                            <thead>
                                <tr>
                                    <th scope="col">NOME:</th>
                                    <td scope="col">{{ $usuario->name }}</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="col">E-mail:</th>
                                    <td scope="col">{{ $usuario->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perfil:</th>
                                    <td>
                                        <select name="perfil" class="form-control">
                                            <option value="" selected>...</option>
                                            <option value="ascom">Ascom</option>
                                            <option value="administrador">Administrador</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td scope="col">
                                        <button class="btn btn-book-a-table-md">Atualizar</button>
                                    </td>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                </form>



            </div>
        </div>



    </section>
@endsection
