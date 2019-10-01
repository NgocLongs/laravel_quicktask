@extends('layouts.app')
@section('content')
	<div class="panel-body">
		<!-- Display Validation Errors -->
		@include('common.errors')

	    <!-- Add New Task -->
		<div class="well">
			<p><strong>{{ trans('message.New Task') }}</strong></p>
		</div>
		<form action="{{ url('task') }}" method="POST" accept-charset="utf-8" class="form-horizontal">
			@csrf

			<!-- Task Name -->
		    <div class="form-group">
		    	<label for="" class="col-sm-3 control-label">{{ trans('message.Task') }}</label>
		    	
		    	<div class="col-sm-6">
		    		<input type="text" name="name" id="task-name" class="form-control">
		    	</div>
		    </div>

		    <!-- Add Task Button -->
		    <div class="form-group">
		    	<div class="col-sm-offset-3 col-sm-6">
		    		<button type="submit" class="btn btn-default">
		    			<i class="fa fa-plus"></i> {{ trans('message.Add') }} {{ trans('message.Task') }}
		    		</button>
		    	</div>
		    </div>	
		</form>
	</div>

    <!-- Show List Task -->
	<div class="panel-body align">
		<div class="well">
			<p><strong>{{ trans('message.Task List') }}</strong></p>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>{{ trans('message.Task') }}</th>
						<th>{{ trans('message.Action') }}</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tasks as $task)
					<tr>
						<td>{{ $task->name }}</td>
						<td>
							<form action="{{ route('task-delete', $task->id) }}" method="POST">
								@csrf
								@method('delete')
								<button type="submit" class="btn btn-danger">
									<i class="fa fa-trash"> {{ trans('message.Delete') }}</i>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
