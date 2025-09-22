<?php

namespace App\Http\Controllers;

use App\Models\TaskModelo;
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
        $taskCompleto = TaskModelo::all();

        return view('Tasks.index', compact('taskCompleto'));
    }
}
