<x-layout>
    <!-- conteudo -->
    <div class="row align-items-start" style="background:#474F7A; margin:60px;">
        <!-- primeira coluna -->
        <div class="col-3">
            <div class="card  mb-3 0 text-white" style="max-width: 18rem; background:#81689D; margin:20px;">

                <div class="card-header ">Nota</div>
                <div class="card-body">
                    <form action="/note/salvar" method="POST" class="row g-3 text-white " style="background:#81689D;">
                        @csrf <!-- valida o formulário -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title nota">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nota</label>
                            <textarea type="text" class="form-control" id="notatext" name="notatext"
                                rows="3"></textarea>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin:10px; ">
                            <button style=" background:#FFD0EC; border-color:#FFD0EC;" class="btn text-dark"
                                type="submit" href="note" data-mdb-ripple-init>Salvar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col align-self-center" style="background:#81689D; margin:20px; ">
            <div class="col">
                <div class="container">
                    @foreach($dados as $dado)
                    <li class="list-group-item">{{$dado->title}}</li>
                    <li class="list-group-item">{{$dado->notatext}}</li>

                    @endforeach
                </div>
            </div>
        </div>
    </div>







</x-layout>