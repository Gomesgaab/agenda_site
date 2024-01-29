<x-layout title="Login">
    <div class="container">
        <!-- $dados tras dados da controller dado coloca no formulario -->
        @foreach($dados as $dado)
        <li class="list-group-item">{{$dado->email}}</li>
        <li class="list-group-item">{{$dado->password}}</li>
        <br><br>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/cadastrar/salvar" method="POST">
                @csrf <!-- valida o formulário -->
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" id="email" name="email" class="form-control" placeholder="email:">
                </div><br><br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" id="password" name="password" class="form-control" placeholder="password:">
                </div><br>
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> Remember me </label>
                        </div>
                    </div>

                    <div class="col-6">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button" data-mdb-ripple-init>cadastrar</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</x-layout>