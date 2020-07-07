@extends('todos.layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="pull-left">
				<h2>Мои задачи на ближайшее будущее</h2>
			</div>
			<div>
				<a href="{{ route('todos.create') }}" class="btn btn-success btn-block">
					Добавить задачу
				</a>
			</div>
		</div>
	</div>

@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<table class="table">
	<tr>
		<th> <h3>Список задач:</h3></th>
	</tr>
	@foreach($todos as $todo)
	<tr>
		<td>{{ $todo -> todo }}</td>
		<td>
			{!! Form::open(['method' => 'DELETE', 'route' => ['todos.destroy',$todo->id]]) !!}
			<div class="col-sm-12">
				<button class="btn btn-block btn-danger">Удалить</button>
			</div>
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>

{!! $todos->render() !!}
@endsection