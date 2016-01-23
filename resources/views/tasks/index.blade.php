@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
                    <form action="/tasks" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">nama</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Task alamat -->
                        <div class="form-group">
                            <label for="task-alamat" class="col-sm-3 control-label">alamat</label>

                            <div class="col-sm-6">
                                <input type="text" name="alamat" id="task-alamat" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>
                        <!-- Task umur -->
                        <div class="form-group">
                            <label for="task-umur" class="col-sm-3 control-label">umur</label>

                            <div class="col-sm-6">
                                <input type="text" name="umur" id="task-umur" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Task jenis_kelamin -->
                        <div class="form-group">
                            <label for="task-jenis_kelamin " class="col-sm-3 control-label"><blink>jenis_kelamin</blink> </label>

                            <div class="col-sm-6">
                                <input type="text" name="jenis_kelamin" id="task-jenis_kelamin" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>
                        <!-- Task jenis_kamar -->
                        <div class="form-group">
                            <label for="task-jenis_kamar" class="col-sm-3 control-label">jenis_kamar</label>

                            <div class="col-sm-6">
                                <input type="text" name="jenis_kamar" id="task-jenis_kamar" class="form-control"
                                       value="{{ old('task') }}">
                            </div>
                        </div>


                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>nama</th>
                            <th>alamat</th>
                            <th>umur</th>
                            <th>jenis_kelamin</th>
                            <th>jenis_kamar</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->alamat }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->umur}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->jenis_kelamin }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->jenis_kamar }}</div>
                                    </td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/tasks/{{ $task->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>Delete
                                            </button>
                                            <a class="btn btn-danger alert-success" href="/task/{{$task->id}} ">
                                                detail
                                            </a>
                                            <a class="btn btn-warning alert-info" href="/edit-task/{{$task->id}} ">
                                                update
                                            </a>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
