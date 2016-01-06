<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		Guillaume Lefrant
		@show
	</title>

	@include('partials.favicon')

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheets/frontend.css') }}" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
</head>
<body>
	@include('partials.header')

	<div class="container-full">
		@yield('content')
	</div>

	@include('partials.footer')
	<script type="text/javascript" src="{{ asset('assets/javascript/frontend.js') }}"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-67560863-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
