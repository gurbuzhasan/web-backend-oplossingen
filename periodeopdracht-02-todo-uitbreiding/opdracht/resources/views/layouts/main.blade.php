<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Examenopdracht">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TODO</title>
        <link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/css/global.css">

    </head>
    <body>

    	<div id="container">

        <header class="group">
            <div>
                <a href="{{ URL::to('/') }}">Home</a>
            </div>

            <nav>
                <ul>
					@if(Auth::check())
                	<li><a href="{{ URL::to('logout') }}">Logout</a></li>
					@else
					<li><a href="{{ URL::to('login') }}">Login</a></li>
					<li><a href="{{ URL::to('register') }}">Registreer</a></li>
					@endif
                    
                </ul>
            </nav><!-- end nav -->
        </header>

        
        <div class="body">
        
                
        	<!-- body content komt hier terecht -->
			@yield('content')
        </div>
    </body>
</html>