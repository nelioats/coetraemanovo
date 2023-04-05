@extends('master')

@section('content')


    <!-- ======= Hero Section ======= -->
    <section class="hero-pages-login d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>REGISTRAR</h1>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>REGISTRAR</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- End Hero Section -->


    <main id="main">



        <div class="register mt-4">

            <div class="container px-4">
                <div class="row gx-5">


                    <div class="col-12 col-md-12 m-auto shadow">


                        @if ($errors->all())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger text-center">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form role="form" class="form-style p-3 p-md-4" action="{{ route('saveUser') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 form-group">
                                    <label>Digite seu nome completo:</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Diite seu nome completo" required value="{{ old('name') }}">
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Informe seu E-mail" required value="{{ old('email') }}">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-6 form-group">
                                    <label>Senha:</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Defina sua senha" required>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <label for="name">Confirmação de Senha:</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Confirme sua senha" required>
                                </div>
                            </div>


                            <div class="text-center mt-4"><button type="submit">Cadastrar</button></div>

                        </form>



                        <div class="text-center m-3 pb-3">
                            <p>Já tem uma conta?<span class="clique-aqui"> <a href="{{ route('login') }}">Clique
                                        aqui</a> </span></p>
                        </div>



                    </div>
                </div>
            </div>

        </div><!-- End Contact Section -->
    </main>
@endsection
