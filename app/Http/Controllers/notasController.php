<?php

namespace App\Http\Controllers;

use App\Models\notaModel;
use Illuminate\Http\Request;

class notasController extends Controller
{
    public function note()
    {
        $dados = notaModel::all();

        return view('paginas.note')->With('dados', $dados);
        ;
    } //fim do método index 
    public function store(Request $request)
    { // store envia pro banco de dados
        $title = $request->input('title'); // coletando dados do formulário
        $notatext = $request->input('notatext');

        $model = new notaModel();
        $model->title = $title;
        $model->notatext = $notatext;
        $model->save(); //armazenar os dados no bd

        return redirect('/note');
    } // fim do metodo
}
