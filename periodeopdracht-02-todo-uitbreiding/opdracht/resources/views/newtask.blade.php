@extends('layouts.main')

@section('content')

<h1> create new task</h1>


@foreach ($errors->all() as $error)
		
		<p class="error">{{ $error }}</p>
		
@endforeach

<form method="post">

	<input type="text" name="newtask"/>
	<input type="submit" name="submit"/>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	
</form>
@stop