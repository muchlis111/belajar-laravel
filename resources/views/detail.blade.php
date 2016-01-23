@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                             <tbody>

                                <tr>
                                    <td class="table-text"><div>Name</div></td>
                                    <td class="table-text"><div>{{ $tasks->name }}</div></td>
                                </tr>
                                <tr>
                                    <td class="table-text"><div>alamat</div></td>
                                    <td class="table-text"><div>{{ $tasks->alamat }}</div></td>

                                </tr>
                                <tr>
                                    <td class="table-text"><div>umur</div></td>
                                    <td class="table-text"><div>{{ $tasks->umur }}</div></td>

                                </tr>
                                <tr>
                                    <td class="table-text"><div>jenis_kelamin</div></td>
                                    <td class="table-text"><div>{{ $tasks-> jenis_kelamin }}</div></td>

                                </tr>
                                <tr>
                                    <td class="table-text"><div>jenis_kamar</div></td>
                                    <td class="table-text"><div>{{ $tasks-> jenis_kamar }}</div></td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
@endsection
