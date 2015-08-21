<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{{ $pageName }}} | Lefrant Guillaume</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon" />
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/jquery-2.1.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/transit.min.js"></script>
	<script src="/js/doc.js"></script>
	<script src="/js/ajax.js"></script>
	@yield('endhead')
</head>
<body class="text-center">
	<div id="header">
		<nav class="col-xs-12 navbar" role="navigation">
			<ul class="list-inline">
				<li><a href="/">Home</a></li>
				<li><a href="{{{ URL::to('cv') }}}">Interactive CV</a></li>
				<li><a href="{{{ URL::to('projects') }}}">Projects</a></li>
				<li><a href="{{{ URL::to('contact') }}}">Contact</a></li>
			</ul>
		</nav>
		<div class="page-header col-xs-12">
			<h1 style='font-family: "Helvetica Neue", Helvetica, Verdana, sans-serif;font-weight: lighter; font-size: 50px;'>Lefrant Guillaume <small> &mdash; {{{ $pageName }}}</small></h1>
		</div>
	</div>
	@yield('page')
	<div id="footer" class="container">
		<div class="pull-left">
			@include('social-bar', array('height' => '24'))
		</div>
		<span class="col-xs-12 col-sm-12 col-md-4 text-right pull-right" style="line-height: 24px; font-family: LoLFont Arial sans-serif;">
			__&nbsp;&nbsp;&nbsp;&nbsp;<em>Made by Guillaume LEFRANT.</em>&nbsp;&nbsp;&nbsp;&nbsp;__
		</span>
	</div>
</body>
</html>
