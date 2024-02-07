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

    public function consultarNotas()
    {
        $dados = notaModel::all();

        return view('paginas.note', compact('dados'));
    } //fim do método

    public function editar($id)
    {
        $dado = notaModel::findOrFail($id);

        return view('paginas.editar', compact('dado'));
    } //fim do método

    public function atualizar(Request $request, $id)
    {
        notaModel::where('id', $id)->update($request->all());

        return redirect('note');
    } //fim do atualizar

    public function excluir(Request $request, $id)
    {
        notaModel::where('id', $id)->delete($request->all());

        return redirect('note');
    } //fim do excluir
}
