<x-layout>
    <style>
        #tableNota {
            background: #158187;
        }
    </style>

    <!-- conteudo -->
    <div class="row align-items-start" style=" margin:60px;">
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
                                type="submit" href="note" data-mdb-ripple-init>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                                    <path
                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                </svg>
                                Salvar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col align-self-center bg-danger-subtle" style=" margin:10px; border-radius:10px; ">
            @csrf <!-- Valida o formulário -->
            <br>
            <div class="table-responsive">
                <table class="table align-middle table-danger">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">notatext</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($dados as $id)
                        <tr>
                            <th scope="row">{{$id->id}}</th>
                            <td>{{$id->title}}</td>
                            <td>{{$id->notatext}}</td>
                            <td>
                                <a class="btn " style="background:#158187;" href="/editar/{{$id->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>







</x-layout>