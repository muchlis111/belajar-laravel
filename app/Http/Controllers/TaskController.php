<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    /**
     * Create a new task.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'umur' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'jenis_kamar' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_kamar' => $request->jenis_kamar,

        ]);

        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request $request
     * @param  Task $task
     * @return Response
     */
    public function destroy($id, Request $request, Task $task)
    {
//        $this->authorize('destroy', $task);

//        $task->delete();
        Task::findOrFail($id)->delete();


        return redirect('/tasks');
    }

    public function detail($id)
    {
        return view('detail', [
            'tasks' => Task::find($id),
        ]);
    }

    public function edit($id)
    {
        return view('update', [
            'tasks' => Task::find($id),
        ]);
    }


    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->alamat = $request->alamat;
        $task->umur = $request->umur;
        $task->jenis_kelamin = $request->jenis_kelamin;
        $task->jenis_kamar = $request->jenis_kamar;
        $task->save();

        return redirect('/tasks');
    }
}
