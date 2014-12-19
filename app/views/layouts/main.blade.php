<!DOCTYPE html>
<html>
<head>
	<title>Pen Tap</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>

	<nav class="navbar navbar-inverse" role="navigation">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <span>Pentap</span>
	      </a>
	    </div>
	  </div>
	</nav>

	<div class="container">
			
		@yield('content')

	</div>

</body>
</html>