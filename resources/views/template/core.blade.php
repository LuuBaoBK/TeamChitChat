<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!--CORE CSS -->
	    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	    <!--Additional CSS -->
	    @yield('CSS')
	    <!-- JS -->
	    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
	    <div class="container">
			@yield('content')
		</div>
    	
    	<!--Additional JS -->
	    @yield('JS')
    </body>
</html>