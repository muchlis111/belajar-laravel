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
                                    <td class="table-text"><div>Address</div></td>
                                    <td class="table-text"><div>{{ $tasks->address }}</div></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
@endsection
