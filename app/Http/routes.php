<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Task Routes
Route::get('/tasks', 'TaskController@index');
Route::get('/task/{id}', 'TaskController@detail');
Route::get('/edit-task/{id}', 'TaskController@edit');
Route::post('/tasks', 'TaskController@store');
Route::put('/update-task/{id}', 'TaskController@update');
Route::delete('/tasks/{task}', 'TaskController@destroy');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
=======
use App\Task;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    return view('tasks', [
        'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
});

/**
 * Detail
 */

Route::get('task/{id}', function ($id) {
    return view('detail', [
        'tasks' => Task::find($id)
    ]);
});
Route::get('update/{id}', function ($id) {
    return view('update', [
        'tasks' => Task::find($id)
    ]);
});

Route::put('update/{id}',function ($id,request  $requirest){
    $validation = Validator::make( $requirest->all(), [
        'name' => 'required|max:255',
        'alamat' => 'required|max:255',
    ]);
    if ($validation->fails()) {
        return redirect('/')
            ->withinput()
            ->witherrors($validation);
    }
    $task = Task::find($id);
    $task->name = $requirest->name;
    $task->alamat = $requirest->alamat;
    $task->save();

    return redirect('/');


});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255|min:3',
        'alamat' => 'required|max:255|min:3',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->alamat = $request->alamat;
    $task->save();

    return redirect('/');
});


/**
 * Delete Task
 */
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
//    return "data dengan id #" . $id . " berhasil dihapus";
});
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
