<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 /**
     * Exibe a lista de tarefas.
     *
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $taskCompleto = Task::all();

        return view('Tasks.index', compact('taskCompleto'));
    }

    public function create() 
    {
        return view('Tasks.create');    
    }

    public function store(Request $request)
    {
        // Validação dos dados dos formularios 
        $request->validate([
            'tecnico' => 'required|max:255',
        ]);

        $validatedItens = $request->validate([
            'itens.*.description' => 'required|max:255',
            'itens.*.valor' => 'required|numeric',
            'itens.*.data' => 'required|date',
        ]);

        foreach ($validatedItens['itens'] as $item) {
            $task = Task::create([
                'tecnico' => $request->input('tecnico'),
                'description' => $item['description'],
                'valor' => $item['valor'],
                'data' => $item['data']
            ]);
        }

        // cria e salva tarefa 
        // $task = Task::create($validatedData);

        // Redireciona de volta para lista de tarefas 
        return redirect('/tasks')->with('success','Tarefa criada com sucesso ');
    }
}
