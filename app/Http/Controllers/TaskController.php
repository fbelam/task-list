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
}
