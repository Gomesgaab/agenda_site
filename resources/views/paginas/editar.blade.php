<x-layout>
    <style>
        #container-Form {
            margin: 20px;
            background: #158187;
            border-radius: 5%;
            align-items: start;
            justify-self: start;
            height: auto;
            width: 100%;

        }

        #formEdit {
            margin: 20px;
        }

        
    </style>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                One of three columns
            </div>
            <div class="col" id="container-Form">
                <div>
                    <form id="formEdit" action="../atualizar/{{$dado->id}}" method="get">


                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <div class="form-floating">
                                <input type="text" class="form-control " id="title" name="title"
                                    value="{{$dado->title}}" required placeholder="Username" required>
                                <label for="floatingInputGroup2"> title:</label>
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div><br>


                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" type="text" id="notatext"
                                name="notatext" value="{{$dado->notatext}}" required style="height: 100px"></textarea>
                            <label for="floatingTextarea2">nota</label>
                        </div><br>

                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-floppy2-fill" viewBox="0 0 16 16">
                                <path d="M12 2h-2v3h2z" />
                                <path
                                    d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1" />
                            </svg>
                            <p>Atualizar</p>
                        </button>
                        <a class="btn btn-primary" href="../note">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                            </svg>
                            <P>
                                Voltar
                            </P>
                        </a>
                        <!-- Botão Excluir com modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eraser" viewBox="0 0 16 16">
                                <path
                                    d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z" />
                            </svg>
                            <p>
                                Excluir
                            </p>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Tem certeza que deseja excluir o cliente: {{$dado->nome}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Não</button>
                                        <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim do div da modal -->
                    </form>

                </div>
            </div>
            <div class="col">
                One of three columns
            </div>
        </div>
    </div>


</x-layout>