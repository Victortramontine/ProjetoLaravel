<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index()
    {
        return Tarefa::all();
    }

    public function store(Request $request)
    {
        Tarefa ::create($request->all());
        return ('Tarefa criada com sucesso');
    }

    public function show(string $id)
    {
        $tarefa = Tarefa::find($id);
        if(!$tarefa){
            return "A tarefa selecionada não existe";
        }
        return $tarefa;
    }

    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::find($id);
        if(!$tarefa){
            return "A tarefa selecionada não existe";
        }
        $tarefa->update($request->all());
        return ('Tarefa atualizada com sucesso');
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::find($id);
        if(!$tarefa){
            return "A tarefa selecionada não existe";
        }
        $tarefa->delete();
        return ('Tarefa excluida com sucesso');
    }
}
