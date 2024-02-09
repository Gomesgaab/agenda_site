<x-layout>
    <div class="position-absolute top-50 start-50 translate-middle">

        <div class="card  mb-3 0 text-white"
            style="max-width: 18rem; background:#7A4989; margin:20px; opacity: 0.8; width:400px;">

            <div class="card-header ">Cadastro</div>
            <div class="card-body">
                <form action="/cadastrar/salvar" method="POST" class="row g-3 text-white " style="background:#7A4989;">
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
                        <span id="passwordHelpInline" class="form-text text-white text-start">
                            Must be 8-20 characters long.
                        </span>
                    </div>
            </div><br>

            <div class="col-12">
                <!-- Simple link -->
                <a href="#!" style="text-decoration: none;">
                    <p class="font-monospace text-white text-center">Forgot password?</p>
                </a>
            </div>
            <!-- Submit button -->
            <div class="d-grid gap-2 col-6 mx-auto" style="margin:10px; ">
                <button style=" background:#FFD0EC; border-color:#FFD0EC;" class="btn text-dark" type="submit"
                    href="home" data-mdb-ripple-init>cadastrar</button>
            </div>
            </form>
        </div>


    </div>




</x-layout>