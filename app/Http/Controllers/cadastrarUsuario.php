<?php

namespace App\Http\Controllers;

use App\Models\usuarioModel;
use Illuminate\Http\Request;

class cadastrarUsuario extends Controller
{
    // index coleta os dados 
    public function index()
    {
        $dados = usuarioModel::all();

        return view('paginas.cadastrar')->With('dados', $dados);
    } //fim do método index 

    public function home()
    {
        return view('paginas.home');
    } //fim do método index 

    public function store(Request $request)
    { // store envia pro banco de dados
        $emailUsuario = $request->input('email'); // coletando dados do formulário
        $passwordUsuario = $request->input('password');

        $model = new usuarioModel();
        $model->email = $emailUsuario;
        $model->password = $passwordUsuario;
        $model->save(); //armazenar os dados no bd

        return redirect('/home');
    } // fim do metodo

}
