@extends('layouts.main')

@section('content')

<h1>Todo opdracht</h1>
	
<h2>Tasks</h2>
<ul>
	@foreach ($tasks as $task)
	
		<li>
			<form method="post">
			
				<input type="checkbox"  onClick="this.form.submit()"  {{ $task->done ? 'checked' : '' }} />
				<input type="hidden" name="task_id" value="{{$task->id }}" />
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				{{ e($task->name) }} (<a href="{{ URL::route('delete', $task->id) }}">delete</a>)
			</form>
		</li>
		
	@endforeach
</ul>	




<a href="{{ URL::to('newtask') }}">New task</a>
@stop


