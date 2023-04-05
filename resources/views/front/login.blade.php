@extends('master')

@section('content')


    <!-- ======= Hero Section ======= -->
    <section class="hero-pages-login d-flex align-items-center section-bg">
        <div class="container ">
            <div class="row justify-content-between gy-5">
                <div class="d-flex flex-column justify-content-center align-items-center  text-center ">
                    <div class="d-flex flex-column">
                        <h1>LOGIN</h1>
                    </div>
                </div>
                <div>
                    <ul class="breadcrumb-bg  align-items-center text-center">
                        <li class="home-bread">HOME</li><span class='bi bi-chevron-right'></span>
                        <li>LOGIN</li>
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

                    <div class="col-12 col-md-6 m-auto shadow ">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success text-center">
                                {{ $message }}
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger text-center">
                                {{ $message }}
                            </div>
                        @endif

                        @if ($errors->all())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger text-center">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif


                        <form role="form" class="form-style p-3 p-md-4" action="{{ route('verificaLogin') }}"
                            method="POST">
                            @csrf

                            <div class="col-xl-12 form-group">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" name="email" placeholder="Informe seu E-mail"
                                    required>
                            </div>

                            <div class="col-xl-12 form-group">
                                <label>Senha:</label>
                                <input type="password" class="form-control" name="password" placeholder="Digite sua senha"
                                    required>
                            </div>


                            <div class="text-center"><button type="submit">Login</button></div>
                        </form>

                        <div class="text-center m-3 pb-3">
                            <p>Não tem uma conta?<span class="clique-aqui"> <a href="{{ route('inscricao') }}">Clique
                                        aqui</a> </span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- End Contact Section -->
    </main>
@endsection
