@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
<<<<<<< HEAD
                    Edit Task
=======
                    New Task
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New Task Form -->
<<<<<<< HEAD
                    <form action="/update-task/{{$tasks->id}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{method_field('put') }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"
                                       value="{{$tasks->name }}">
                            </div>
                        </div>

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control"
                                       value="{{$tasks->name }}">
                            </div>
                        </div>

=======
                    <form action="/update/{{$tasks->id}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{$tasks->name}}">
                            </div>
                        </div>
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
                        <!-- Task alamat -->
                        <div class="form-group">
                            <label for="task-alamat" class="col-sm-3 control-label">alamat</label>

                            <div class="col-sm-6">
<<<<<<< HEAD
                                <input type="text" name="alamat" id="task-alamat" class="form-control"
                                       value="{{$tasks->alamat }}">
                            </div>
                        </div>

                        <!-- Task umur -->
                        <div class="form-group">
                            <label for="task- umur " class="col-sm-3 control-label"> umur </label>

                            <div class="col-sm-6">
                                <input type="text" name=" umur " id="task- umur " class="form-control"
                                       value="{{$tasks-> umur  }}">
                            </div>
                        </div>

                        <!-- Task jenis_kelamin -->
                        <div class="form-group">
                            <label for="task-jenis_kelamin" class="col-sm-3 control-label">jenis_kelamin</label>

                            <div class="col-sm-6">
                                <input type="text" name="jenis_kelamin" id="task-jenis_kelamin" class="form-control"
                                       value="{{$tasks->jenis_kelamin }}">
                            </div>
                        </div>

                        <!-- Task jenis_kamar -->
                        <div class="form-group">
                            <label for="task-jenis_kamar" class="col-sm-3 control-label">jenis_kamar</label>

                            <div class="col-sm-6">
                                <input type="text" name="jenis_kamar" id="task-jenis_kamar" class="form-control"
                                       value="{{$tasks->jenis_kamar}}">
                            </div>
                        </div>


=======
                                <input type="text" name="alamat" id="task-alamat" class="form-control" value="{{$tasks->alamat}}">
                            </div>
                        </div>

>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
<<<<<<< HEAD
                                    <i class="fa fa-plus"></i>Add Task
                                </button>

                                <a href="/" class="btn btn-default">Kembali</a>
=======
                                    <i class="fa fa-plus"></i>edit
                                </button>
                                <a href ="/" class="fa fa-plus">
                                    kembali
                                </a>
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<<<<<<< HEAD

=======
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
            <!-- Current Tasks -->

        </div>
    </div>
@endsection
