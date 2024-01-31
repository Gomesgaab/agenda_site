<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <img src="./bootstrep/img.php" alt="">
    
</body>
</html>

<x-layout title="Login">


    <!-- navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-calendar-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1m7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                </svg>
                Agenda
            </a>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                One of three columns
            </div>
            <div class="col">
                <div class="card text-bg-primary mb-3 position-absolute top-50 start-50 translate-middle"
                    style="max-width: 18rem;">

                    <div class="card-header text-bg-dark p-3">Login</div>
                    <div class="card-body text-bg-dark p-3">
                        <form action="/cadastrar/salvar" method="POST" class="row g-3">
                            @csrf <!-- valida o formulário -->
                            <div class="col-md-10 text-start">
                                <label for="inputEmail" class="form-label ">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Password</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="password" name="password" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                    <span id="passwordHelpInline" class="form-text">
                                        Must be 8-20 characters long.
                                    </span>
                                </div>
                            </div>

                            <!-- conteudo -->
                            <div class="row mb-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example34"
                                            checked />
                                        <label class="form-check-label" for="form2Example34"> Gardar Conta </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <!-- Simple link -->
                                <a href="#!">
                                    <p class="font-monospace">Forgot password?</p>
                                </a>
                            </div>
                            <!-- Submit button -->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit" data-mdb-ripple-init>cadastrar</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
            <div class="col">
                <div class="container">
                    <!-- $dados tras dados da controller dado coloca no formulario -->
                    @foreach($dados as $dado)
                    <li class="list-group-item">{{$dado->email}}</li>
                    <li class="list-group-item">{{$dado->password}}</li>
                    <br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



</x-layout>