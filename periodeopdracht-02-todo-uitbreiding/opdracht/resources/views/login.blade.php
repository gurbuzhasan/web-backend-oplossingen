@extends('layouts.main')

@section('content')

<h2>Meld je aan.</h2>


	@foreach ($errors->all() as $error)
		
		<p class="error">{{ $error }}</p>
		
	@endforeach


	<form method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">

    <!-- username field -->
    <p>
        <label for="email">Email</label><br/>
        <input name="email" type="text" id="email">
    </p>

    <!-- password field -->
    <p>
        <label for="password">Password</label><br/>
        <input name="password" type="password" value="" id="password">
    </p>

    <!-- submit button -->
    <p><input type="submit" value="Login"></p>

    </form>
@stop