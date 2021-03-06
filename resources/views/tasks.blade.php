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
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name -->
						<div class="form-group">
<<<<<<< HEAD
							<label for="task-name" class="col-sm-3 control-label">Task</label>
=======
							<label for="task-name" class="col-sm-3 control-label">name</label>
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646

							<div class="col-sm-6">
								<input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
							</div>
						</div>
<<<<<<< HEAD





						<!-- Task Address -->
						<div class="form-group">
							<label for="task-address" class="col-sm-3 control-label">Address</label>

							<div class="col-sm-6">
								<input type="text" name="address" id="task-address" class="form-control" value="{{ old('task') }}">
=======
						<!-- Task alamat -->
						<div class="form-group">
							<label for="task-alamat" class="col-sm-3 control-label">alamat</label>

							<div class="col-sm-6">
								<input type="text" name="alamat" id="task-alamat" class="form-control" value="{{ old('task') }}">
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
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
<<<<<<< HEAD
								<th>nama</th>
								<th>alamat</th>
								<th>umur</th>
								<th>jenis_kelamin</th>
								<th>jenis_kamar</th>
=======
								<th>Task</th>
								<th>alamat</th>
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($tasks as $task)
									<tr>
										<td class="table-text"><div>{{ $task->name }}</div></td>
<<<<<<< HEAD
										<td class="table-text"><div>{{ $task->alamat }}</div></td>
										<td class="table-text"><div>{{ $task->umur }}</div></td>
										<td class="table-text"><div>{{ $task->jenis_kelamin }}</div></td>
										<td class="table-text"><div>{{ $task->jenis_kamar }}</div></td>
=======
										<td class="table-text"><div>{{ $task->alamat}}</div></td>




>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646


										<!-- Task Delete Button -->
										<td>
											<form action="/task/{{ $task->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>Delete
												</button>
<<<<<<< HEAD
												<a class="btn btn-danger alert-success" href="/task/{{$task->id}} ">
													detail
												</a>
												<a class="btn btn-warning alert-info" href="/update/{{$task->id}} ">
													update
=======
												<a class="btn btn-info alert-success" href="/task/{{$task->id}} ">detail
												</a><a class="btn btn-warning alert-info"href="/update/{{$task->id}} ">update
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
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
